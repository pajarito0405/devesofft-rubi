<?php

class Admin_model extends CI_Model
{

    function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    function create($data)
    {

        $this->db->insert('administrador', $data);

        return $this->db->insert_id();
    }

    function create_datax($data)
    {

        $this->db->insert('rutas_precios', $data);
        //return $this->db->insert_id();
    }


    function create_admin($data)
    {

        $this->db->insert('administrador', $data);
        return $this->db->insert_id();
    }

    function get_by_date($fecha_afiliacion)
    {
        $this->db->where('fecha_afiliacion', $fecha_afiliacion);
        $this->db->where('is_active', 1);
        $query = $this->db->get('administrador');

        return $query->result();
    }

    function get_by_id($id)
    {
        $this->db->where('id_admin', $id);
        $query = $this->db->get('administrador');

        return $query->row();
    }

    function get_all($conditions = [], $get_as_row = FALSE)
    {
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('administrador');

        return ($get_as_row) ? $query->row() : $query->result();
    }


    function update($id, $data)
    {
        $this->db->where('id_admin', $id);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('administrador');
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('administrador');
        return $this->db->affected_rows();
    }

    function get_by_user($user)
    {
        $query = $this->db->get_where('administrador', ['user' => $user]);
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }


    function comparar_fechas($fecha_referencial, $hoy)
    {
        return ($fecha_referencial >= $hoy) ? TRUE : FALSE;
    }

    function get_planimetrias()
    { 
        $query = $this->db->get('planimetria');
        return $query->result();
    }

    function get_marcas()
    { 
        $query = $this->db->get('marca');
        return $query->result();
    }

    function get_modelos_marca($id)
    { 
        $this->db->where('id_marca', $id);
        $query = $this->db->get('modelo');
        return $query->result();
    }

    function get_fabricantes_modelo_plan($id)
    {
       $this->db->select('f.*');
       $this->db->where('p.id_modelo', $id);
       $this->db->group_by('f.fabricante');
       $this->db->from('planimetria as p');
       $this->db->join('modelo as m', 'm.id_modelo = p.id_modelo');
       $this->db->join('fabricante as f', 'f.id_fabricante = p.id_fabricante');

        $query = $this->db->get();
        return $query->result(); 
    }

    function get_planimetria_by_id($id)
    {
       $this->db->where('id_planimetria', $id);
       $query = $this->db->get('planimetria');
        return $query->row(); 
    }

    function get_planimetrias_fab($fab,$mod)
    {
        $this->db->where('id_modelo',$mod);
        $this->db->where('id_fabricante',$fab);
        $query = $this->db->get('planimetria');
        return $query->result();
    }

    function create_bus($data)
    {
        $this->db->insert('buses', $data);
        return $this->db->insert_id();
    }

    function create_img_bus($data)
    {
        $this->db->insert('cooperativa_img_buses', $data);
        return $this->db->insert_id();
    }

    function get_all_ciudades_pueblos($conditions = [], $get_as_row = FALSE)
    {

        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $query = $this->db->get('ciudades_pueblos');

        return ($get_as_row) ? $query->row() : $query->result();

    }

    function get_all_rutas_precios($conditions = [], $get_as_row = FALSE)
    {

        /*foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        } */
        $query = $this->db->get('rutas_precios');

        return ($get_as_row) ? $query->row() : $query->result();

    }

    function get_all_ofis_rutas_relacion($id_cooperativa)
    {
     
       $this->db->select('r.*,c.ciudad_pueblo as c1, cp.ciudad_pueblo as c2, cup.id_ruta_precio as cup_id, cup.precio as cup_precio');
       $this->db->where('o.id_cooperativa', $id_cooperativa);
       $this->db->from('rutas_precios as r');
       $this->db->order_by('r.id_ciudad_inicio');
       $this->db->join('oficina as o', 'o.id_ubicacion_f_precio = r.id_ciudad_inicio');
       $this->db->join('oficina as of', 'of.id_ubicacion_f_precio = r.id_ciudad_fin');
       $this->db->join('ciudades_pueblos as c', 'c.id_ciudad_pueblo = r.id_ciudad_inicio');
       $this->db->join('ciudades_pueblos as cp', 'cp.id_ciudad_pueblo = r.id_ciudad_fin');
       $this->db->join('create_update_ruta_precio as cup', 'cup.id_ruta_precio = r.id_ruta_precio','left');
       //$this->db->join('fabricante as f', 'f.id_fabricante = p.id_fabricante');

        $query = $this->db->get();
        return $query->result(); 

    }

    function get_all_ofis_rutas_relacion_precios($id_cooperativa,$ini,$obj_ways,$fin)
    {
       /*var_dump($ini,$fin); 
        foreach($obj_ways as $ob){
           foreach($ob as $o){
            var_dump($o);
           }
       } */
       
       //$this->db->where('o.id_cooperativa', $id_cooperativa);
       $arr = array();
        foreach($obj_ways as $ob){
           foreach($ob as $o){
             $this->db->select('r.*,c.ciudad_pueblo as c1,cp.ciudad_pueblo as c2,cup.id_ruta_precio as cup_id, cup.precio as cup_precio');
             $this->db->where('r.id_ciudad_inicio', $ini);
             $this->db->where('r.id_ciudad_fin', $o);
             $this->db->join('ciudades_pueblos as c', 'c.id_ciudad_pueblo = '.$ini.'');
             $this->db->join('ciudades_pueblos as cp', 'cp.id_ciudad_pueblo = '.$o.'');
             $this->db->from('rutas_precios as r');
             $this->db->order_by('r.id_ciudad_inicio');
             $this->db->join('create_update_ruta_precio as cup', 'cup.id_ruta_precio = r.id_ruta_precio','left');
             $query = $this->db->get();
        
             array_push($arr, $query->result());
           }
       }

             $this->db->select('r.*,c.ciudad_pueblo as c1,cp.ciudad_pueblo as c2,cup.id_ruta_precio as cup_id, cup.precio as cup_precio');
             $this->db->where('r.id_ciudad_inicio', $ini);
             $this->db->where('r.id_ciudad_fin', $fin);
             $this->db->join('ciudades_pueblos as c', 'c.id_ciudad_pueblo = '.$ini.'');
             $this->db->join('ciudades_pueblos as cp', 'cp.id_ciudad_pueblo = '.$fin.'');
             $this->db->from('rutas_precios as r');
             $this->db->join('create_update_ruta_precio as cup', 'cup.id_ruta_precio = r.id_ruta_precio','left');
             $query = $this->db->get();
        
             array_push($arr, $query->result());

        return $arr;
 
    }

    function createup_ruta_precio($data)
    {

        $this->db->insert('create_update_ruta_precio', $data);

        return $this->db->insert_id();
    }

    function up_ruta_precio($id_ruta_precio,$data)
    {

        $this->db->where('id_ruta_precio',$id_ruta_precio);
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->update('create_update_ruta_precio');
        return $this->db->affected_rows();
    }







    //------------------------------------------------------------------------------------------------------------------------------------------
}
