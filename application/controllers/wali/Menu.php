<?php

defined('BASEPATH') OR exit('Dilarang akses langsung!');

class Menu extends CI_Controller{
     function __construct()
     {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->library('session');
    
     }

        public function index()
        {
            $id_login = $this->session->userdata('id_login');

        // Periksa apakah user_id ada di session
        if (!$id_login) {
            echo json_encode(['status' => 'error', 'message' => 'Akun tidak ditemukan']);
            return;
        }

        // Ambil data user dari database
        $user = $this->m_data->get_user_by_id($id_login);

        // Periksa apakah user ditemukan di database
        if (!$user) {
            echo json_encode(['status' => 'error', 'message' => 'Data user tidak ditemukan']);
            return;
        }

        // Tampilkan data dalam format JSON
        echo json_encode(['status' => 'success', 'user' => $user]);
        }


}