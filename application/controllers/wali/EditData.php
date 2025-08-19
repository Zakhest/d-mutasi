<?php

defined('BASEPATH') OR exit('Dilarang akses langsung!');

class EditData extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_data');
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        // Pastikan pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Maaf, Anda harus login terlebih dahulu');
            redirect('login');
        }

        // Ambil data dari form (misalnya menggunakan POST)
        $no = $this->input->post('no');
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nama_wali' => $this->input->post('nama_wali'),
            'tanggal_disurat' => $this->input->post('tanggal_disurat'),
            'id_login' => $this->input->post('id_login')
        );

        // Update file fields only if a new file is uploaded
        $fields = ['surat_permohonan_pindah', 'surat_pindah_sekolah_asal', 'fotokopi_buku_rapor', 'fotokopi_kartu_nisn', 'bukti_dikeluarkan_dapodik'];
        foreach ($fields as $field) {
            $uploaded_file = $this->upload_file($field, $this->input->post($field . '_old'));
            if ($uploaded_file !== $this->input->post($field . '_old')) {
                $data[$field] = $uploaded_file;
            }
        }

        // Panggil method UpdateData di model
        $this->m_data->UpdateData('permintaan_mutasi', 'no', $no, $data);

        // Set pesan sukses dan redirect
        $this->session->set_flashdata('success', 'Data berhasil diperbarui');
        redirect('wali/mutasi_kel/'); // Ganti dengan controller dan method yang sesuai
    }

    public function antarkota(){
        // Pastikan pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Maaf, Anda harus login terlebih dahulu');
            redirect('login');
        }

        // Ambil data dari form (misalnya menggunakan POST)
        $no = $this->input->post('no');
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nama_wali' => $this->input->post('nama_wali'),
            'tanggal_disurat' => $this->input->post('tanggal_disurat'),
            'id_login' => $this->input->post('id_login')
        );

        // Update file fields only if a new file is uploaded
        $fields = ['surat_permohonan_pindah', 'surat_pindah_sekolah_asal', 'fotokopi_buku_rapor', 'fotokopi_kartu_nisn', 'bukti_dikeluarkan_dapodik'];
        foreach ($fields as $field) {
            $uploaded_file = $this->upload_file($field, $this->input->post($field . '_old'));
            if ($uploaded_file !== $this->input->post($field . '_old')) {
                $data[$field] = $uploaded_file;
            }
        }

        // Panggil method UpdateData di model
        $this->m_data->UpdateData('permintaan_mutasi', 'no', $no, $data);

        // Set pesan sukses dan redirect
        $this->session->set_flashdata('success', 'Data berhasil diperbarui');
        $submenu = $this->input->post('submenu');
        redirect('wali/mutasi_kel/'. $submenu ); // Ganti dengan controller dan method yang sesuai
    }

    public function masuk(){
        // Pastikan pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Maaf, Anda harus login terlebih dahulu');
            redirect('login');
        }

        // Ambil data dari form (misalnya menggunakan POST)
        $no = $this->input->post('no');
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nama_wali' => $this->input->post('nama_wali'),
            'tanggal_disurat' => $this->input->post('tanggal_disurat'),
            'id_login' => $this->input->post('id_login')
        );

        // Update file fields only if a new file is uploaded
        $fields = ['surat_permohonan_pindah', 'surat_pindah_sekolah_asal', 'fotokopi_buku_rapor', 'fotokopi_kartu_nisn', 'bukti_dikeluarkan_dapodik'];
        foreach ($fields as $field) {
            $uploaded_file = $this->upload_file($field, $this->input->post($field . '_old'));
            if ($uploaded_file !== $this->input->post($field . '_old')) {
                $data[$field] = $uploaded_file;
            }
        }

        // Panggil method UpdateData di model
        $this->m_data->UpdateData('permintaan_mutasi', 'no', $no, $data);

        // Set pesan sukses dan redirect
        $this->session->set_flashdata('success', 'Data berhasil diperbarui');
      //  $submenu = $this->input->post('submenu');
        redirect('wali/mutasi_mas/'); // Ganti dengan controller dan method yang sesuai
    }

    public function keluar_negeri(){
        // Pastikan pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Maaf, Anda harus login terlebih dahulu');
            redirect('login');
        }

        // Ambil data dari form (misalnya menggunakan POST)
        $no = $this->input->post('no');
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nama_wali' => $this->input->post('nama_wali'),
            'tanggal_disurat' => $this->input->post('tanggal_disurat'),
            'id_login' => $this->input->post('id_login')
        );

        // Update file fields only if a new file is uploaded
        $fields = ['surat_permohonan_pindah', 'surat_pindah_sekolah_asal', 'fotokopi_buku_rapor', 'fotokopi_kartu_nisn', 'bukti_dikeluarkan_dapodik'];
        foreach ($fields as $field) {
            $uploaded_file = $this->upload_file($field, $this->input->post($field . '_old'));
            if ($uploaded_file !== $this->input->post($field . '_old')) {
                $data[$field] = $uploaded_file;
            }
        }

        // Panggil method UpdateData di model
        $this->m_data->UpdateData('permintaan_mutasi', 'no', $no, $data);

        // Set pesan sukses dan redirect
        $this->session->set_flashdata('success', 'Data berhasil diperbarui');
      //  $submenu = $this->input->post('submenu');
        redirect('wali/mutasi_luar_neg/'); // Ganti dengan controller dan method yang sesuai
    }

    private function upload_file($field_name, $old_file) {
        if (empty($_FILES[$field_name]['name'])) {
            return $old_file; // Return old file if no new file is uploaded
        }

        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            return $old_file; // Return old file if upload fails
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function UpdProfil(){
        // Pastikan pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Maaf, Anda harus login terlebih dahulu');
            redirect('login');
        }

        // Ambil data dari form (misalnya menggunakan POST)
        $id_login = $this->input->post('id_login');
        $data = array(
            'nama_wali' => $this->input->post('nama_wali'),
            'no_telp' => $this->input->post('no_telp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        // Update data di database
        $this->m_data->UpdateData('login', 'id_login', $id_login , $data);

        // Set pesan sukses dan redirect
        $this->session->set_flashdata('success', 'Profil berhasil diperbarui');
        redirect('Wali/mutasi_kel'); // Ganti dengan controller dan method yang sesuai
    }
}