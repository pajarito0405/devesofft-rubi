<?php

class User_model extends CI_Model
{

    function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    function create($data)
    {

        $this->db->insert('usuario', $data);

        return $this->db->insert_id();
    }


    function create_admin($data)
    {

        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }

    function get_by_date($fecha_afiliacion)
    {
        $this->db->where('fecha_afiliacion', $fecha_afiliacion);
        $this->db->where('is_active', 1);
        $query = $this->db->get('user');

        return $query->result();
    }

    function get_by_id($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('user');

        return $query->row();
    }

    function get_all($conditions = [], $get_as_row = FALSE)
    {
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('usuario');

        return ($get_as_row) ? $query->row() : $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id_usuario', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('usuario');
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
        return $this->db->affected_rows();
    }

    function get_by_user($user)
    {
        $query = $this->db->get_where('user', ['user' => $user]);
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }


    function comparar_fechas($fecha_referencial, $hoy)
    {
        return ($fecha_referencial >= $hoy) ? TRUE : FALSE;
    }

     function in_susc_paq($data = [])
     {
        $this->db->insert('kit_iniciacion',$data);
        return $this->db->insert_id();
     }






    //------------------------------------------------------------------------------------------------------------------------------------------
}
