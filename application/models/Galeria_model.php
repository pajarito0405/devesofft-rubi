<?php

class Galeria_model extends CI_Model
{

    function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    function get_carousel_home()
    {
        $query = $this->db->get('buses');
        return $query->result();
    }

    function get_item_bus()
    {
        $query = $this->db->get('cooperativa');
        return $query->result();
    }




    //------------------------------------------------------------------------------------------------------------------------------------------
}
