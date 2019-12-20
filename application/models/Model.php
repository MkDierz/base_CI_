<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model{

    // public function __construct()
    // {
    //     parent::__construct();
    // }
    // general
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    function get_data($table){
        return $this->db->get($table);
    }

    function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function get_data_order($order,$column,$table){
        $this->db->order_by($column, $order);
        return $this->db->get($table);
    }

    function get_group($table,$group){
        return $this->db->query("SELECT * FROM $table group by $group");
    }

    function get_group_visitor($table,$group,$date){
        return $this->db->query("SELECT * FROM $table WHERE date(time_visit)='$date' group by $group");
    }
    // end general
}
