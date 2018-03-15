<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper("mabuya");
        $this->load->model("welcome_model", "welcome");

       // @session_start();
       // $this->load_language();
       // $this->init_form_validation();
    }

    public function index()
    { 
        //redirect("Login/index");
        $this->load_view_admin("admin/home");
    }

    public function test_service(){


        $relative_path = "rafe"; //cadena de texto separando objetos por separador (~)
        $postdata = http_build_query( ['path' => $relative_path]);
        $opts 	  = [ 'http' => [ 'method'  => 'POST', 'header'  => "Content-Type: application/x-www-form-urlencoded\r\n".'Authorization: Basic ' . base64_encode("admin:programar"), 'content' => $postdata ] ];

        $context = stream_context_create($opts);

        $result  = file_get_contents('http://multishops.rfb.com/index.php/service/notificar_compra_update_tienda', false, $context );
        var_dump($result); die();
    }

   
}
