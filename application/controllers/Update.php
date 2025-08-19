<?php

defined('BASEPATH') OR exit ('Dilarang Akses Langsung, Dikira PHP Native apa ;(');

class Update extends Ci_Controller{
     function __construct(){
        Parent::__construct();
        $this->load->model('m_data');
        $this->load->library('session');
     }


     public function index() {
    
        $no = $this->input->post('no'); // ID atau identifier unik
        $data = array();

        // Cek setiap input, hanya masukkan jika ada perubahan (tidak kosong)
        if ($this->input->post('no_surat')) {
            $data['no_surat'] = $this->input->post('no_surat');
        }
        if ($this->input->post('tgl_disahkan')) {
            $data['tgl_disahkan'] = $this->input->post('tgl_disahkan');
        }
        if ($this->input->post('nama_siswa')) {
            $data['nama_siswa'] = $this->input->post('nama_siswa');
        }
        if ($this->input->post('kelas')) {
            $data['kelas'] = $this->input->post('kelas');
        }
        if ($this->input->post('ttl')) {
            $data['ttl'] = $this->input->post('ttl');
        }
        if ($this->input->post('nisn_nis')) {
            $data['nisn_nis'] = $this->input->post('nisn_nis');
        }
        if ($this->input->post('jenis_kelamin')) {
            $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        }
        if ($this->input->post('sekolah_asal')) {
            $data['sekolah_asal'] = $this->input->post('sekolah_asal');
        }
        if ($this->input->post('alamat_sekolah_asal')) {
            $data['alamat_sekolah_asal'] = $this->input->post('alamat_sekolah_asal');
        }
        if ($this->input->post('sekolah_tujuan')) {
            $data['sekolah_tujuan'] = $this->input->post('sekolah_tujuan');
        }
        if ($this->input->post('kota_kab')) {
            $data['kota_kab'] = $this->input->post('kota_kab');
        }
        if ($this->input->post('provinsi')) {
            $data['provinsi'] = $this->input->post('provinsi');
        }
        if ($this->input->post('tanggal_dibuat')) {
            $data['tanggal_dibuat'] = $this->input->post('tanggal_dibuat');
        }
        if ($this->input->post('sekertaris')) {
            $data['sekertaris'] = $this->input->post('sekertaris');
        }
        if ($this->input->post('nip')) {
            $data['nip'] = $this->input->post('nip');
        }
        if ($this->input->post('jabatan')) {
            $data['jabatan'] = $this->input->post('jabatan');
        }

        // Cek apakah ada data yang diubah
        if (!empty($data)) {
            $update = $this->m_data->updateBaru($no, $data);
            if ($update) {
                $this->session->set_flashdata('success', 'Data berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui data.');
            }
        } else {
            $this->session->set_flashdata('info', 'Tidak ada perubahan data.');
        }

        redirect(base_url('staf'));
    }

}

