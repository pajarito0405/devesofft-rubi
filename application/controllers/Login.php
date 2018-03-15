<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('session'));
        $this->load->helper("mabuya");
        $this->load->model('Admin_model','admin');

        @session_start();
        $this->load_language();
        $this->init_form_validation();
    }

    public function index()
    {   
        $this->load->view("login");
    }

       public function auth_admin()
    {  
        $email = $this->input->post('email'); 
        //$pass = md5($this->input->post('pass')); 
        $pass = $this->input->post('pass');
        $user = $this->admin->get_all(['email' => $email, 'pass' => $pass], TRUE);
        if ($user) {

            $session_data = object_to_array($user);
            //var_dump($session_data);
            unset($session_data['password']);
            $this->session->set_userdata($session_data);
            //var_dump($_SESSION); die();
            //$_SESSION = $session_data;

         if($this->session->userdata('role_id') == 2){         
           $msg=''; $redir="Rubi_admin/dashboard_admin_cooperativa"; $param=""; $funct="";
           $response = array('error_msg'=> $msg,'redirect'=>$redir,'function'=>$funct,'param'=>$param); 
           echo json_encode($response);
         }
         if($this->session->userdata('role_id') == 3){         
           $msg=''; $redir="Rubi_admin/dashboard_admin_oficina"; $param=""; $funct="";
           $response = array('error_msg'=> $msg,'redirect'=>$redir,'function'=>$funct,'param'=>$param); 
           echo json_encode($response);
         } 

        }else{
            $msg='Error de autenticación'; $redir="rubi_admin"; $param=""; $funct="";
            $response = array('error_msg'=> $msg); 
           echo json_encode($response);
        }
    }


    public function auth()
    {    
        $email = $this->input->post('email'); 
        $pass = md5($this->input->post('pass')); 
        //$pass = $this->input->post('pass');
        $user = $this->user->get_all(['email' => $email, 'pass' => $pass], TRUE);

        if ($user) {

            $session_data = object_to_array($user);
            //var_dump($session_data);
            unset($session_data['password']);
            $this->session->set_userdata($session_data);

         if($this->session->userdata('role_id') == 2){         
           $msg=''; $redir="Front/plan"; $param=""; $funct="";
           $response = array('error_msg'=> $msg,'redirect'=>$redir,'function'=>$funct,'param'=>$param); 
           echo json_encode($response);
         }
         if($this->session->userdata('role_id') == 4){         
           $msg=''; $redir="Front/plan"; $param=""; $funct="";
           $response = array('error_msg'=> $msg,'redirect'=>$redir,'function'=>$funct,'param'=>$param); 
           echo json_encode($response);
         }

        }else{
            $msg='Error de autenticación'; $redir="Front/plan"; $param=""; $funct="";
            $response = array('error_msg'=> $msg); 
           echo json_encode($response);
        }
    }

 

    public function registrar_usuario()
    { 
        $nombre = $this->input->post('nombre');
        $ap = $this->input->post('apellido');
        $email = $this->input->post('email');
        $pass = md5($this->input->post('pass'));
        //$pass = $this->input->post('pass');
        $ci = $this->input->post('cedula');
        //$cdaf = $this->input->post('cdaf');
        //$emaf = $this->input->post('emaf');
        
        $user_exist = $this->user->get_all(['email' => $email,'cedula' => $ci], TRUE);
        if($user_exist)
         {
           $msg = "Ya existe un suario registrado con este email o cédula ";
           var_dump($msg);
          //var_dump("usuario : ".$email); die();
         }else{
            $cod = '0000000'; $route = './assets/pages/images/img_perfil/img_default.jpg';
            $reg_user = $this->user->create(['cod_af' => $cod,'nombre' => $nombre,'apellido' => $ap,'cedula' => $ci,'email' => $email,'pass' => $pass,'role_id' => '4','is_active' => '2','img_perfil'=>$route]);
            $id = $reg_user;
           
            $user = $this->user->get_all(['id_usuario' => $id], TRUE);

            $session_data = object_to_array($user);
            
            unset($session_data['pass']);
            $this->session->set_userdata($session_data);

            if($this->session->userdata('role_id') == 4)
            {         
              $msg=''; $redir="Front/plan"; $param=""; $funct="";
              $response = array('error_msg'=> $msg,'email'=>$email,'pass'=>$pass,'redirect'=>$redir,'function'=>$funct,'param'=>$param); 
              echo json_encode($response);
            }
        } 
     
    }


    public function logout_admin()
    {
        parent::log_out();
        redirect(site_url().'Rubi_admin');
    }

    public function recover_password_index()
    {
        $this->load->view("recover_password");
    }

    public function recover_password()
    {
        $email = $this->input->post("email");
        $this->load->model("user_model", "user");
        $user_object = $this->user->exist_email($email);
        if ($user_object) {

            $msg_agradecimiento = translate("msg_agradecimiento");
            $msg_msg_new_credentials = translate("msg_msg_new_credentials");
            $password_lang = translate("password_lang");
            $new_password = time();
            $this->user->update($user_object->user_id, ["password" => md5($new_password)]);
            $data['msg_agradeciemiento'] = $msg_agradecimiento;
            $data['msg_msg_new_credentials'] = $msg_msg_new_credentials;
            $data['password_lang'] = $password_lang;
            $data['new_password'] = $new_password;
            $data['potenciado_por'] = translate("powered_by");

            $body = $this->load->view("email_recover", $data, TRUE);

            send_email($body, translate("recuperar"), $email);

            $this->response->set_message(translate("password_change_ok"), ResponseMessage::SUCCESS);
            redirect("Login/recover_password_index");

        } else {
            $this->response->set_message(translate("mail_not_exist"), ResponseMessage::ERROR);
            redirect("Login/recover_password_index");
        }
    }

}
