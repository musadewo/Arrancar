<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    

    public function index()
    {
        $data['title'] = 'Kelola Admin';
        $data['admin'] = $this->admin_model->get_data('user')->result();
        
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin',$data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title'] = 'Tambah Admin';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('tambah_admin');
        $this->load->view('template/footer');
    }

    public function tambah_aksi(){
        $this->_rules();
        
        
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'password' => $this->input->post('password'),
            );
            $this->admin_model->insert_data($data, 'user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin');
            
        }
        
    }

    public function edit($id_user){
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
           $this->index();
        } else {
            $data = array(
                'id_user' => $id_user,
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password ' => $this->input->post('password'),
            );
            $this->admin_model->update_data($data, 'user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin');
        }
        
    }


    public function _rules(){
        $this->form_validation->set_rules('username', 'username admin', 'required', array(
            'required' => '%s harus diisi !'
        ));
        $this->form_validation->set_rules('nama', 'nama admin', 'required', array(
            'required' => '%s harus diisi !'
        ));
        $this->form_validation->set_rules('password', 'password admin', 'required', array(
            'required' => '%s harus diisi !'
        ));        
    }

    public function delete($id){
        $where = array('id_user' => $id);

        $this->admin_model->delete($where, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin');        
    }
}