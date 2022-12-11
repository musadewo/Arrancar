<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pesan_model');
    }

    public function index()
    {
        $data['title'] = 'Kelola Pesan';
        $data['pesan'] = $this->pesan_model->get_data('pesan')->result();
        
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pesan',$data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title'] = 'Tambah Pesan';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('tambah_pesan');
        $this->load->view('template/footer');
    }

    public function tambah_aksi(){
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
                'subject' => $this->input->post('subject'),
                'pesan' => $this->input->post('pesan'),
            );
            $this->pesan_model->insert_data($data, 'pesan');
            $this->session->set_flashdata('massege', '<div class="alert alert-success alert-dismissible fade show" 
            role="alert">Data Berhasil ditambahkan<button type="button" class="close" data-dismiss="alert" 
            aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('pesan'); 
        }
    }

    public function tambah_data(){
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
                'subject' => $this->input->post('subject'),
                'pesan' => $this->input->post('pesan'),
            );
            $this->pesan_model->insert_data($data, 'pesan');
            $this->session->set_flashdata('massege', '<div class="alert alert-success alert-dismissible fade show" 
            role="alert">Data Berhasil ditambahkan<button type="button" class="close" data-dismiss="alert" 
            aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');  
        } 
    }

    public function edit($id_pesan){
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
           $this->index();
        } else {
            $data = array(
                'id_pesan' => $id_pesan,
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
                'subject' => $this->input->post('subject'),
                'pesan' => $this->input->post('pesan'),
            );
            $this->pesan_model->update_data($data, 'pesan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" 
            role="alert">Data Berhasil diubah<button type="button" class="close" data-dismiss="alert" 
            aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('pesan');
        } 
    }

    public function delete($id){
        $where = array('id_pesan' => $id);
        $this->pesan_model->delete($where, 'pesan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" 
        role="alert">Data Berhasil diubah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('pesan');        
    }

    public function _rules(){
        $this->form_validation->set_rules('nama', 'nama', 'required', array(
            'required' => '%s harus diisi !'
        ));
        $this->form_validation->set_rules('email', 'email', 'required', array(
            'required' => '%s harus diisi !'
        ));
        $this->form_validation->set_rules('nomor_telepon', 'nomor telepon', 'required', array(
            'required' => '%s harus diisi !'
        ));     
        $this->form_validation->set_rules('subject', ' subject', 'required', array(
            'required' => '%s harus diisi !'
        ));   
    }
}