<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function index()
    {
        if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'kep') {
            $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
           redirect('login'); 
        }

        if ($this->session->userdata('logged_in')) {
            $id_login = $this->session->userdata('id_login');
            $usernameData = $this->m_data->get_session_pejabat($id_login);
            $data['title'] = "Home";
            $data['user'] = $usernameData;
            $data['active_menu'] = 'dashboard';
            $data['menu_open'] = '';
            $data['version'] = '1.2.3';

            // Mendapatkan jumlah permintaan mutasi dengan status 'Disetujui'
            $data['mutasi_keluar'] = $this->m_data->get_notif_baru('data_mutasi', 'tgl_disahkan');
            $data['mutasi_masuk'] = $this->m_data->get_notif_baru('mutasi_masuk', 'tanggal_surat');
            $data['mutasi_keluar_negeri'] = $this->m_data->get_notif_baru('luar_negeri', 'tanggal_surat');
           

            $this->load->view('kep/v_dashboard', $data);
           
        }
       

        
    }
}