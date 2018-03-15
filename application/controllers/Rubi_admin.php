<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rubi_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper("mabuya");
        $this->load->model('Admin_model','admin');
        $this->load->model('Cooperativa_model','coop');
        $this->load->model('Oficina_model','ofi');
        $this->load->model('Propietario_conductor_model','prop_c');
        $this->load->model('Cooperativa_propietario_conductor_model','coop_pc');
        

        @session_start();
        $this->load_language();

        $this->load->library('cart');
        //$this->load->model('gallery_model','slides');
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang']=1;
        }

        $this->init_form_validation();

    }


    public function change_lang($lang_id = 0){
    //var_dump("chsss"); die();
        if(in_array($lang_id,[1,2])){

            $_SESSION['lang'] = $lang_id;
            $this->load_language();
            redirect();

        }else{
            $_SESSION['lang'] = 1;
        }
    }
    
   
    public function index()
    {  
       //$this->load_view_admin("home");
       $this->load_view_login_user("admin/home");
    }

    public function dashboard_admin_rubi()
    {  
       $side = "side_ad_rubi";
       $this->load_view_admin("dash_admin_rubi", $side);
    }

    public function dashboard_admin_cooperativa()
    {  
       $side = "side_ad_coop";
       $this->load_view_admin("dash_admin_coop", $side);
    }

    public function dashboard_admin_oficina()
    {  
       $side = "side_ad_ofi";
       $this->load_view_admin_ofi("dash_admin_ofi", $side);
    }

    
    public function ad_oficina_boleteria()
    {  
       $side = "side_ad_ofi";
       $this->load_view_admin_ofi("admin_ofi_boleteria", $side);
    }

    public function ad_oficina_rutas()
    {  
       $data['ofis'] = $this->ofi->get_all(['id_cooperativa' => $_SESSION['id_cooperativa']],FALSE); 
       $side = "side_ad_ofi";
       $this->load_view_admin_ofi("admin_ofi_rutas", $side,$data);
    }

    public function ad_oficina_encomiendas()
    {  
       $side = "side_ad_ofi";
       $this->load_view_admin_ofi("admin_ofi_encomiendas", $side);
    }

    public function maps()
    {  
       $data['ofis'] = $this->ofi->get_all(['id_cooperativa' => $_SESSION['id_cooperativa']],FALSE); 
       $side = "side_ad_coop";
       $this->load_view_admin("maps", $side,$data);
    }

    public function administrador_de_oficinas()
    {
       $data['ofis'] = $this->ofi->get_all(['id_cooperativa' => $_SESSION['id_cooperativa']],FALSE);
       $data['ciudades'] = $this->admin->get_all_ciudades_pueblos();
       $data['planimetrias'] = $this->admin->get_planimetrias();
       $side = "side_ad_coop";
       $this->load_view_admin("admin_oficinas", $side,$data);
    }

   

    public function administrador_de_buses()
    {
       $data['ofis'] = $this->ofi->get_all(['id_cooperativa' => $_SESSION['id_cooperativa']],FALSE); 
       $data['planimetrias'] = $this->admin->get_planimetrias();
       $data['marcas'] = $this->admin->get_marcas();
       $side = "side_ad_coop";
       $this->load_view_admin("admin_buses", $side,$data);
    }

    public function administrador_de_precios()
    {
       $data['ofis'] = $this->admin->get_all_ofis_rutas_relacion($_SESSION['id_cooperativa']); 
       $side = "side_ad_coop";
       $this->load_view_admin("admin_precios_rutas", $side,$data);
    }
 
    public function createup_precio_ruta()
    {
        $id_precio_ruta = $this->input->post('id_pr');
        $precio = $this->input->post('precio');


        $n = $this->admin->up_ruta_precio($id_precio_ruta,['id_cooperativa'=> $_SESSION['id_cooperativa'],'precio'=>$precio]);
        
        if($n < 1){
          $this->admin->createup_ruta_precio(['id_cooperativa'=> $_SESSION['id_cooperativa'],'id_ruta_precio'=>$id_precio_ruta,'precio'=>$precio]);
        }
 
      $msg=''; 
      $response = array('error_msg'=> $msg); 
      echo json_encode($response);

    }

    public function calcular_rutas_precios()
    {
       $ini = $this->input->post('ini');
       $wayubs = $this->input->post('wayubs');
       $fin = $this->input->post('fin');
       $html = '';
       //var_dump($ini,$wayubs,$fin); 
       $obj_ways = (object) $wayubs;
      
       $data = $this->admin->get_all_ofis_rutas_relacion_precios($_SESSION['id_cooperativa'],$ini,$obj_ways,$fin); 
       foreach($data as $dd){
         foreach($dd as $d){

           $precio = ($d->cup_id != null) ? $d->cup_precio : $d->precio;

           $html.='<div class="form-group">
                  <label for="">'.$d->c1.' a '.$d->c2.'</label>
                  <input type="" value="'.$precio.'" class="form-control" disabled> 
                </div>'; 
         }
       }

       $msg=''; 
       $response = array('error_msg'=> $msg,'data'=>$html); 
       echo json_encode($response);
    }

    public function crear_data_ciudades()
    {
       $query = $this->db->get('ciudades_pueblos');
        $data =  $query->result();

        foreach($data as $d){
           $id_ini = $d->id_ciudad_pueblo;
       
           foreach($data as $dd){
              if($dd->id_ciudad_pueblo != $id_ini){
                $datas = ['id_ciudad_inicio'=>$id_ini,'id_ciudad_fin'=>$dd->id_ciudad_pueblo];
                 $this->admin->create_datax(['id_ciudad_inicio'=>$id_ini,'id_ciudad_fin'=>$dd->id_ciudad_pueblo]); 
                //$this->db->insert('rutas_precios', $data);
                // return $this->db->insert_id();
                var_dump($datas);
              }
           }   
        }

       $msg=''; 
       $response = array('error_msg'=> $msg); 
       echo json_encode($response); 
    }

    public function file_up_buses()
    {
      
      $n_bus = $this->input->post('n_bus');
      $prop = $this->input->post('prop');
      $c1 = $this->input->post('c1');
      $c2 = $this->input->post('c2');
      
      $marca = $this->input->post('s_marcas');
      $model = $this->input->post('s_mod');
      $plc = $this->input->post('plc');
      $srv = $this->input->post('srv');
      $plani = $this->input->post('plani');
      //var_dump($n_bus,$prop,$c1,$c2,$marca,$model,$plc,$srv,$plani); die();

      $id_bus = $this->admin->create_bus([
                                        'n_bus' => $n_bus,
                                        'id_cooperativa'=>$_SESSION['id_cooperativa'],
                                        'id_conductor_1'=> $c1,
                                        'id_conductor_2'=> $c2,
                                        'marca'=> $marca,
                                        'modelo'=> $model,
                                        'placa'=> $plc,
                                        'servicios'=> $srv,
                                        'planimetria'=> $plani,
                                         ]); 
      
      $folder ='./assets_admin/img/img_buses/';

      if($_FILES != false){
          $route = save_image_from_post($_FILES['files'], $folder,$_FILES['files']['name'], $width = 800, $height = 800, $id_bus);
          //var_dump($route);
          for($i=0; $i<=sizeof($route)-1; $i++){
          $this->admin->create_img_bus(['id_cooperativa'=>$_SESSION['id_cooperativa'],'id_bus'=>$id_bus,'img_bus'=>$route[$i][1]]); 
          }
      }
      
      $msg=''; 
      $response = array('error_msg'=> $msg); 
      echo json_encode($response); 
    } 

    public function administrador_de_propietarios()
    {
       $data['prop'] = $this->coop->get_all_p_by_cooperativa(); 
       $data['planimetrias'] = $this->admin->get_planimetrias();
       $side = "side_ad_coop";
       $this->load_view_admin("admin_propietarios", $side,$data);
    }

   

    public function update_coop()
    {
     
        $nm = $this->input->post('nm');
        $res = $this->input->post('res');
        $d = $this->input->post('desc');
        $ub = $this->input->post('ubi');
        $lat = $this->input->post('lat');
        $long = $this->input->post('long');
        $crear = $this->input->post('crear');

         $this->coop->update($_SESSION['id_cooperativa'],['nombre'=>$nm,'resumen'=>$res,'descripcion'=>$d,'ubicacion'=>$ub,'latitud'=>$lat,'longitud'=>$long,'crear'=>$crear]);
      
        $msg=''; 
        $response = array('error_msg'=> $msg); 
        echo json_encode($response); 
       
    }

    public function create_ofi()
    {
     
        //var_dump($_FILES); die();
        $msg='';
        $nm = $this->input->post('nm');
        $res = $this->input->post('res');
        $id_ub_price = $this->input->post('id_ubi_price');
        $ub = $this->input->post('ubi');
        $lat = $this->input->post('lat');
        $long = $this->input->post('long');
        $crear = $this->input->post('crear');
 
        $nm_admin = $this->input->post('nm_admin');
        $ap_admin = $this->input->post('ap_admin');
        $ci_admin = $this->input->post('ci_admin');
        $email = $this->input->post('email');
        $pass_p = $this->input->post('pass_p');

        

        $id = $this->ofi->create(['id_cooperativa'=>$_SESSION['id_cooperativa'],'nombre'=>$nm,'email'=>$email,'pass'=>$pass_p,'resumen'=>$res,'id_ubicacion_f_precio'=>$id_ub_price,'ubicacion'=>$ub,'latitud'=>$lat,'longitud'=>$long,'crear'=>$crear]);

        $id_admin = $this->admin->create(['nombre'=>$nm_admin,'apellido'=>$ap_admin,'email'=>$email,'pass'=>$pass_p,
          'cedula'=>$ci_admin,'id_cooperativa'=>$_SESSION['id_cooperativa'],'id_oficina'=>$id,'role_id'=>'3','estatus'=>'0']);
        

    if(isset($_FILES['img_perfil']['name'])){
        $upload_folder = './assets_admin/img/img_perfil_oficinas/';
        $nombre_archivo = $_FILES['img_perfil']['name'];
        $tipo_archivo = $_FILES['img_perfil']['type'];
        $tamano_archivo = $_FILES['img_perfil']['size'];
        $tmp_archivo = $_FILES['img_perfil']['tmp_name'];
        $archivador = $upload_folder.'/'.$_SESSION['id_cooperativa'].'_'.$id.'_'.$nombre_archivo;

    if(!move_uploaded_file($tmp_archivo, $archivador))
        {
           $msg='error al subir'; 
           $response = array('error_msg'=> $msg,'email'=>$email,'ruta'=>$archivador); 
           echo json_encode($response); 
        }else{
           $up = $this->ofi->update($id,['img_perfil'=>$archivador]);
           $msg=''; 
        }
    }
        $ofi = $this->ofi->get_by_id($id);
        $ofi='<option value="'.$ofi->id_oficina.'">'.$ofi->nombre.'</option>';

        $response = array('error_msg'=> $msg,'ofi'=>$ofi); 
        echo json_encode($response); 
       
    }
    public function update_data_ofi()
    {
        $id = $this->input->post('id');
        $nm = $this->input->post('nm');
        $res = $this->input->post('res');
        $ub = $this->input->post('ubi');
        $lat = $this->input->post('lat');
        $long = $this->input->post('long');

        $id = $this->ofi->update($id,['nombre'=>$nm,'resumen'=>$res,'ubicacion'=>$ub,'latitud'=>$lat,'longitud'=>$long]);
        $msg=''; 
        $response = array('error_msg'=> $msg); 
        echo json_encode($response); 
    }

    public function get_data_ofi()
    {
        $id = $this->input->post('id');
        $ofi = $this->ofi->get_by_id($id);
        $msg=''; 
        $response = array('error_msg'=> $msg,'ofi'=>$ofi->id_oficina,'nm_q'=>$ofi->nombre,'res_q'=>$ofi->resumen,'ubi_q'=>$ofi->ubicacion,'lat_q'=>$ofi->latitud,'long_q'=>$ofi->longitud); 
        echo json_encode($response); 
    }

    public function get_planimetrias()
    {
        $id = $this->input->post('id');
        $pl = $this->admin->get_planimetria_by_id($id);
        $msg=''; 
        $response = array('error_msg'=> $msg,'img'=>base_url().$pl->img_planimetria,'b'=>$pl->baño); 
        echo json_encode($response); 
    }

    public function get_select_modelos()
    {
        $msg =''; $html_models='';
        $id = $this->input->post('id'); 
        $modelos = $this->admin->get_modelos_marca($id); 

        foreach($modelos  as $m){
           $html_models .='<option value="'.$m->id_modelo.'">'.$m->modelo.'</option>'; 
        }
        $response = array('error_msg'=> $msg,'models'=>$html_models); 
        echo json_encode($response); 
    }

    public function get_select_fab()
    {
        $msg =''; $html_fab='';
        $id = $this->input->post('id'); 
        $fab = $this->admin->get_fabricantes_modelo_plan($id); 
        foreach($fab  as $f){
           $html_fab .='<option value="'.$f->id_fabricante.'">'.$f->fabricante.'</option>'; 
        }
        $response = array('error_msg'=> $msg,'fab'=>$html_fab); 
        echo json_encode($response); 
    }

    public function get_select_planimetrias()
    {
        $fab = $this->input->post('fab');
        $mod = $this->input->post('mod');
        $html='';
        $planimetrias = $this->admin->get_planimetrias_fab($fab,$mod);
        foreach($planimetrias as $p){
            $html.='<li><a  class="planis" onClick="get_pl('.$p->id_planimetria.') " >'.$p->planimetria.'</a></li>';       
        }

        $msg=''; 
        $response = array('error_msg'=> $msg,'select'=>$html); 
        echo json_encode($response); 
    }

    public function get_dc()
    {
        $msg='';
        $dni = $this->input->post('dni');
        $p = $this->input->post('p');
        $q = $this->prop_c->get_all(['ci' =>  $dni,'role_bus' =>  $p],TRUE);
        if($q == null){ $msg='Dni no existe';
          }else{
            $msg=$q->nombre.' '.$q->apellido;
          }
        $response = array('error_msg'=> $msg); 
        echo json_encode($response); 
    }

    public function get_ci_data()
    {
        $msg='';
        $ci = $this->input->post('ci');
        $q = $this->prop_c->get_all(['ci' =>  $ci],TRUE);
        if($q == null){ 
            $msg='0';
            $response = array('error_msg'=> $msg);
            echo json_encode($response);
          }else{
            $id = $q->id_propietario_conductor; $nm = $q->nombre; $ap = $q->apellido; $tlf = $q->telefono; $role = $q->role_bus; $em = $q->email;
            $response = array('error_msg'=> $msg,'nm'=>$nm,'ap'=>$ap,'em'=>$em,'telf'=>$tlf,'role'=>$role,'xid'=>$id); 
            echo json_encode($response);
          }
    }

    public function create_propietario()
    {
      $ci = $this->input->post('ci');
      $nm = $this->input->post('nm');
      $ap = $this->input->post('ap');
      $em = $this->input->post('em');
      $telf = $this->input->post('telf');
      $s_rol = $this->input->post('s_rol');
      $ex = $this->input->post('ex');
      $xid = $this->input->post('id');

      if($ex == '0'){
          $id=$this->prop_c->create(['nombre' => $nm ,'apellido' => $ap, 'ci' => $ci,'email' => $em,'telefono' => $telf,'role_bus' => $s_rol ]); 
          $xid = $id;
      }
      
       $this->coop_pc->create(['id_propietario_conductor' => $xid,'id_cooperativa' => $_SESSION['id_cooperativa']]);
          $msg = '';
      
       $response = array('error_msg'=> $msg); 
       echo json_encode($response);

    }

    public function update_propietario()
    {
      $ci = $this->input->post('ci');
      $nm = $this->input->post('nm');
      $ap = $this->input->post('ap');
      $em = $this->input->post('em');
      $telf = $this->input->post('telf');
      $s_rol = $this->input->post('s_rol');
      $ex = $this->input->post('ex');
      $id = $this->input->post('id');  

      $res = $this->prop_c->update($id ,['nombre' => $nm ,'apellido' => $ap, 'ci' => $ci,'email' => $em,'telefono' => $telf,'role_bus' => $s_rol ]);
      $msg = '';
      
       $response = array('error_msg'=> $msg); 
       echo json_encode($response);
    }


    


    public function adq_plan()
    {
        
     $mensaje = $_POST['mensaje'];
     $nombre = $_POST['nombre'];
     $email = $_POST['email'];
     $p = $_POST['p'];
     $local = (string)base_url(); $local = substr($local, 7);

     $upload_folder = './assets/pages/images';
     $nombre_archivo = $_FILES['archivo1']['name'];
     $tipo_archivo = $_FILES['archivo1']['type'];
     $tamano_archivo = $_FILES['archivo1']['size'];
     $tmp_archivo = $_FILES['archivo1']['tmp_name'];
     $archivador = $upload_folder.'/'.$nombre_archivo;
      if(!move_uploaded_file($tmp_archivo, $archivador))
      {
           $msg='error al subir'; 
           $response = array('error_msg'=> $msg,'email'=>$email,'ruta'=>$archivador); 
           echo json_encode($response); 
      }else{
           $this->user->in_susc_paq(['id_usuario' => $_SESSION['id_usuario'],'nkit'=>$p,'img_factura'=>$archivador,'estatus'=>'2']);
           $msg='subido'; 
           $response = array('error_msg'=> $msg,'email'=>$email,'ruta'=>$archivador); 
           echo json_encode($response); 
      }

    }

    public function registro()
    {
        $this->load_view_front('front/registro');
    }

     public function mi_oficina_virtual()
    {
        $data_user = $this->user->get_all(['id_usuario' => $_SESSION['id_usuario']],TRUE);
        $data['data_user'] = $data_user;
        $this->load_view_user('user/my_account',$data);
    }

    public function update(){

        $uid = $_SESSION['id_usuario'];
        $nm = $this->input->post('nombre');
        $ap = $this->input->post('ap');
        $tlf = $this->input->post('telf');
        $email = $this->input->post('email');
        $dir = $this->input->post('dir');
        $ciudad = $this->input->post('ciudad');

    if(!isset($_FILES['img_prfl']['name'])){
        $upload_folder = './assets/pages/images/img_perfil';
        $nombre_archivo = $_FILES['img_prfl']['name'];
        $tipo_archivo = $_FILES['img_prfl']['type'];
        $tamano_archivo = $_FILES['img_prfl']['size'];
        $tmp_archivo = $_FILES['img_prfl']['tmp_name'];
        $archivador = $upload_folder.'/'.$uid.$email.'_'.$nombre_archivo;

        if(!move_uploaded_file($tmp_archivo, $archivador))
        {
           $msg='error al subir'; 
           $response = array('error_msg'=> $msg,'email'=>$email,'ruta'=>$archivador); 
           echo json_encode($response); 
        }else{
            $up = $this->user->update($uid,['img_perfil'=>$archivador,'nombre'=>$nm,'apellido'=>$ap,'telefono'=>$tlf,'email'=>$email,'direccion'=>$dir,'ciudad'=>$ciudad]);
        
           $msg='Actualización satisfactoria'; 
           $response = array('error_msg'=> $msg,'email'=>$email,'ruta'=>$archivador); 
           echo json_encode($response); 
      }
    }else{
            $up = $this->user->update($uid,['nombre'=>$nm,'apellido'=>$ap,'telefono'=>$tlf,'email'=>$email,'direccion'=>$dir,'ciudad'=>$ciudad]);
        
            $msg='Actualización satisfactoria'; 
            $response = array('error_msg'=> $msg,'email'=>$email); 
            echo json_encode($response);
    }

 }

    public function execute_register(){

        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');
        $cedula = $this->input->post('cedula');
        $phone = $this->input->post('phone');
        $direccion = $this->input->post('direccion');
        $password = $this->input->post('password');
        $repeat_password = $this->input->post('repeat_password');


        $this->form_validation->set_rules('nombre', translate('nombre_lang'), 'required|min_length[1]|trim');
        $this->form_validation->set_rules('email', translate('email_lang'), "required|min_length[1]|trim|is_unique[user.email]");
        $this->form_validation->set_rules('cedula', translate('cedula_lang'), 'required|min_length[1]|trim');
        $this->form_validation->set_rules('phone', translate('phone_lang'), 'required|min_length[1]|trim');
        $this->form_validation->set_rules('password', translate('password_lang'), 'required|min_length[1]|trim');
        $this->form_validation->set_rules('repeat_password', translate('repeat_password_lang'), 'required|min_length[1]|trim');


        if ($this->form_validation->run() == false) {
            $this->response->set_message(validation_errors(), ResponseMessage::ERROR);
            redirect("front/registro");
        } else {

            if ($password == $repeat_password) {
                $d = ['name' => $nombre, 'email' => $email, 'is_active' => 1, 'password' => md5($password), 'phone' => $phone, 'cedula' => $cedula, 'direccion' => $direccion, 'role_id' => 3];
                $this->user->create($d);

                $this->response->set_message(translate('data_saved_ok'), ResponseMessage::SUCCESS);
                redirect('front/registro');
            } else {
                $this->response->set_message(translate('password_not_match'), ResponseMessage::ERROR);
                redirect("front/registro");
            }


        }
    }

    








}
