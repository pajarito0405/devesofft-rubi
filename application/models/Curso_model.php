<?php

class Curso_model extends CI_Model
{

    function Cursos_model()
    {
        parent::__construct();
        $this->load->database();
    }

    function create($data)
    {
        $this->db->insert('curso', $data);
        return $this->db->insert_id();
    }

    function get_by_id($id)
    {
        $this->db->where('curso_id', $id);
        $query = $this->db->get('curso');
        return $query->row();
    }

    function get_all($conditions = [], $get_as_row = FALSE)
    {
        $this->db->where('is_active', 1);
        $this->db->order_by('orden', "asc");


        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('curso');

        return ($get_as_row) ? $query->row() : $query->result();
    }



    function update($id, $data)
    {
        $this->db->where('curso_id', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('curso');
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('curso_id', $id);
        $this->db->delete('curso');
        return $this->db->affected_rows();
    }

    function get_my_tags($curso_id)
    {
        $query = $this->db->get_where('tag_curso', ['curso_id' => $curso_id]);
        return $query->result();
    }

    function join_tag_curso($curso_id, $tag)
    {
        $this->db->insert('tag_curso', ['tag_id' => $tag, 'curso_id' => $curso_id]);
    }

    function unlinktag($tag_id, $curso_id)
    {
        $this->db->delete("tag_curso", ['tag_id' => $tag_id, "curso_id" => $curso_id]);
    }

    function get_all_convocatorias($curso_id)
    {
        $query = $this->db->get_where('convocatoria', ['curso_id' => $curso_id]);
        return $query->result();
    }

    function create_convocatoria($curso_id, $fecha)
    {
        $this->db->insert("convocatoria", ['fecha' => $fecha, 'curso_id' => $curso_id]);
    }

    function get_estudiantes_by_convocatoria($convocatoria_id)
    {
        $query = $this->db->get_where('convocatoria_estudiante', ['convocatoria_id' => $convocatoria_id]);
        return $query->result();
    }

    function get_convocatoria_by_id($convocatoria_id)
    {
        $query = $this->db->get_where('convocatoria', ['convocatoria_id' => $convocatoria_id]);
        return ($query->num_rows() > 0) ? $query->row() : false;
    }

    function delete_convocatoria($convocatoria_id)
    {
        $this->db->delete('convocatoria_estudiante', ['convocatoria_id' => $convocatoria_id]);
        $this->db->delete('convocatoria', ['convocatoria_id' => $convocatoria_id]);
    }

    function create_modulo_estudiante($modulo_id, $user_id,$fecha)
    {
        $this->db->insert("modulo_estudiante",['modulo_id'=>$modulo_id,'estudiante_id'=>$user_id,'terminado'=>0,'nota_examen'=>0,'fecha'=>$fecha]);
    }

    function register_student_convocatoria($convocatoria_id,$user_id){
        $this->db->insert('convocatoria_estudiante',['convocatoria_id'=>$convocatoria_id,'estudiante_id'=>$user_id]);
    }

    function get_mis_modulos_contratados($user_id){
        $query = $this->db->get_where('modulo_estudiante',['estudiante_id'=>$user_id]);
        return $query->result();
    }

    function search($category_id,$texto,$lang_id){
        $this->db->like('nombre',$texto);
        $query = $this->db->get_where('curso',['category_id'=>$category_id,'id_lang'=>$lang_id]);
        return $query->result();
    }

    public function general_search($texto, $lang_id){
        $this->db->like('nombre',$texto);
        $query = $this->db->get_where('curso',['id_lang'=>$lang_id]);
        return $query->result();
    }

   
}
