<?php

class Language_model extends CI_Model
{

    function Languages_model()
    {
        parent::__construct();
        $this->load->database();
    }

    function create($data)
    {
        $this->db->insert('language',$data);
        return $this->db->insert_id();
    }

    function get_by_id($id)
    {
        $this->db->where('id_lang', $id);
        $query = $this->db->get('language');
        return $query->row();
    }

    function get_all($conditions = [], $get_as_row = FALSE)
    {
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('language');

        return ($get_as_row) ? $query->row() : $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id_lang', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('language');
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('id_lang', $id);
        $this->db->delete('language');
        return $this->db->affected_rows();
    }






}
