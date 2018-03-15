<?php

class Oficina_model extends CI_Model
{

    function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    function create($data)
    {

        $this->db->insert('oficina', $data);

        return $this->db->insert_id();
    }


    function create_admin($data)
    {

        $this->db->insert('oficina', $data);
        return $this->db->insert_id();
    }

    function get_by_date($fecha_afiliacion)
    {
        $this->db->where('fecha_afiliacion', $fecha_afiliacion);
        $this->db->where('is_active', 1);
        $query = $this->db->get('oficina');

        return $query->result();
    }

    function get_by_id($id)
    {
        $this->db->where('id_oficina', $id);
        $query = $this->db->get('oficina');

        return $query->row();
    }

    function get_all($conditions = [], $get_as_row = FALSE)
    {
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('oficina');

        return ($get_as_row) ? $query->row() : $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id_oficina', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('oficina');
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('id_oficina', $id);
        $this->db->delete('oficina');
        return $this->db->affected_rows();
    }

    function get_by_user($user)
    {
        $query = $this->db->get_where('oficina', ['user' => $user]);
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }


    function comparar_fechas($fecha_referencial, $hoy)
    {
        return ($fecha_referencial >= $hoy) ? TRUE : FALSE;
    }

    







    //------------------------------------------------------------------------------------------------------------------------------------------
}
