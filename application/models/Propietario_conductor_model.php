<?php

class Propietario_conductor_model extends CI_Model
{

    function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    function create($data)
    {

        $this->db->insert('propietario_conductor', $data);

        return $this->db->insert_id();
    }


    function create_admin($data)
    {

        $this->db->insert('propietario_conductor', $data);
        return $this->db->insert_id();
    }

    function get_by_date($fecha_afiliacion)
    {
        $this->db->where('fecha_afiliacion', $fecha_afiliacion);
        $this->db->where('is_active', 1);
        $query = $this->db->get('propietario_conductor');

        return $query->result();
    }

    function get_by_id($id)
    {
        $this->db->where('id_propietario_conductor', $id);
        $query = $this->db->get('propietario_conductor');

        return $query->row();
    }

    function get_all($conditions = [], $get_as_row = FALSE)
    {
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('propietario_conductor');

        return ($get_as_row) ? $query->row() : $query->result();
    }


    function update($id, $data)
    {
        $this->db->where('id_propietario_conductor', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('propietario_conductor');
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('id_propietario_conductor', $id);
        $this->db->delete('propietario_conductor');
        return $this->db->affected_rows();
    }









    //------------------------------------------------------------------------------------------------------------------------------------------
}
