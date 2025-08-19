<?php 
class m_data extends CI_Model{
     function __construct(){
        $this->load->database();
     }

	 function get_profil($id_login) {
        $this->db->select('*');
        $this->db->where('id_login', $id_login);
        $query = $this->db->get('login');
        return $query->result();
} 

function get_profil_pejabat($id_login) {
    $this->db->select('*');
    $this->db->where('id_login', $id_login);
    $query = $this->db->get('kepala_pejabat');
    return $query->row();
} 

function get_session_pejabat($id_login) {
    $this->db->select('*');
    $this->db->where('id_login', $id_login);
    $query = $this->db->get('kepala_pejabat');
    return $query->result();
} 

     function getdata($no){
        $this->db->select("*");
        $this->db->where('no', $no);
        $query = $this->db->get('data_mutasi');
        return $query->result();
}
    function searchData($nama) {
        $query = $this->db->get_where('sekertaris', array('nama' => $nama));
        return $query->row_array(); 
  }

   public function get_menus() {
        // Menyimpan data menu dalam bentuk array asosiatif
        $menus = array(
            array(
                'id' => 'mutasi',
                'label' => 'Mutasi Keluar',
                'url' => 'Mutasi/index'
            ),
            array(
                'id' => 'mutasi_masuk',
                'label' => 'Mutasi Masuk',
                'url' => 'Mutasi/Mutasi_masuk'
            ),
              array(
                'id' => 'mutasi_keluar_negeri',
                'label' => 'Mutasi Luar Negeri',
                'url' => 'Mutasi/Mutasi_ln'
            ),
            // Menambahkan menu lainnya sesuai kebutuhan
        );

        // Mengembalikan data menu
        return $menus;
    }
  
  
    function GetNamaSekolah($nama_sekolah) {
        $query = $this->db->get_where('sekolah', array('nama_sekolah' => $nama_sekolah));
        return $query->row_array();
    }
  
    function GetKepala($nama) {
        $query = $this->db->get_where('kepala_pejabat', array('nama' => $nama));
        return $query->row_array();
    }


    function GetDataSekolah($tujuan_sekolah) {
        $query = $this->db->get_where('tujuan_sekolah', array('tujuan_sekolah' => $tujuan_sekolah));
        return $query->row_array();
    }


  function get_jumlah(){ 
    $this->db->select('COUNT(nama_siswa) as jumlah');
$this->db->from('data_mutasi');
return $this->db->get()->row()->jumlah;
     }

  public function get_detail($no) {
        // Query untuk mengambil detail data dari database berdasarkan id
        $query = $this->db->get_where('data_mutasi', array('no' => $no)); // Ganti 'your_table_name' dengan nama tabel Anda
        return $query->row_array();
    }
    

    function ShowData(){
      $this->db->select("*");
      $this->db->from("data_mutasi");
      $this->db->order_by('tanggal_dibuat', 'DESC');
      $query = $this->db->get(); // Eksekusi query
      return $query->result();
    }

    function AddData($tabel, $data=array())
    {
       return $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel, $fieldid, $fieldvalue, $data = array())
    {
        $this->db->where($fieldid, $fieldvalue);
        return $this->db->update($tabel, $data);
    }
    

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function DataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    function getWhere($table,$where){
        $data=$this->db->get_where($table,$where);
        return $data->result();
    } 

     function DataGet($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    public function DataDate($tabel, $date, $sekretaris = null) {
        if ($sekretaris) {
            $this->db->where('sekertaris', $sekretaris); // Gunakan filter berdasarkan nama
        }
        $this->db->order_by($date, 'DESC'); // Urutkan berdasarkan tanggal
        $query = $this->db->get($tabel);
        return $query->result(); // Kembalikan hasil query sebagai array objek
    }

    public function UpdateDataField($table, $field_key, $data) {
        $this->db->where($field_key, $data[$field_key]); // Cari data berdasarkan key (nisn)
        return $this->db->update($table, $data); // Lakukan update
    }
      

    public function getSuratByNo($no) {
        $this->db->where('no', $no); // Kondisi berdasarkan kolom no
        $query = $this->db->get('data_mutasi'); // Ambil data dari tabel mutasi_keluar
        return $query->row(); // Kembalikan sebagai satu objek
    }

    public function getSuratNo($no) {
        $this->db->where('no', $no); // Kondisi berdasarkan kolom no
        $query = $this->db->get('luar_negeri'); // Ambil data dari tabel mutasi_keluar
        return $query->row(); // Kembalikan sebagai satu objek
    }
    
    public function getSuratMasuk($no_urut) {
        $this->db->where('no_urut', $no_urut); // Kondisi berdasarkan kolom no
        $query = $this->db->get('mutasi_masuk'); // Ambil data dari tabel mutasi_keluar
        return $query->row(); // Kembalikan sebagai satu objek
    }
    
    function hitung(){
        $this->db->select('COUNT(nama_siswa) as jk');
        $this->db->from('data_mutasi');
        return $this->db->get()->row()->jk;
    }

     function hitung2(){
        $this->db->select('COUNT(kepala_sd) as m');
        $this->db->from('mutasi_masuk');
        return $this->db->get()->row()->m;
    }

     function hitung3(){
        $this->db->select('COUNT(nama_siswa) as l');
        $this->db->from('luar_negeri');
        return $this->db->get()->row()->l;
    }


    public function siswa_get($no_urut) {
        $this->db->select('*');
        $this->db->where('no_urut', $no_urut);
        $this->db->order_by('no','ASC');
        $query = $this->db->get('siswa_masuk');
        return $query->result();
    }

    public function data_sekolah () {
        $query = $this->db->get('sekolah');
        return $query->result_array();
    }

    public function addregister ($data){
        return $this->db->insert('login', $data);
    }   

    public function updateBaru($no, $data) {
        $this->db->where('no', $no);
        return $this->db->update('data_mutasi', $data); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    }


public function get_count_by_status($status) {
    $this->db->where('status', $status);
    return $this->db->count_all_results('permintaan_mutasi');
}

public function get_user_by_id($id_login)
    {
        return $this->db->get_where('login', ['id_login' => $id_login])->row_array();
    }

public function hitung_sekolah() {
    return $this->db->count_all('sekolah');
}

public function data_ex(){
    $query = $this->db->get('permintaan_mutasi');
        return $query->result_array();
}

public function export(){
    $data = $this->data_ex();

    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Menambahkan header
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Status');
    $sheet->setCellValue('C1', 'Tanggal Permintaan');

    // Mengisi data
    $row = 2;
    foreach ($data as $item) {
        $sheet->setCellValue('A' . $row, $item['id']);
        $sheet->setCellValue('B' . $row, $item['status']);
        $sheet->setCellValue('C' . $row, $item['tanggal_permintaan']);
        $row++;
    }

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $filename = 'data_mutasi.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . urlencode($filename) . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
}

public function get_pejabat($jabatan) {
    $this->db->select('*');
    $this->db->from('kepala_pejabat');
    $this->db->where('jabatan', $jabatan);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}


public function get_kasi() {
    $this->db->select('*');
    $this->db->from('kepala_pejabat');
    $this->db->where('posisi = "kasi" ');
    $query = $this->db->get();
    return $query->result();
}



public function get_akun($sublevel) {
    $this->db->select('*');
    $this->db->from('login');
    $this->db->where('sublevel', $sublevel);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}

public function get_akun_kasi($username) {
    $this->db->select('*');
    $this->db->from('login');
    $this->db->where('username', $username);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}

public function get_surat($jenis){
    $this->db->select('*');
    $this->db->from('format_no_surat');
    $this->db->where('jenis', $jenis);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}

public function format_surat($jenis){
    $this->db->select('format');
    $this->db->from('format_no_surat');
    $this->db->where('jenis', $jenis);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}

function DataKabid()  {
    $this->db->select('nama');
    $this->db->from('kepala_pejabat');
    $this->db->where('jabatan', 'kabid');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }

    
}

function DataKadis()  {
    $this->db->select('nama');
    $this->db->from('kepala_pejabat');
    $this->db->where('jabatan', 'kadis');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }

    
}

function nipKabid(){
    $this->db->select('nip');
    $this->db->from('kepala_pejabat');
    $this->db->where('jabatan', 'kabid');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}

function nipKadis(){
    $this->db->select('nip');
    $this->db->from('kepala_pejabat');
    $this->db->where('jabatan', 'kadis');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}

public function get_counts_by_login($id_login, $jenis, $subkategori) {
    $this->db->where('id_login', $id_login);
    $this->db->where('jenis_mutasi', $jenis);
    $this->db->where('subkategori', $subkategori);
    return $this->db->count_all_results('permintaan_mutasi');
}

public function get_permintaan_mutasi($id_login, $jenis_mutasi, $subkategori) {
    $this->db->select('*');
    $this->db->from('permintaan_mutasi');
    $this->db->where('id_login', $id_login);
    $this->db->where('jenis_mutasi', $jenis_mutasi);
    $this->db->where('subkategori', $subkategori);
    $query = $this->db->get();
    return $query->result();
}

public function get_status_by_no($no) {
    $this->db->select('*');
    $this->db->from('permintaan_mutasi');
    $this->db->where('no', $no);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row_array(); // Return all data as an associative array
    }
    return false;
}

public function count($tabel) {
    return $this->db->count_all($tabel);
}

public function get_data_baru() {
    $today = date('Y-m-d'); // Format tanggal: YYYY-MM-DD

    // Menjalankan query
    $this->db->select('COUNT(*) as count');
    $this->db->from('permintaan_mutasi');
    $this->db->where('status', 'pending');
    $this->db->where('DATE(tanggal_disurat) = CURDATE()'); // Membandingkan tanggal_disurat dengan tanggal hari ini
    return $this->db->get()->row()->count;  // Mengembalikan jumlah data baru
}

public function get_notif_baru($tabel, $kolom) {
    $today = date('Y-m-d'); // Format tanggal: YYYY-MM-DD

    // Menjalankan query
    $this->db->select('COUNT(*) as count');
    $this->db->from($tabel);
    $this->db->where('persetujuan', 'pending');
    $this->db->where('DATE('.$kolom.') = CURDATE()'); // Membandingkan tanggal_disurat dengan tanggal hari ini
    return $this->db->get()->row()->count;  // Mengembalikan jumlah data baru
}

public function get_mutasi_with_siswa() {
    // Menggunakan query builder CodeIgniter
    $this->db->distinct();
    $this->db->select('siswa_masuk.asal_sekolah, mutasi_masuk.tanggal_surat, mutasi_masuk.no_urut, mutasi_masuk.persetujuan');
    $this->db->from('siswa_masuk'); // Tabel siswa masuk
    $this->db->join('mutasi_masuk', 'siswa_masuk.no_urut = mutasi_masuk.no_urut'); // Join dengan tabel mutasi masuk
    $this->db->order_by('mutasi_masuk.tanggal_surat', 'DESC'); // Urutkan berdasarkan tanggal_surat

    $query = $this->db->get(); // Eksekusi query
    return $query->result();  // Mengembalikan data dalam bentuk array objek
}

public function get_mutasi_masuk($no_urut) {
    $this->db->select('
        mutasi_masuk.no_urut,
        mutasi_masuk.tanggal_hari_ini,
        mutasi_masuk.tanggal_hijriah,
        mutasi_masuk.kepala_sd,
        mutasi_masuk.no_surat,
        mutasi_masuk.tanggal_surat,
        mutasi_masuk.alamat_sekolah,
        mutasi_masuk.kecamatan,
        mutasi_masuk.sekertaris,
        mutasi_masuk.persetujuan,
        mutasi_masuk.tanda_tangan,
        mutasi_masuk.persetujuan,
        mutasi_masuk.alasan_penolakan,
        siswa_masuk.nama_siswa,
        siswa_masuk.ttl,
        siswa_masuk.masuk_kelas,
        siswa_masuk.tahun,
        siswa_masuk.asal_sekolah,
      
    ');
    $this->db->from('siswa_masuk');
    $this->db->join('mutasi_masuk', 'siswa_masuk.no_urut = mutasi_masuk.no_urut'); // JOIN tabel siswa_masuk
    $this->db->where('mutasi_masuk.no_urut', $no_urut ); // Urutkan dari tanggal terbaru
    $query = $this->db->get();
    return $query->row(); // Mengembalikan data dalam bentuk array objek
}

public function get_siswa_mutasi_masuk($no_urut) {
    $this->db->select('*');
    $this->db->from('siswa_masuk');
    $this->db->where('no_urut', $no_urut);
    $query = $this->db->get();
    return $query->result();

}

public function check_username($username) {
    $this->db->where('username', $username);
    $query = $this->db->get('login'); // Replace 'users' with your actual table name
    return $query->num_rows() > 0;
}

public function data_baru($filter = 'all'){
    $this->db->select('*');
    $this->db->from('permintaan_mutasi');
    
    if($filter == 'today') {
        $this->db->where('DATE(tanggal_disurat)', date('Y-m-d'));
    }
    
    $this->db->order_by('tanggal_disurat', 'DESC');
    $query = $this->db->get();
    return $query->result();
}

public function data_arsip(){
    $this->db->select('*');
    $this->db->from('permintaan_mutasi_arsip');
    $this->db->order_by('tanggal_disurat', 'DESC');
    $query = $this->db->get();
    return $query->result();
}


public function pindahkan_data_selesai() {
    // Query untuk memindahkan data
    $insert_query = "
        INSERT INTO permintaan_mutasi_arsip (no, nama_siswa, nama_wali, jenis_mutasi, subkategori, 
            surat_permohonan_pindah, surat_pindah_sekolah_asal, fotokopi_buku_rapor, fotokopi_kartu_nisn, 
            bukti_dikeluarkan_dapodik, tanggal_disurat, id_login, status, alasan_penolakan, surat_hasil_mutasi)
        SELECT no, nama_siswa, nama_wali, jenis_mutasi, subkategori, 
            surat_permohonan_pindah, surat_pindah_sekolah_asal, fotokopi_buku_rapor, fotokopi_kartu_nisn, 
            bukti_dikeluarkan_dapodik, tanggal_disurat, id_login, status, alasan_penolakan, surat_hasil_mutasi
        FROM permintaan_mutasi
        WHERE status = 'selesai' AND tanggal_disurat <= DATE_SUB(NOW(), INTERVAL 1 DAY)
    ";

    $this->db->query($insert_query);

    // Log query untuk debugging
    log_message('debug', 'Insert Query: ' . $insert_query);

    // Query untuk menghapus data
    $delete_query = "
        DELETE FROM permintaan_mutasi
        WHERE status = 'selesai' AND tanggal_disurat <= DATE_SUB(NOW(), INTERVAL 1 DAY)
    ";

    $this->db->query($delete_query);

    // Log query untuk debugging
    log_message('debug', 'Delete Query: ' . $delete_query);
}




}

