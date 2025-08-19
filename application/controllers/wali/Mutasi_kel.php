<?php
 defined('BASEPATH') OR exit ('Dilarang akses langsung!');

 class Mutasi_kel extends Ci_Controller
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
        $jenis_mutasi = 'keluar';
        $subkategori = 'antarsekolah';
        $data['permintaan'] = $this->m_data->get_permintaan_mutasi($id_login, $jenis_mutasi, $subkategori);
        $data['id_login'] = $id_login;
        $data['nama_wali'] = $this->session->userdata('nama_wali');
        $data['version'] = '1.2.3';
        $data['active_menu'] = 'mutasi_kel_sek';  
        $data['menu_open'] = 'mutasi';
        $this->load->view('wali/v_mutasi_kel', $data);
        
    }

    public function get_status() {
        $no = $this->input->get('no');
        $data = $this->m_data->get_status_by_no($no);
    
        if ($data) {
            echo json_encode($data); // Return all data as JSON
        } else {
            echo json_encode(['error' => 'Data tidak ditemukan']);
        }
    }

    public function antarkota(){
        if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'wali') {
            $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
            redirect('login'); 
        }
        $id_login = $this->session->userdata('id_login');
        $jenis_mutasi = 'keluar';
        $subkategori = 'antarkota';
        $data['permintaan'] = $this->m_data->get_permintaan_mutasi($id_login, $jenis_mutasi, $subkategori);
        $data['id_login'] = $this->session->userdata('id_login');
        $data['nama_wali']= $this->session->userdata('nama_wali');
        $data['version'] = '1.2.3';
        $data['active_menu'] = 'mutasi_kel_kot';
        $data['menu_open'] = 'mutasi';
        $this->load->view('wali/v_mutasi_kel_antarkota', $data);
    }
    
    public function antarprovinsi()
    {
        if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'wali') {
            $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
            redirect('login'); 
        }
        $id_login = $this->session->userdata('id_login');
        $jenis_mutasi = 'keluar';
        $subkategori = 'antarprovinsi';
        $data['permintaan'] = $this->m_data->get_permintaan_mutasi($id_login, $jenis_mutasi, $subkategori);
        $data['id_login'] = $this->session->userdata('id_login');
        $data['nama_wali']= $this->session->userdata('nama_wali');
        $data['version'] = '1.2.3';
        $data['active_menu'] = 'mutasi_kel_prov';
        $data['menu_open'] = 'mutasi';
        $this->load->view('wali/v_mutasi_kel_antarprovinsi', $data);
    }
}
