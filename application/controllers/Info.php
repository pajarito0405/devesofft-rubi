<?php

die;

class Info extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper("mabuya");

        //parent::check_user_logged();
        //$this->load->model("Info_model", "info");
        $this->init_form_validation();
    }

    function index()
    {

        //$infos = $this->info->get_all();
        //$data['infos'] = $infos;
        $this->load_view_admin_g('info/index', $data);
    }

    function add_index()
    {
        $this->load_view_admin_g("info/add");
    }

    function add()
    {
        $title = $this->input->post("title");
        $texto = $this->input->post("texto");

        $this->form_validation->set_rules('title', translate('title_lang'), 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->response->set_message(validation_errors(), ResponseMessage::ERROR);
            redirect("info/add_index");
        } else {
            $this->info->create(['title' => $title, 'text' => $texto, 'user_id' => $this->session->userdata("user_id"), "date" => date('Y-m-d')]);
            $this->response->set_message(translate("success_data"), ResponseMessage::SUCCESS);
            redirect("info/index");
        }
    }

    function delete($info_id = 0)
    {
        $info_object = $this->info->get_by_id($info_id);
        if ($info_object) {
            $this->info->delete($info_object->info_id);
            $this->response->set_message(translate("data_deleted_ok"), ResponseMessage::SUCCESS);
            redirect("info/index");
        } else {
            $this->load->view("404");
        }
    }

    function change_estado($info_id = 0)
    {
        $info_object = $this->info->get_by_id($info_id);
        if ($info_object) {
            $new_state = 1;
            if ($info_object->state == 1) {
                $new_state = 0;
            }
            $this->info->update($info_id, ['state' => $new_state]);
            $this->response->set_message(translate("info_change_state"), ResponseMessage::SUCCESS);
            redirect("info/index");
        } else {
            $this->load->view("404");
        }
    }

}
