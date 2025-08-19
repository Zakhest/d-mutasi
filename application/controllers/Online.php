<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Online extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

    // Fungsi untuk menampilkan pengguna yang sedang online
    public function index() {
        // Ambil data pengguna yang sedang online
      
        // Tampilkan data di view
        $this->load->view('online');
    }

    public function delete($id)
    {
        $this->db->where('id_login', $id);
        $this->db->delete('online_users'); // Sesuaikan dengan nama tabel
        
        echo json_encode(['status' => 'success']);
    }
}