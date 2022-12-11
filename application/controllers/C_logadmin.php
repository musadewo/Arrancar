<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_logadmin extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_login');
    }

	public function index()
	{
		$this->load->view('logadmin');
	}

    function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cadmin = $this->Model_login->cekadmin($username,$password);
        if($cadmin->num_rows()>0)
        {
            $xcadmin = $cadmin->row_array();
            $newdata = array(
                'id_user' => $xcadmin ['id_user'],
                'username' => $xcadmin ['username'],
                'nama' => $xcadmin ['nama'],
                'masuk' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('dashboard');
        } else {
            redirect('c_logadmin/galog');
        }
    }

    function galog()
    {
        $url = base_url('c_logadmin');
        redirect($url);
    }
}