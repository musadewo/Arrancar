<?php

Class Model_login extends CI_Model
{
    function cekadmin($username,$password)
    {
        $hasil = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        return $hasil;
    }
}