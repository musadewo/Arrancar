<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_model extends CI_Model {

    public function get_data(){
        return $this->db->get('pesan');
    }    

    public function insert_data($data, $table){
        $this->db->insert($table, $data);
    }
    public function update_data($data, $table){
        $this->db->where('id_pesan', $data['id_pesan']);
        $this->db->update('pesan', $data);
    }
    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);   
    }
}