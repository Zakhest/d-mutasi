<?php
defined('BASEPATH') OR exit ('Dilarang akses');

class Dashboard extends Ci_Controller{ 
	function __construct(){
        parent::__construct();
        $this->load->model('m_data');
	}

    public function index()
    {

         if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'staf') {
             $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
      redirect('login'); 
  }
        // Ambil username pengguna dari session
          if ($this->session->userdata('logged_in')) {
        $id_login = $this->session->userdata('id_login');
        // Panggil model untuk mengambil data username berdasarkan session
        $usernameData = $this->m_data->get_profil($id_login);
         $data['title'] = "Home";
        // Lakukan sesuatu dengan data username (misalnya, tampilkan di view)
        $data['user'] = $usernameData;
        $data['jumlah']=$this->m_data->get_jumlah();
        $data['jk']=$this->m_data->hitung();
        $data['m']=$this->m_data->hitung2();
        $data['l']=$this->m_data->hitung3();
        $data['version']= "1.2.3";
        $data['jml_sek']= $this->m_data->hitung_sekolah();
        $data['jumlah_terkirim'] = $this->m_data->get_count_by_status('Terkirim');
        $data['menu_open'] = 'i';
        $data['active_menu'] = 'dashboard';
        $data['data_baru']= $this->m_data->get_data_baru();
        
        // Mendapatkan jumlah permintaan mutasi dengan status 'Diproses'
        $data['jumlah_diproses'] = $this->m_data->get_count_by_status('Pending');
        $this->load->view('dashboard/v_dashboard', $data);

    }



    }

    public function notif(){
        $data['data_baru']= $this->m_data->get_data_baru();
        $this->load->view('v_menu', $data);
    }

    public function get_new_request() {
        $new_request = $this->m_data->get_new_request();
        echo json_encode($new_request);
    }

     public function logout(){
        $this->session->sess_destroy();
        $url=base_url('Login');
        redirect($url);
    }


}