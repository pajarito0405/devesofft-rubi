<?php

class Welcome_model extends CI_Model
{

    function Role_model()
    {
        parent::__construct();
        $this->load->database();
    }

    function create_opinion($data)
    {

        $this->db->insert('opinion', $data);

        return $this->db->insert_id();
    }

    function get_by_id_opinion($id)
    {
        $this->db->where('opinion_id', $id);
        $query = $this->db->get('opinion');

        return $query->row();
    }

    function get_all_opinions($conditions = [], $get_as_row = FALSE)
    {
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('opinion');

        return ($get_as_row) ? $query->row() : $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('opinion_id', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('opinion');

        return $this->db->affected_rows();
    }

    function delete_opinion($id)
    {
        $this->db->where('opinion_id', $id);
        $this->db->delete('opinion');

        return $this->db->affected_rows();
    }

}
