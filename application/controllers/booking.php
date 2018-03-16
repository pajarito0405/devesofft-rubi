<?php defined('BASEPATH') OR exit('No direct script access allowed');

class booking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper("mabuya");
        $this->load->model('User_model','user');
        $this->load->model('Galeria_model','bus');

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
        $data['galeria'] = $this->bus->get_carousel_home();
        $data['path_id'] = $this->uri->segment(1);
        //var_dump($data['path_id']);
        $this->load_view_booking("booking/home",$data);
    }

  
    public function rutas(){
        $web['path_id'] = $this->uri->segment(1);
        $this->load_view_booking("booking/rutas",$web);  
    }
    
    public function get_data_bus(){
        $item = $this->bus->get_item_bus();
        // $ofi = $this->ofi->get_by_id($id);
        $msg=''; 
       // $response = array('error_msg'=> $item);  
        $response = array('error_msg'=> $msg,'datos'=>$item);
        echo json_encode($response); 
    }

    public function get_data_detalle_bus(){
        $id = $this->uri->segment(3);
        $item["detalle_bus"] = $this->bus->get_item_detalle_bus($id);
        $item["detalle_cooperativa"] = $this->bus->get_item_detalle_cooperativa($id);
        $item['path_id'] = $this->uri->segment(1);
        $this->load_view_booking("booking/detalle_rutas",$item);
        //echo json_encode($response); 
    }

    public function detalle_pago(){
        $web['path_id'] = $this->uri->segment(1);
        $this->load_view_booking("booking/detalle_pago",$web);  
    }

    
    
    
    

  

    public function adq_plan(){
        
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

    public function noticiadetalle($noticia_id=0)
    {
        $noticia_object = $this->not->get_by_id($noticia_id);
        if($noticia_object) {
            $noticia_object->user_object = $this->user->get_by_id($noticia_object->user_id);
            $data['noticia_object'] = $noticia_object;

            $all_categories = $this->cat->get_all(['is_active'=>1,'id_lang'=>$_SESSION['lang']]);
            foreach($all_categories as $item_c){
                $item_c->cant_cursos = count($this->cat->get_all_products($item_c->category_id));
            }

            $data['all_categories'] = $all_categories;

            $this->load->model('tag_model','tag');
            $data['all_tags'] = $this->tag->get_all(['id_lang'=>$_SESSION['lang']]);

            $this->load_view_front('front/noticiadetalle', $data);
        }else{
            show_404();
        }
    }


    public function nosotros()
    {
        $empresa_object = $this->emp->get_by_id(1);
        if($empresa_object){
            $data['empresa_object'] = $empresa_object;
            $this->load_view_front('front/nosotros',$data);
        }else{
            show_404();
        }


    }

    public function solicitar_empleo(){

        $name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $cedula = $this->input->post('cedula');
        $ciudad = $this->input->post('ciudad');
        $telefono = $this->input->post('telefono');
        $celular = $this->input->post('celular');
        $area = $this->input->post('area');
        $email = $this->input->post('email');
        $observaciones = $this->input->post('observaciones');

        $this->form_validation->set_rules('name', translate('names_lang'), 'required|min_length[1]|trim');
        $this->form_validation->set_rules('surname', translate('surnames_lang'), 'required|min_length[1]|trim');

        $this->form_validation->set_rules('cedula', translate('cedula_lang'), 'required|min_length[1]|trim');
        $this->form_validation->set_rules('ciudad', translate('ciudad_lang'), 'required|min_length[1]|trim');

        $this->form_validation->set_rules('telefono', translate('telefono_lang'), 'required|min_length[1]|trim');
        $this->form_validation->set_rules('celular', translate('celular_lang'), 'required|min_length[1]|trim');

        $this->form_validation->set_rules('email', translate('email_may_lang'), 'required|min_length[1]|trim');

        if ($this->form_validation->run() == false) {
            $this->response->set_message(validation_errors(), ResponseMessage::ERROR);
            redirect("front/trabaja");
        }else{

            $ext = $_FILES['archivo']['name'];

            $separated = explode(   ".",$ext);
            $extension = end($separated);

            if(in_array($extension,['pdf'])) {
                $result = upload_from_post('archivo', "./uploads/solicitud_trabajo/", time() . "." . $extension,10485760);

                if ($result[0]) {

                    $this->emp->create(['nombre'=>$name,'apellidos'=>$surname,'cedula'=>$cedula,'ciudad'=>$ciudad,'telefono'=>$telefono,'celular'=>$celular,'area_id'=>$area,'email'=>$email,'observaciones'=>$observaciones,'file'=>$result[1]]);
                    $this->response->set_message(translate("solicitud_enviada_ok"), ResponseMessage::SUCCESS);
                    redirect('front/trabaja');
                } else {
                    $this->response->set_message($result[1], ResponseMessage::ERROR);
                    redirect('front/trabaja');
                }
                redirect("Image/index");
            }else{
                $this->response->set_message(translate('file_must_by_pdf'), ResponseMessage::ERROR);
                redirect('front/trabaja');
            }

        }

    }




   



    public function get_cursos_by_tags($tag_id = 0){

        $this->load->model('tag_model','tag');

        $tag_object = $this->tag->get_by_id($tag_id);

        if($tag_object){
            $all_cursos = $this->tag->get_cursos_by_tag($tag_id);

            $all_categories = $this->cat->get_all(['is_active' => 1, 'id_lang' => $_SESSION['lang']]);
            $data['all_categories'] = $all_categories;

            $data['all_cursos'] = $all_cursos;
            $this->load_view_front('front/curso_by_cat',$data);


        }else{
            show_404();
        }
    }


    
    public function noticias2()
    {
        $all_noticias = $this->not->get_all();
        foreach($all_noticias as $item){
            $user_object = $this->user->get_by_id($item->user_id);
            if($user_object){
                $item->name= $user_object->name;
            }else{
                $item->name = translate('not_defined_lang');
            }

        }
        $data['all_noticias'] = $all_noticias;
        $all_categories = $this->cat->get_all(['is_active'=>1,'id_lang'=>$_SESSION['lang']]);
        foreach($all_categories as $item_c){
            $item_c->cant_cursos = count($this->cat->get_all_products($item_c->category_id));
        }

        $data['all_categories'] = $all_categories;

        $this->load->model('tag_model','tag');
        $data['all_tags'] = $this->tag->get_all(['id_lang'=>$_SESSION['lang']]);

        $this->load_view_front('front/noticias',$data);
    }


   

   
    public function register_post(){
        $nombre = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $repeat_password = $this->input->post('repeat_password');
        $address = $this->input->post('address');

        //errors

        $list_errors = [];

        if(strlen(trim($nombre))==0 || strlen(trim($phone))==0 || strlen(trim($email))==0 || strlen(trim($password))==0 || strlen(trim($repeat_password))==0){
            $list_errors[] = translate('required_campos_lang');
        }

        $user = $this->user->get_all(['email'=>$email],true);
        if($user){
            $list_errors[] = translate('email_used_by_other_person_lang');
        }

        if(trim($password) != trim($repeat_password)){
            $list_errors[] = translate('password_not_match_lang');
        }

        if(count($list_errors)>0){
            $this->session->set_flashdata('errors',$list_errors);
            redirect('front/register');
        }else{
            $this->user->create(['name'=>$nombre,'email'=>$email,'password'=>md5($password),'phone'=>$phone,'address'=>$address,'role_id'=>4]);
            $this->session->set_flashdata('ok_register','ok');
            redirect('front/register');
        }



    }










}
