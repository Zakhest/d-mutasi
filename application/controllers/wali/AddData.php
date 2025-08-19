<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AddData extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->library('upload');
    } 

    public function index() {
        if ($this->input->post()) {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'png|pdf|jpg|jpeg|';
            $config['max_size'] = 4096;
            $this->upload->initialize($config);

            $files = ['surat_permohonan_pindah', 'surat_pindah_sekolah_asal', 'fotokopi_buku_rapor', 'fotokopi_kartu_nisn', 'bukti_dikeluarkan_dapodik'];
            $uploaded_files = [];
            $error_messages = [];

            foreach ($files as $file) {
                if ($this->upload->do_upload($file)) {
                    $uploaded_files[$file] = $this->upload->data('file_name');
                } else {
                    $uploaded_files[$file] = NULL;
                
                    // Cek apakah error terjadi karena ukuran file terlalu besar
                    if ($_FILES[$file]['size'] > ($config['max_size'] * 1024)) {
                        $error_messages[] = $file . ': Ukuran file terlalu besar. Maksimal ' . $config['max_size'] . ' KB.';
                    } else {
                        // Jika bukan karena size, tampilkan error tipe file
                        $error_type = pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION);
                        $error_messages[] = $file . ': Anda mencoba upload file tipe ' . $error_type . ' yang tidak diizinkan. Silakan upload file dengan tipe jpg, png, jpeg, atau pdf.';
                    }
                }
                
            }

            if (!empty($error_messages)) {
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat mengunggah berkas: <br>' . implode('<br>', $error_messages));
                redirect('Wali/Mutasi_kel');
            } else {
                $data = [
                    'nama_siswa' => $this->input->post('nama_siswa'),
                    'nama_wali' => $this->input->post('nama_wali'),
                    'jenis_mutasi' => $this->input->post('jenis_mutasi'),
                    'subkategori' => $this->input->post('subkategori'),
                    'surat_permohonan_pindah' => $uploaded_files['surat_permohonan_pindah'],
                    'surat_pindah_sekolah_asal' => $uploaded_files['surat_pindah_sekolah_asal'],
                    'fotokopi_buku_rapor' => $uploaded_files['fotokopi_buku_rapor'],
                    'fotokopi_kartu_nisn' => $uploaded_files['fotokopi_kartu_nisn'],
                    'bukti_dikeluarkan_dapodik' => $uploaded_files['bukti_dikeluarkan_dapodik'],
                    'tanggal_disurat' => $this->input->post('tanggal_disurat'),
                    'id_login' => $this->input->post('id_login'),
                    'no_telp' => $this->input->post('no_telp'),
                    'status' => $this->input->post('status')
                ];

                $this->m_data->AddData('permintaan_mutasi', $data);
                $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
                $submenu = $this->input->post('submenu');
                redirect('Wali/Mutasi_kel/' . $submenu);
            }
        }
    }

    public function masuk() {
        if ($this->input->post()) {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'png|pdf|jpg|jpeg';
            $config['max_size'] = 4096;
            $this->upload->initialize($config);

            $files = ['surat_permohonan_pindah', 'surat_pindah_sekolah_asal', 'fotokopi_buku_rapor', 'fotokopi_kartu_nisn', 'bukti_dikeluarkan_dapodik'];
            $uploaded_files = [];
            $error_messages = [];

            foreach ($files as $file) {
                if ($this->upload->do_upload($file)) {
                    $uploaded_files[$file] = $this->upload->data('file_name');
                } else {
                    $uploaded_files[$file] = NULL;
                
                    // Cek apakah error terjadi karena ukuran file terlalu besar
                    if ($_FILES[$file]['size'] > ($config['max_size'] * 1024)) {
                        $error_messages[] = $file . ': Ukuran file terlalu besar. Maksimal ' . $config['max_size'] . ' KB.';
                    } else {
                        // Jika bukan karena size, tampilkan error tipe file
                        $error_type = pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION);
                        $error_messages[] = $file . ': Anda mencoba upload file tipe ' . $error_type . ' yang tidak diizinkan. Silakan upload file dengan tipe jpg, png, jpeg, atau pdf.';
                    }
                }
                
            }

            if (!empty($error_messages)) {
                $this->session->set_flashdata('error', implode('<br>', $error_messages));
                redirect('Wali/Mutasi_kel');
            } else {
                $data = [
                    'nama_siswa' => $this->input->post('nama_siswa'),
                    'nama_wali' => $this->input->post('nama_wali'),
                    'jenis_mutasi' => $this->input->post('jenis_mutasi'),
                    'subkategori' => $this->input->post('subkategori'),
                    'surat_permohonan_pindah' => $uploaded_files['surat_permohonan_pindah'],
                    'surat_pindah_sekolah_asal' => $uploaded_files['surat_pindah_sekolah_asal'],
                    'fotokopi_buku_rapor' => $uploaded_files['fotokopi_buku_rapor'],
                    'fotokopi_kartu_nisn' => $uploaded_files['fotokopi_kartu_nisn'],
                    'bukti_dikeluarkan_dapodik' => $uploaded_files['bukti_dikeluarkan_dapodik'],
                    'tanggal_disurat' => $this->input->post('tanggal_disurat'),
                    'id_login' => $this->input->post('id_login'),
                    'no_telp' => $this->input->post('no_telp'),
                    'status' => $this->input->post('status')
                ];

                $this->m_data->AddData('permintaan_mutasi', $data);
                $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
               //$submenu = $this->input->post('submenu');
                redirect('Wali/Mutasi_mas/');
            }
        }
    }

    public function keluar_negeri(){
        if ($this->input->post()) {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'png|pdf|jpg|jpeg';
            $config['max_size'] = 4096;
            $this->upload->initialize($config);

            $files = ['surat_permohonan_pindah', 'surat_pindah_sekolah_asal', 'fotokopi_buku_rapor', 'fotokopi_kartu_nisn', 'bukti_dikeluarkan_dapodik'];
            $uploaded_files = [];
            $error_messages = [];
            foreach ($files as $file) {
                if ($this->upload->do_upload($file)) {
                    $uploaded_files[$file] = $this->upload->data('file_name');
                } else {
                    $uploaded_files[$file] = NULL;
                
                    // Cek apakah error terjadi karena ukuran file terlalu besar
                    if ($_FILES[$file]['size'] > ($config['max_size'] * 1024)) {
                        $error_messages[] = $file . ': Ukuran file terlalu besar. Maksimal ' . $config['max_size'] . ' KB.';
                    } else {
                        // Jika bukan karena size, tampilkan error tipe file
                        $error_type = pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION);
                        $error_messages[] = $file . ': Anda mencoba upload file tipe ' . $error_type . ' yang tidak diizinkan. Silakan upload file dengan tipe jpg, png, jpeg, atau pdf.';
                    }
                }
                
            }

            if (!empty($error_messages)) {
                $this->session->set_flashdata('error', implode('<br>', $error_messages));
                redirect('Wali/Mutasi_kel');
            } else {
                $data = [
                    'nama_siswa' => $this->input->post('nama_siswa'),
                    'nama_wali' => $this->input->post('nama_wali'),
                    'jenis_mutasi' => $this->input->post('jenis_mutasi'),
                    'subkategori' => $this->input->post('subkategori'),
                    'surat_permohonan_pindah' => $uploaded_files['surat_permohonan_pindah'],
                    'surat_pindah_sekolah_asal' => $uploaded_files['surat_pindah_sekolah_asal'],
                    'fotokopi_buku_rapor' => $uploaded_files['fotokopi_buku_rapor'],
                    'fotokopi_kartu_nisn' => $uploaded_files['fotokopi_kartu_nisn'],
                    'bukti_dikeluarkan_dapodik' => $uploaded_files['bukti_dikeluarkan_dapodik'],
                    'tanggal_disurat' => $this->input->post('tanggal_disurat'),
                    'id_login' => $this->input->post('id_login'),
                    'no_telp' => $this->input->post('no_telp'),
                    'status' => $this->input->post('status')
                ];

                $this->m_data->AddData('permintaan_mutasi', $data);
                $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
               //$submenu = $this->input->post('submenu');
                redirect('Wali/Mutasi_luar_neg/');
            }
        }
    }

}