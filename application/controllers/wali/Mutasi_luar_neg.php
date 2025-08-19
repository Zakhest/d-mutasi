<?php
defined('BASEPATH') OR exit ('Dilarang akses langsung!');

class Mutasi_luar_neg extends CI_Controller
{

    function __construct()  
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_data');
        
    }

    public function index()  {
        if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'wali') {
            $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
            redirect('login'); 
        }
        $id_login = $this->session->userdata('id_login');
        $jenis_mutasi = 'keluar_negeri';
        $subkategori = 'ln';
        $data['permintaan'] = $this->m_data->get_permintaan_mutasi($id_login, $jenis_mutasi, $subkategori);
        $data['id_login'] = $id_login;
        $data['nama_wali'] = $this->session->userdata('nama_wali');
        $data['version'] = '1.2.3';
        $data['active_menu'] = 'mutasi_ln';  
        $data['menu_open'] = 'mutasi';
        $this->load->view('wali/v_mutasi_kel_ln', $data);
        
    }

}