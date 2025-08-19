<?php
defined('BASEPATH') OR exit('dilarang akses');

class Dashboard extends Ci_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_data');
    }

    public function index()  {
        if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'wali') {
            $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
            redirect('login'); 
        } 

        if ($this->session->userdata('logged_in')) {
            $id_login = $this->session->userdata('id_login');
            $usernameData = $this->m_data->get_profil($id_login);
            $data['title'] = "Home";
            $data['user'] = $usernameData;
            $data['active_menu'] = 'dashboard';
            $data['menu_open'] = '';
            $data['version'] = '1.2.3';

            // Mendapatkan jumlah permintaan mutasi dengan status 'Diproses'

            // Menggunakan get_counts_by_login untuk mendapatkan jumlah permintaan mutasi berdasarkan jenis dan subkategori
            $data['jumlah_mutasi_keluar'] = $this->m_data->get_counts_by_login($id_login, 'Keluar', 'antarsekolah');
            $data ['antarkota'] = $this->m_data->get_counts_by_login($id_login, 'Keluar', 'antarkota');
            $data ['antarprov'] = $this->m_data->get_counts_by_login($id_login, 'Keluar', 'antarprovinsi');
            $data['jumlah_mutasi_masuk'] = $this->m_data->get_counts_by_login($id_login, 'masuk', 'masuk');
            $data['jumlah_mutasi_ln'] = $this->m_data->get_counts_by_login($id_login, 'keluar_negeri', 'ln');

            $this->load->view('wali/v_dashboard', $data);
        }
    }
}

