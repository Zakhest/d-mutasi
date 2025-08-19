<?php
defined("BASEPATH") OR exit('Dilarang Akses');

class Register extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('m_data');
    }

    public function index(){
        $this->load->view('v_register');
    }

    public function add(){
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data gagal ditambahkan. Pastikan semua field terisi.');
            $this->load->view('v_register');
        } else {
            // Check if username already exists
            $username = $this->input->post('username');
            $existing_user = $this->m_data->check_username($username);
            
            if ($existing_user) {
                $this->session->set_flashdata('error', 'Username sudah ada! Silahkan pilih yang lain.');
                redirect('register');
                return;
            }
            
            $data = array(
                'nama_wali' => $this->input->post('nama_wali'),
                'no_telp' => $this->input->post('no_telp'),
                'username' => $username,
                'password' => $this->input->post('password'),
                'level' => $this->input->post('level')
            );
    
            if ($this->m_data->addregister($data)) {
                $this->session->set_flashdata('success', 'Berhasil daftar! Silahkan login.');
                redirect('login');
            } else {
                $this->session->set_flashdata('error', 'Data gagal ditambahkan.');
                redirect('register');
            }
        }
    }
}