<?php

/**
 * User: Rafd
 * Date: 5/14/2015
 * Time: 2:17 PM
 */
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper("mabuya");

        @session_start();
        $this->load_language();

        /*$_SESSION['selected'] = "dash";
        if (!in_array($this->session->userdata('role_id'), [1, 2,3])) {
            $this->log_out();
            redirect("Login/index");
        } */

        $this->load->model('User_model','user');
        $this->load->model('Chart_model','chart');
        

    }

    public function index()
    {
         if($this->session->userdata('role') == 1){
           $query = $this->chart->get_all(['id_diagnostico'=>'2'],FALSE);
           $data['chart_vd'] = $query;
           $this->load_view_admin("home",$data);
         }
        /*
        if($this->session->userdata('role_id') == 1){ // es administrador

            $all_transactions = $this->trans->get_all();
            $total_ingresado = 0;
            foreach($all_transactions as $item_trans){
                $total_ingresado+=$item_trans->monto;
            }

            $data['total_ingresado'] = $total_ingresado;

            $estudiantes = $this->user->get_all(['role_id'=>3,'is_active'=>1]);
            $data['estudiantes_matriculados'] = count($estudiantes);

            $cursos = $this->curso->get_all(['is_active'=>1]);


            foreach($cursos as $item_curso){
                $all_modulos = $this->mod->get_all(['curso_id'=>$item_curso->curso_id,'is_active'=>1]);

                $total_dinero = $this->mod->get_ingresos_por_curso($item_curso->curso_id);
                $total_estudiantes = 0;

                foreach($all_modulos as $item_m){
                    $item_m->estudiantes_registrados = count($this->mod->get_estudiantes_registrados($item_m->modulo_id));
                    $total_estudiantes+=$item_m->estudiantes_registrados;
                    $dinero_ingresado = $this->mod->dinero_ingresado_modulo($item_m->modulo_id);
                    $item_m->dinero_ingresado = $dinero_ingresado;
                    $total_dinero+= $dinero_ingresado;
                }

                $item_curso->all_modulos = $all_modulos;
                $item_curso->dinero_ingresado = $total_dinero;
                $item_curso->total_estudiantes = $total_estudiantes;


            }

            $data['cursos'] = $cursos;

            $data['cantidad_cursos'] = count($cursos);

            $profesores = $this->user->get_all(['role_id'=>2,'is_active'=>1]);
            $data['cantidad_profesores'] = count($profesores);





            $this->load_view_admin_g('dashboard_admin',$data);
        }elseif($this->session->userdata('role_id') == 2){ //profesor
           redirect("modulo/list_modulos_profsor");
        }elseif($this->session->userdata('role_id') == 3){ // estudiante
            redirect('curso/mis_cursos');
        }else{
            $this->load_view_admin_g('dashboard_admin');
        } */

    }

}
