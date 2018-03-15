<?php

class Cooperativa_propietario_conductor_model extends CI_Model
{

    function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    function create($data)
    {

        $this->db->insert('cooperativa_propietario_conductor', $data);

        return $this->db->insert_id();
    }


    function create_admin($data)
    {

        $this->db->insert('cooperativa_propietario_conductor', $data);
        return $this->db->insert_id();
    }

    function get_by_date($fecha_afiliacion)
    {
        $this->db->where('fecha_afiliacion', $fecha_afiliacion);
        $this->db->where('is_active', 1);
        $query = $this->db->get('cooperativa_propietario_conductor');

        return $query->result();
    }

    function get_by_id($id)
    {
        $this->db->where('id_cpc', $id);
        $query = $this->db->get('cooperativa_propietario_conductor');

        return $query->row();
    }

    function get_all($conditions = [], $get_as_row = FALSE)
    {
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('cooperativa_propietario_conductor');

        return ($get_as_row) ? $query->row() : $query->result();
    }


    function update($id, $data)
    {
        $this->db->where('id_cpc', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('cooperativa_propietario_conductor');
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('id_cpc', $id);
        $this->db->delete('cooperativa_propietario_conductor');
        return $this->db->affected_rows();
    }









    //------------------------------------------------------------------------------------------------------------------------------------------
}
