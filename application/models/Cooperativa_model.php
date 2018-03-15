<?php

class Cooperativa_model extends CI_Model
{

    function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    function create($data)
    {

        $this->db->insert('cooperativa', $data);

        return $this->db->insert_id();
    }


    function create_admin($data)
    {

        $this->db->insert('cooperativa', $data);
        return $this->db->insert_id();
    }

    function get_by_date($fecha_afiliacion)
    {
        $this->db->where('fecha_afiliacion', $fecha_afiliacion);
        $this->db->where('is_active', 1);
        $query = $this->db->get('cooperativa');

        return $query->result();
    }

    function get_by_id($id)
    {
        $this->db->where('id_cooperativa', $id);
        $query = $this->db->get('cooperativa');

        return $query->row();
    }

    function get_all($conditions = [], $get_as_row = FALSE)
    {
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('cooperativa');

        return ($get_as_row) ? $query->row() : $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id_cooperativa', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('cooperativa');
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('id_cooperativa', $id);
        $this->db->delete('cooperativa');
        return $this->db->affected_rows();
    }

    function get_by_user($user)
    {
        $query = $this->db->get_where('cooperativa', ['user' => $user]);
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }

    function get_all_p_by_cooperativa()
    {

       $this->db->select('p.*');
       $this->db->where('cpc.id_cooperativa',$_SESSION['id_cooperativa']);
       $this->db->from('propietario_conductor as p');
       $this->db->join('cooperativa_propietario_conductor as cpc', 
        'cpc.id_propietario_conductor = p.id_propietario_conductor');

       $query = $this->db->get();
       return $query->result(); 
    }


    function comparar_fechas($fecha_referencial, $hoy)
    {
        return ($fecha_referencial >= $hoy) ? TRUE : FALSE;
    }







    //------------------------------------------------------------------------------------------------------------------------------------------
}
