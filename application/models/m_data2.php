<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_data2 extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // ✅ Fungsi ambil data permohonan berdasarkan PK $no
    public function get_permohonan_by_no($no)
    {
        $this->db->where('no', $no);
        $query = $this->db->get('permohonan_mutasi'); // nama tabel harus sesuai
        return $query->row(); // hasil berupa object
    }

    public function get_file_by_no($no) {
        $query = $this->db->get_where('permintaan_mutasi', ['no' => $no]);
        return $query->row(); // jangan lupa pastikan 'no' adalah PK
    }
    
    public function simpan_hasil_scan($data)
{
    log_message('debug', 'Data yang akan disimpan: ' . print_r($data, true));

    $this->db->insert('t_parsing_result', $data);

    if ($this->db->affected_rows() > 0) {
        log_message('debug', 'Data berhasil disimpan.');
        return $this->db->insert_id();
    } else {
                show_error('Terjadi kesalahan saat menyimpan data. Silakan coba lagi.', 500, 'Gagal Simpan Data   '.$this->db->last_query());
        return false;
    }
}

public function get_scan_data_by_id($id)
{
    return $this->db
        ->where('id', $id)
        ->get('t_parsing_result')
        ->row();
}





}
