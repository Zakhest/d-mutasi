<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasi_ln extends CI_Controller {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->library('ciqrcode');
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
            $data['title'] = "Mutasi Luar Negeri";
            $data['user'] = $usernameData;
            $data['active_menu'] = 'mutasi_ln';
            $data['menu_open'] = '';
            $data['version'] = '1.2.3';

            // Mendapatkan jumlah permintaan mutasi dengan status 'Disetujui'
            $data['mutasi_keluar_negeri'] = $this->m_data->DataDate('luar_negeri', 'tanggal_surat');
            $this->load->view('kep/v_mutasi_ln', $data);
        }
       
    }

    public function UpdateData() {
        $persetujuan = $this->input->post('persetujuan');
        $no = $this->input->post('no');

        if ($persetujuan == 'Disetujui') {
            $config['upload_path'] = './assets/ttd/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tanda_tangan')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect('Kep/Mutasi_ln');
            } else {
                $upload_data = $this->upload->data();
                $data = array(
                    'persetujuan' => $persetujuan,
                    'tanda_tangan' => $upload_data['file_name']
                );
            }
        } elseif ($persetujuan == 'Ditolak') {
            $data = array(
                'persetujuan' => $persetujuan,
                'alasan_penolakan' => $this->input->post('alasan_penolakan')
            );
        }

        $this->m_data->UpdateData('luar_negeri', 'no', $no, $data);
        $this->session->set_flashdata('sukses', 'Data berhasil diperbarui');
        redirect('Kep/Mutasi_ln');
    }

    public function printSurat($no) {
        $data['surat'] = $this->m_data->getSuratNo($no); // Mengambil data surat berdasarkan nomor
        $data['format'] = $this->m_data->format_surat('luar_negeri');
        $data['kadis'] = $this->m_data->DataKadis();
        $data['nip']=$this->m_data->nipKadis();
        $data['qr_code'] = $this->generateQRCode(base_url("assets/ttd/".$data['surat']->tanda_tangan));
        $this->load->view('mutasi_keluar_negeri/v_print_ln', $data);
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