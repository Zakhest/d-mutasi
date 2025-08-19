<?php
 defined('BASEPATH') OR exit ('Dilarang akses langsung!');


class Mutasi_mas extends Ci_Controller{
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
       // Ambil username pengguna dari session
       $data['permintaan'] = $this->m_data->getWhere('permintaan_mutasi', [
        'jenis_mutasi' => 'masuk',
        'id_login' =>  $this->session->userdata('id_login')
    ]);
       $data['id_login'] = $this->session->userdata('id_login');
       $data['nama_wali']= $this->session->userdata('nama_wali');
        $data['version'] = '1.2.3';
        $data['active_menu'] = 'mutasi_mas';
        $this->load->view('wali/v_mutasi_mas', $data);
        
    }
}