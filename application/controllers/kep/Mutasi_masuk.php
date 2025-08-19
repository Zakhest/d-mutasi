<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mutasi_masuk extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->library('ciqrcode');
    }

    public function index(){
        if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'kep') {
            $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
            redirect('login');
        }

        if ($this->session->userdata('logged_in')) {
            $id_login = $this->session->userdata('id_login');
            $usernameData = $this->m_data->get_profil_pejabat($id_login);
            $nama = $usernameData ? $usernameData->nama : null;
            $data['title'] = "Data Mutasi Masuk";
            $data['users'] = $usernameData;
            $data['user'] = $this->m_data->get_session_pejabat($id_login);
            $data['nama'] = $nama;
            $data['active_menu'] = 'mutasi_masuk';
            $data['menu_open'] = '';
            $data['version'] = '1.2.3';
            $data['mutasi_masuk'] = $this->m_data->get_mutasi_with_siswa();
            $this->load->view('kep/v_mutasi_masuk', $data);
        }
    }

    public function detail($no_urut){
        if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'kep') {
            $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
            redirect('login');
        }

        if ($this->session->userdata('logged_in')) {
            $id_login = $this->session->userdata('id_login');
            $usernameData = $this->m_data->get_profil_pejabat($id_login);
            $nama = $usernameData ? $usernameData->nama : null;
            $data['title'] = "Detail Mutasi Masuk";
            $data['users'] = $usernameData;
            $data['user'] = $this->m_data->get_session_pejabat($id_login);
            $data['nama'] = $nama;
            $data['active_menu'] = 'mutasi_masuk';
            $data['menu_open'] = '';
            $data['version'] = '1.2.3';
            $data['masuk_data'] = $this->m_data->get_mutasi_with_siswa();
            $data['mutasi_masuk'] = $this->m_data->get_mutasi_masuk($no_urut);
            $data['siswa'] = $this->m_data->get_siswa_mutasi_masuk($no_urut);
            $this->load->view('kep/v_detail_mutasi_masuk', $data);
        }
    }

    public function UpdateData() {
        $persetujuan = $this->input->post('persetujuan');
        $no_urut = $this->input->post('no_urut');

        if ($persetujuan == 'disetujui') {
            $config['upload_path'] = './assets/ttd/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tanda_tangan')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect('Kep/Mutasi_masuk/detail/'.$no_urut);
            } else {
                $upload_data = $this->upload->data();
                $data = array(
                    'persetujuan' => $persetujuan,
                    'tanda_tangan' => $upload_data['file_name']
                );
            }
        } elseif ($persetujuan == 'ditolak') {
            $data = array(
                'persetujuan' => $persetujuan,
                'alasan_penolakan' => $this->input->post('alasan_penolakan')
            );
        }

        $update_result = $this->m_data->UpdateData('mutasi_masuk', 'no_urut', $no_urut, $data);
        
        if ($update_result) {
            $this->session->set_flashdata('sukses', 'Data berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui data. Silakan coba lagi.');
        }
        
        redirect('Kep/Mutasi_masuk/detail/'.$no_urut);
    }

    public function printSurat($no_urut) {
        $data['surat'] = $this->m_data->getSuratMasuk($no_urut); // Mengambil data surat berdasarkan nomor
        $data['format'] = $this->m_data->format_surat('masuk');
        $data['siswa'] = $this->m_data->siswa_get($no_urut);
        $data['kabid'] = $this->m_data->DataKabid();
        $data['nip']=$this->m_data->nipKabid();
        $data['qr_code'] = $this->generateQRCode(base_url("assets/ttd/".$data['surat']->tanda_tangan));
        $this->load->view('kep/v_print_mutasi_masuk', $data);
       
    }

    public function lampiranSurat($no_urut) {
        $data['surat'] = $this->m_data->getSuratMasuk($no_urut); // Mengambil data surat berdasarkan nomor
        $data['format'] = $this->m_data->format_surat('masuk');
        $data['siswa'] = $this->m_data->siswa_get($no_urut);
        $data['kabid'] = $this->m_data->DataKabid();
        $data['nip']=$this->m_data->nipKabid();
        $data['siswa'] = $this->m_data->get_siswa_mutasi_masuk($no_urut);
        $data['qr_code'] = $this->generateQRCode(base_url("assets/ttd/".$data['surat']->tanda_tangan));
        $this->load->view('kep/v_lampiran', $data);
       
    }



    public function generateQRCode($data) {
        $config['cacheable']    = true;
        $config['cachedir']     = './assets/';
        $config['errorlog']     = './assets/';
        $config['imagedir']     = './assets/ttd/';
        $config['quality']      = true;
        $config['size']         = '1024';
        $config['black']        = array(224,255,255);
        $config['white']        = array(70,130,180);
        $this->ciqrcode->initialize($config);
    
        $image_name = 'qr_'.md5($data).'.png';
    
        $params['data'] = $data;
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name;
        $this->ciqrcode->generate($params);
    
        return base_url($config['imagedir'].$image_name);
    }

   
}