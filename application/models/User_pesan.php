<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_pesan extends CI_Model {

    public function get_data(){
        return $this->db->get('pesan');
    }    

    public function insert_data($data, $table){
        $this->db->insert($table, $data);
    }
}