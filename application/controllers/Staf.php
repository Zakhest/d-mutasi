<?php
defined('BASEPATH') OR exit ('Dilarang akses');

class Staf extends Ci_Controller{ 
	function __construct(){
        parent::__construct();
        $this->load->library('session');
        //$this->load->library('PHPExcel');
        $this->load->model('m_data');
        $this->load->model('m_data2');
        $this->load->library('ciqrcode');
        
        

	}
   
    public function index() 
    {
        

    if (!$this->session->userdata('logged_in') || $this->session->userdata('akses') != 'staf') {
        $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
 redirect('login'); 
}

         $data['version'] = "1.2.3";
         $data['active_menu'] = 'index';

           if($this->uri->segment(4)=='detail')
        {
            $no=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('data_mutasi','no',$no)->row();
            $data['detail']['no']= $tampil->no;
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['tgl_disahkan']=$tampil->tgl_disahkan;
                    $data['detail']['nama_siswa']=$tampil->nama_siswa;
                    $data['detail']['ttl']=$tampil->ttl;
                    $data['detail']['nisn_nis']=$tampil->nisn_nis;
                    $data['detail']['sekolah_asal']=$tampil->sekolah_asal;
                    $data['detail']['alamat_sekolah_asal']=$tampil->alamat_sekolah_asal;
                    $data['detail']['sekolah_tujuan']=$tampil->sekolah_tujuan;
                    $data['detail']['kota_kab']=$tampil->kota_kab;
                    $data['detail']['provinsi']=$tampil->provinsi;
                    $data['detail']['tanggal_dibuat']=$tampil->tanggal_dibuat;
                    $data['isi']='v_modal_mutasi';
                  

            
        }
        else
        {   
            
            $data['mutasi'] = $this->m_data->ShowData();
            $data['isi']='v_data_mutasi';
            
        }
         $data['data_baru'] = $this->m_data->get_data_baru();
         $data['menu']="v_nav";
        $data['jk']=$this->m_data->hitung();
        $data['jk2']=$this->m_data->hitung2();
        $data['provinsi']=$this->m_data->DataGet('provinsi');
         $data['sekolah']=$this->m_data->DataGet('sekolah');
        $data['status']=  "v_status";   
        $data['menu_open'] = 'mutasi';
        $data['kasi'] = $this->m_data->get_kasi();
        
        $this->load->view('mutasi_keluar/v_mutasi', $data);
        
    }

   

    public function logout(){
        $this->session->sess_destroy();
        $url=base_url('Login');
        redirect($url);
    }


    public function detail_mutasi(){
     
     if($this->uri->segment(4)=='detail')
        {
            $no=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('data_mutasi','no',$no)->row();
            $data['detail']['no']= $tampil->no;
                 
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['tgl_disahkan']=$tampil->tgl_disahkan;
                    $data['detail']['nama_siswa']=$tampil->nama_siswa;
                    $data['detail']['ttl']=$tampil->ttl;
                    $data['detail']['jenis_kelamin']=$tampil->jenis_kelamin;
                    $data['detail']['kelas']=$tampil->kelas;
                    $data['detail']['nisn_nis']=$tampil->nisn_nis;
                    $data['detail']['sekolah_asal']=$tampil->sekolah_asal;
                    $data['detail']['alamat_sekolah_asal']=$tampil->alamat_sekolah_asal;
                    $data['detail']['sekolah_tujuan']=$tampil->sekolah_tujuan;
                    $data['detail']['kota_kab']=$tampil->kota_kab;
                    $data['detail']['provinsi']=$tampil->provinsi;
                    $data['detail']['tanggal_dibuat']=$tampil->tanggal_dibuat;
                     $data['detail']['sekertaris']=$tampil->sekertaris;
                      $data['detail']['nip']=$tampil->nip;
                      $data['detail']['jabatan']=$tampil->jabatan;
                    $data['isi']='mutasi_keluar/v_detail_mutasi';
                  

            
        }
        else
        {   
            echo "kosong";
        }
         
          $data['version'] = "1.2.3";
             $data['status']=  "v_status";   
   
    
         $this->load->view('mutasi_keluar/v_data_mutasi', $data);    
      
     }


     public function UpdateData()
    {
         $no=$this->input->post('no');
         $update['no']=$this->input->post('no');
         $update['no_surat']= $this->input->post('no_surat');
         $update['tgl_disahkan']= $this->input->post('tgl_disahkan');
         $update['nama_siswa']= $this->input->post('nama_siswa');
         $update['ttl']= $this->input->post('ttl');
         $update['kelas']= $this->input->post('kelas');
         $update['jenis_kelamin']= $this->input->post('jenis_kelamin');
         $update['nisn_nis']= $this->input->post('nisn_nis');
         $update['sekolah_asal']= $this->input->post('sekolah_asal');
         $update['alamat_sekolah_asal']= $this->input->post('alamat_sekolah_asal');
         $update['sekolah_tujuan']= $this->input->post('sekolah_tujuan');
         $update['kota_kab']= $this->input->post('kota_kab');
         $update['provinsi']= $this->input->post('provinsi');
         $update['tanggal_dibuat']= $this->input->post('tanggal_dibuat');
         $update['sekertaris']= $this->input->post('sekertaris');
         $update['nip']= $this->input->post('nip');
         $update['jabatan']= $this->input->post('jabatan');
         $this->m_data->UpdateData('data_mutasi','no',$no,$update);
         $this->session->set_flashdata('sukses','Data berhasil diubah!');
         redirect(site_url('Staf/index'));
    }


    public function print_mutasi(){
     
        if($this->uri->segment(4)=='print')
           {
               $no=$this->uri->segment(3);
               $tampil=$this->m_data->DataWhere('data_mutasi','no',$no)->row();
               $data['detail']['no']= $tampil->no;
                    
                       $data['detail']['no_surat']= $tampil->no_surat;
                       $data['detail']['tgl_disahkan']=$tampil->tgl_disahkan;
                       $data['detail']['nama_siswa']=$tampil->nama_siswa;
                       $data['detail']['ttl']=$tampil->ttl;
                       $data['detail']['jenis_kelamin']=$tampil->jenis_kelamin;
                       $data['detail']['kelas']=$tampil->kelas;
                       $data['detail']['nisn_nis']=$tampil->nisn_nis;
                       $data['detail']['sekolah_asal']=$tampil->sekolah_asal;
                       $data['detail']['alamat_sekolah_asal']=$tampil->alamat_sekolah_asal;
                       $data['detail']['sekolah_tujuan']=$tampil->sekolah_tujuan;
                       $data['detail']['kota_kab']=$tampil->kota_kab;
                       $data['detail']['provinsi']=$tampil->provinsi;
                       $data['detail']['tanggal_dibuat']=$tampil->tanggal_dibuat;
                        $data['detail']['sekertaris']=$tampil->sekertaris;
                         $data['detail']['nip']=$tampil->nip;
                         $data['detail']['jabatan']=$tampil->jabatan;
                         $data['detail']['tanda_tangan']=$tampil->tanda_tangan;
                       $data['isi']='mutasi_keluar/v_detail_mutasi';
                     
   
               
           }
           else
           {   
               echo "kosong";
           }
            
             $data['version'] = "1.2.3";
                $data['status']=  "v_status";   
               $data['format'] = $this->m_data->format_surat('keluar');
       
            $this->load->view('mutasi_keluar/v_print_mutasi', $data);    
         
        }
   
public function edit_mutasi(){

     
     if($this->uri->segment(4)=='edit')
        {
           
             $no=$this->uri->segment(3);
             //$data['sekertaris']=$this->m_data->DataGet('sekertaris');
            $tampil=$this->m_data->DataWhere('data_mutasi','no',$no)->row();
          
          
            $data['detail']['no']= $tampil->no;
                    
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['tgl_disahkan']=$tampil->tgl_disahkan;
                    $data['detail']['nama_siswa']=$tampil->nama_siswa;
                    $data['detail']['ttl']=$tampil->ttl;
                    $data['detail']['jenis_kelamin']=$tampil->jenis_kelamin;
                    $data['detail']['kelas']=$tampil->kelas;
                    $data['detail']['nisn_nis']=$tampil->nisn_nis;
                    $data['detail']['sekolah_asal']=$tampil->sekolah_asal;
                    $data['detail']['alamat_sekolah_asal']=$tampil->alamat_sekolah_asal;
                    $data['detail']['sekolah_tujuan']=$tampil->sekolah_tujuan;
                    $data['detail']['kota_kab']=$tampil->kota_kab;
                    $data['detail']['provinsi']=$tampil->provinsi;
                    $data['detail']['tanggal_dibuat']=$tampil->tanggal_dibuat;
                    $data['detail']['nip']=$tampil->nip;
                    $data['detail']['sekertaris']=$tampil->sekertaris;
                    $data['detail']['jabatan']=$tampil->jabatan;
                    $data['isi']='mutasi_keluar/v_mutasi';
                    echo json_encode($data);
                  

            
        }
        else
        {   
          
            
        }

         $data['version'] = "1.2.3";

        $data['status']=  "v_status";   
       $data['provinsi']=$this->m_data->DataGet('provinsi');
        $this->load->view('mutasi_keluar/v_data_mutasi', $data);    

 
     }

   

      public function detail_siswa($no) {
        $detail = $this->m_data->get_detail($no); // Ganti 'your_model_name' dengan nama model Anda dan 'get_detail_data' dengan method untuk mendapatkan detail data
        echo json_encode($detail); // Mengembalikan detail data dalam format JSON
    }

    
  
    

    public function AddData(){

       
         $add['no_surat']=$this->input->post('no_surat');
         $add['tgl_disahkan']=$this->input->post('tgl_disahkan');
         $add['nama_siswa']=$this->input->post('nama_siswa');
         $add['ttl']=$this->input->post('ttl');
         $add['jenis_kelamin']=$this->input->post('jenis_kelamin');
         $add['kelas']=$this->input->post('kelas');
         $add['nisn_nis']=$this->input->post('nisn_nis');
         $add['sekolah_asal']=$this->input->post('sekolah_asal');
         $add['alamat_sekolah_asal']=$this->input->post('alamat_sekolah_asal');
         $add['sekolah_tujuan']=$this->input->post('sekolah_tujuan');
         $add['kota_kab']=$this->input->post('kota_kab');
         $add['provinsi']=$this->input->post('provinsi');
         $add['sekertaris']=$this->input->post('sekertaris');
         $add['nip']=$this->input->post('nip');
         $add['jabatan']=$this->input->post('jabatan');
         $add['tanggal_dibuat']=$this->input->post('tanggal_dibuat');
         $add['persetujuan']=$this->input->post('status');
             $this->m_data->AddData('data_mutasi',$add);
             $this->session->set_flashdata('sukses','data berhasil disimpan!');
             redirect(site_url('Staf/index'));
    }


    public function Sekolah()
    {
    
         $nama_sekolah = $this->input->get('nama_sekolah');
         $hasil = $this->m_data->GetNamaSekolah($nama_sekolah);
         echo json_encode($hasil);
         //$this->load->view('sekolah/v_sekolah', $hasil);
    }

    public function Sekolah_edit()
    {
    
         $nama_sekolah = $this->input->get('nama_sekolah');
         $hasil = $this->m_data->GetNamaSekolah($nama_sekolah);
         echo json_encode($hasil);
         //$this->load->view('sekolah/v_sekolah', $hasil);
    }

    public function kepala() {
        $nama = $this->input->get('nama');
        $hasil = $this->m_data->GetKepala($nama);
        echo json_encode($hasil);
        
    }

    public function kasi() {
        $data = $this->m_data->getkasi();
        
    }

    public function data_sekolah(){
        $data['sekolah']= $this->m_data->data_sekolah();
        $data['version'] = "1.2.3";
        $data['menu_open'] = 'i';
        $data['active_menu'] = 'data_sekolah';
        $data['data_baru']= $this->m_data->get_data_baru();
        $this->load->view('sekolah/v_sekolah', $data);
    }

 

    public function Sekolah_tujuan()
    { 
    
         $tujuan_sekolah = $this->input->get('tujuan_sekolah');
         $data = $this->m_data->GetDataSekolah($tujuan_sekolah);
         echo json_encode($data);
    }

    private function encrypt($data) {
        $key = "MataharikeBumi150"; 
        $method = "aes-256-cbc";
        
        // Generate random IV
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
    
        // Enkripsi data dengan IV yang dihasilkan
        $encrypted = openssl_encrypt($data, $method, $key, 0, $iv);
    
        // Gabungkan encrypted data dengan IV yang diubah menjadi hex, lalu encode ke base64
        return base64_encode($encrypted . '::' . bin2hex($iv));  // IV dalam format hex
    }
    
    

    // Fungsi untuk mendekripsi data
    private function decrypt($data) {
        $key = "MataharikeBumi150"; 
        $method = "aes-256-cbc";
    
        // Kembalikan karakter yang diganti di JavaScript sebelumnya
        $data = str_replace('-', '+', $data);
        $data = str_replace('_', '/', $data);
        
        // Tambahkan padding jika diperlukan
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= str_repeat('=', 4 - $mod4); // Menggunakan . untuk menggabungkan string
        }
        
        // Pisahkan encrypted data dan IV dari hasil base64
        list($encrypted_data, $iv_hex) = explode('::', base64_decode($data), 2); 
    
        // Pastikan IV valid
        if (empty($iv_hex)) {
            throw new Exception("Invalid IV");
        }
    
        // Konversi IV dari hex kembali ke binari
        $iv = hex2bin($iv_hex);
    
        // Dekripsi data menggunakan IV yang benar
        return openssl_decrypt($encrypted_data, $method, $key, 0, $iv); 
    }
    


    // Method untuk mencetak surat
    public function printSurat($no) {
        $data['surat'] = $this->m_data->getSuratByNo($no); // Mengambil data surat berdasarkan nomor
        $data['format'] = $this->m_data->format_surat('keluar');
        $data['qr_code'] = $this->generateQRCode(base_url("assets/ttd/".$data['surat']->tanda_tangan));
        $this->load->view('mutasi_keluar/v_print_mutasi', $data);
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

//=-----------------------------------Mutasi Masuk----------------------------------------------------------------//
    public function Mutasi_masuk(){
          if (!$this->session->userdata('logged_in')) {
      $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
      redirect('login');
 
    }

         $data['version'] = "1.2.3";
         $data['active_menu'] = 'mutasi_masuk';
         $data['menu_open'] = 'mutasi';

           if($this->uri->segment(4)=='detail')
        {
            $no_urut=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('mutasi_masuk','no_urut',$no_urut)->row();
            $data['detail']['no_urut']= $tampil->no_urut;
                    $data['detail']['tanggal_hari_ini']= $tampil->tanggal_hari_ini;
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['tanggal_hijriah']=$tampil->tanggal_hijriah;
                    $data['detail']['asal_sekolah']=$tampil->asal_sekolah;
                    $data['detail']['tanggal_surat']=$tampil->tanggal_dibuat;
                    $data['detail']['persetujuan']=$tampil->persetujuan;
                    $data['detail']['alasan_penolakan']=$tampil->alasan_penolakan;
                    $data['detail']['ttd']=$tampil->ttd;
                    $data['isi']='v_modal_mutasi';
                  
 
            
        }
        else
        {   
            
            $data['mutasi_masuk'] = $this->m_data->DataGet('mutasi_masuk');
            $data['siswa_masuk'] = $this->m_data->DataGet('siswa_masuk');
            $data['isi']='v_data_mutasi';
            
        }
 
          $data['sekolah']=$this->m_data->DataGet('sekolah');
         $data['status']=  "v_status";   
           $data['menu']="v_nav";
           $data['data_baru']= $this->m_data->get_data_baru();
       
        $this->load->view('mutasi_masuk/v_mutasi_masuk',$data);
    }


    public function cek_data (){
        if($this->uri->segment(4)=='cek')
        {
            $no_urut=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('mutasi_masuk','no_urut',$no_urut)->row();
            $data['detail']['no_urut']= $tampil->no_urut;
                    $data['detail']['tanggal_hari_ini']= $tampil->tanggal_hari_ini;
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['tanggal_hijriah']=$tampil->tanggal_hijriah;
                    $data['detail']['kepala_sd']=$tampil->kepala_sd;
                    $data['detail']['tanggal_surat']=$tampil->tanggal_surat;
                    $data['detail']['kecamatan']=$tampil->kecamatan;
                    $data['detail']['alamat_sekolah']=$tampil->alamat_sekolah;
                    $data['detail']['persetujuan']=$tampil->persetujuan;
                    $data['detail']['alasan_penolakan']=$tampil->alasan_penolakan;
                    $data['detail']['tanda_tangan']=$tampil->tanda_tangan;
                    $data['siswa_masuk'] = $this->m_data->siswa_get($no_urut);
        }
        else
        {   
            
          
            
        }
          $data['version'] = "1.2.3";
          $data['status']=  "v_status";         
        $this->load->view('mutasi_masuk/v_cek', $data);
    }

    public function ceksiswa (){

        $this->load->view('v_siswa');
    }



    public function editdata (){
      
         if($this->uri->segment(4)=='edit')
        {
            $no_urut=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('mutasi_masuk','no_urut',$no_urut)->row();
            $data['detail']['no_urut']= $tampil->no_urut;
                    $data['detail']['tanggal_hari_ini']= $tampil->tanggal_hari_ini;
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['tanggal_hijriah']=$tampil->tanggal_hijriah;
                    $data['detail']['kepala_sd']=$tampil->kepala_sd;
                    $data['detail']['tanggal_surat']=$tampil->tanggal_surat;
                    $data['detail']['alamat_sekolah']=$tampil->alamat_sekolah;
                    $data['detail']['kecamatan']=$tampil->kecamatan;
                    
                    $data['siswa_masuk'] = $this->m_data->siswa_get($no_urut);
                    
        }
        else
        {   
            
          
            
        }
        $data['active_menu'] = 'mutasi_masuk';
        $data['menu_open'] = 'mutasi';
             $data['version'] = "1.2.3";
             $data['status']="v_status";
            $data['sekolah']=$this->m_data->DataGet('sekolah');
        $this->load->view('mutasi_masuk/v_edit', $data);
    }

    public function printSuratMasuk($no_urut) {
        $data['surat'] = $this->m_data->getSuratMasuk($no_urut); // Mengambil data surat berdasarkan nomor
        $data['format'] = $this->m_data->format_surat('masuk');
        $data['siswa'] = $this->m_data->siswa_get($no_urut);
        $data['kabid'] = $this->m_data->DataKabid();
        $data['nip']=$this->m_data->nipKabid();
        $data['qr_code'] = $this->generateQRCode(base_url("assets/ttd/".$data['surat']->tanda_tangan));
        $this->load->view('kep/v_print_mutasi_masuk', $data);
       
    }

    public function printSuratKeluar($no) {
        $data['surat'] = $this->m_data->getSuratNo($no); // Mengambil data surat berdasarkan nomor
        $data['format'] = $this->m_data->format_surat('luar_negeri');
        $data['kadis'] = $this->m_data->DataKadis();
        $data['nip']=$this->m_data->nipKadis();
        $data['qr_code'] = $this->generateQRCode(base_url("assets/ttd/".$data['surat']->tanda_tangan));
        $this->load->view('mutasi_keluar_negeri/v_print_ln', $data);
    }

       public function updatesiswa(){
         if($this->uri->segment(4)=='update')
        {
            $nisn=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('siswa_masuk','nisn',$nisn)->row();
            $data['detail']['nisn']= $tampil->nisn;
                    $data['detail']['no']= $tampil->no;
                      $data['detail']['no_urut']= $tampil->no_urut;
                    $data['detail']['nama_siswa']= $tampil->nama_siswa;
                    $data['detail']['ttl']=$tampil->ttl;
                    $data['detail']['masuk_kelas']=$tampil->masuk_kelas;
                    $data['detail']['tahun']=$tampil->tahun;
                    $data['detail']['asal_sekolah']=$tampil->asal_sekolah;

                   
        }
        else    
        {   
            
          
            
        }   

             $data['version'] = "1.2.3";
             $data['status']="v_status";
             $data['menu']="v_menu";
             $data['footer']="v_footer";
             $data['active']="active";
             $data['active_menu'] = 'mutasi_masuk';
             $data['menu_open'] = 'mutasi';
          $this->load->view('v_update_siswa', $data);
    }

public function AddMasuk()
{
        $add['no_urut'] = $this->input->post('no_urut');
        $add['tanggal_hari_ini'] = $this->input->post('tanggal_hari_ini');
        $add['tanggal_hijriah'] = $this->input->post('tanggal_hijriah');
        $add['kepala_sd'] = $this->input->post('kepala_sd');
        $add['alamat_sekolah'] = $this->input->post('alamat_sekolah');
        $add['kecamatan'] = $this->input->post('kecamatan');
        $add['no_surat'] = $this->input->post('no_surat');
        $add['tanggal_surat'] = $this->input->post('tanggal_surat');
       
        
        if ($this->m_data->AddData('mutasi_masuk', $add)) {
             $this->session->set_flashdata('sukses', 'Data berhasil disimpan!');
             redirect(site_url('Staf/mutasi_masuk'));
        } else {
             $error = $this->db->error(); // Get the error message from the database
             $this->session->set_flashdata('error', 'Data gagal disimpan! Error: ' . $error['message']);
             redirect(site_url('Staf/mutasi_masuk'));
        }
}

   public function UpdateMutasi()
    {
         $no_urut=$this->input->post('no_urut');
         $update['tanggal_hari_ini']=$this->input->post('tanggal_hari_ini');
         $update['tanggal_hijriah']= $this->input->post('tanggal_hijriah');
         $update['kepala_sd']= $this->input->post('kepala_sd');
         $update['alamat_sekolah']= $this->input->post('alamat_sekolah');
         $update['kecamatan']=$this->input->post('kecamatan');
         $update['no_surat']= $this->input->post('no_surat');
         $update['tanggal_surat']= $this->input->post('tanggal_surat');
         $this->m_data->UpdateData('mutasi_masuk','no_urut',$no_urut,$update);
         $this->session->set_flashdata('sukses','Data berhasil diubah!');
         redirect(site_url('staf/mutasi_masuk'));
    
 
}



    public function AddSiswaMasuk(){
         $no_urut=$this->input->post('no_urut');
         $add['nisn']=$this->input->post('nisn');
         $add['no_urut']=$this->input->post('no_urut');
         $add['no']=$this->input->post('no');
         $add['nama_siswa']=$this->input->post('nama_siswa');
         $add['ttl']=$this->input->post('ttl');
         $add['masuk_kelas']=$this->input->post('masuk_kelas');
         $add['tahun']=$this->input->post('tahun');
         $add['asal_sekolah']=$this->input->post('asal_sekolah');
       
             $this->m_data->AddData('siswa_masuk',$add);
             $this->session->set_flashdata('sukses','data berhasil disimpan!');
             redirect(site_url('S'));
    }

      public function UpdateDataSiswa()
    {    
         $no_urut=$this->input->post('no_urut');
         $no=$this->input->post('no');  
         $update['nama_siswa']= $this->input->post('nama_siswa');
         $update['ttl']= $this->input->post('ttl');
         $update['masuk_kelas']= $this->input->post('masuk_kelas');
         $update['tahun']=$this->input->post('tahun');
         $update['asal_sekolah']= $this->input->post('asal_sekolah');
         $update['nisn']= $this->input->post('nisn');
         $this->m_data->UpdateData('siswa_masuk','no',$no,$update);
         $this->session->set_flashdata('sukses','Data berhasil diubah!');
         redirect(site_url('mutasi/editdata/'.$no_urut.'/edit'));
    
 
}

//------------------Mutasi Keluar Negeri --------------------------------//
       

      public function Mutasi_ln(){


         $data['version'] = "1.2.3";
         $data['active_menu'] = 'mutasi_ln';
         $data['menu_open'] = 'mutasi';

           if($this->uri->segment(4)=='cek')
        {   

        
            
        }
        else
        {   
            
          $data['mutasi_ln']=$this->m_data->DataGet('luar_negeri');
            
        }

                   $data['menu']="v_nav";
        
                   $data['data_baru']= $this->m_data->get_data_baru();
        $data['sekolah']=$this->m_data->DataGet('sekolah');
        $data['status']="v_status";
        $this->load->view('mutasi_keluar_negeri/v_mutasi_luar', $data);

      }


      public function AddDataLuar(){
    $add['no_surat'] = $this->input->post('no_surat');
    $add['nama_siswa'] = $this->input->post('nama_siswa');
    $add['tanggal_surat'] = $this->input->post('tanggal_surat');
    $add['jenis_kelamin'] = $this->input->post('jenis_kelamin');
    $add['kelas'] = $this->input->post('kelas');
    $add['nama_wali'] = $this->input->post('nama_wali');
    $add['asal_sekolah'] = $this->input->post('asal_sekolah');
    $add['alamat_sekolah'] = $this->input->post('alamat_sekolah');
    $add['tujuan'] = $this->input->post('tujuan');
    $add['persetujuan'] = $this->input->post('status');
    $add['tanggal_dibuat'] = $this->input->post('tanggal_dibuat');
    $add['tanggal_hijriah'] = $this->input->post('tanggal_hijriah');

    if ($this->m_data->AddData('luar_negeri', $add)) {
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan!');
    } else {
        $error = $this->db->error(); // Get the error message from the database
        $this->session->set_flashdata('error', 'Data gagal disimpan! Error: ' . $error['message']);
    }
    redirect(site_url('Staf/mutasi_ln'));
}


      public function cek_luar (){
         if($this->uri->segment(4)=='cek')
        {   

            $no=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('luar_negeri','no',$no)->row();
            $data['detail']['no']= $tampil->no;
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['nama_siswa']= $tampil->nama_siswa;
                    $data['detail']['jenis_kelamin']=$tampil->jenis_kelamin;
                    $data['detail']['kelas']=$tampil->kelas;
                    $data['detail']['nama_wali']=$tampil->nama_wali;
                    $data['detail']['asal_sekolah']=$tampil->asal_sekolah;
                    $data['detail']['alamat_sekolah']=$tampil->alamat_sekolah;
                    $data['detail']['tujuan']=$tampil->tujuan;
                    $data['detail']['tanggal_dibuat']=$tampil->tanggal_dibuat;
                    $data['detail']['tanggal_hijriah']=$tampil->tanggal_hijriah;
                    $data['detail']['tanggal_surat']=$tampil->tanggal_surat;
      }

       else {

       }


       $this->load->view('mutasi_keluar_negeri/v_cek_luar', $data);



}



      public function cetak_luar (){
         if($this->uri->segment(4)=='cetak')
        {   

            $no=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('luar_negeri','no',$no)->row();
            $data['detail']['no']= $tampil->no;
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['nama_siswa']= $tampil->nama_siswa;
                    $data['detail']['jenis_kelamin']=$tampil->jenis_kelamin;
                    $data['detail']['kelas']=$tampil->kelas;
                    $data['detail']['nama_wali']=$tampil->nama_wali;
                    $data['detail']['asal_sekolah']=$tampil->asal_sekolah;
                    $data['detail']['alamat_sekolah']=$tampil->alamat_sekolah;
                    $data['detail']['tujuan']=$tampil->tujuan;
                    $data['detail']['tanggal_dibuat']=$tampil->tanggal_dibuat;
                    $data['detail']['tanggal_hijriah']=$tampil->tanggal_hijriah;
                    $data['detail']['tanggal_surat']=$tampil->tanggal_surat;
      }

       else {

       }

       $data['format']=$this->m_data->format_surat('luar_negeri');
       $this->load->view('mutasi_keluar_negeri/v_cetak_luar', $data);



}

 public function edit_luar (){
         if($this->uri->segment(4)=='edit')
        {   

            $no=$this->uri->segment(3);
            $tampil=$this->m_data->DataWhere('luar_negeri','no',$no)->row();
            $data['detail']['no']= $tampil->no;
                    $data['detail']['no_surat']= $tampil->no_surat;
                    $data['detail']['nama_siswa']= $tampil->nama_siswa;
                    $data['detail']['jenis_kelamin']=$tampil->jenis_kelamin;
                    $data['detail']['kelas']=$tampil->kelas;
                    $data['detail']['nama_wali']=$tampil->nama_wali;
                    $data['detail']['asal_sekolah']=$tampil->asal_sekolah;
                    $data['detail']['alamat_sekolah']=$tampil->alamat_sekolah;
                    $data['detail']['tujuan']=$tampil->tujuan;
                    $data['detail']['tanggal_dibuat']=$tampil->tanggal_dibuat;
                    $data['detail']['tanggal_hijriah']=$tampil->tanggal_hijriah;
                    $data['detail']['tanggal_surat']=$tampil->tanggal_surat;
      }

       else {

       }

   $data['sekolah']=$this->m_data->DataGet('sekolah');
       $this->load->view('mutasi_keluar_negeri/v_edit', $data);



}

 public function EditLuar(){
         $no=$this->input->post('no');
        $update['no']=$this->input->post('no');
         $update['no_surat']=$this->input->post('no_surat');
         $update['nama_siswa']=$this->input->post('nama_siswa');
         $update['tanggal_surat']=$this->input->post('tanggal_surat');
         $update['jenis_kelamin']=$this->input->post('jenis_kelamin');
         $update['kelas']=$this->input->post('kelas');
         $update['nama_wali']=$this->input->post('nama_wali');
         $update['asal_sekolah']=$this->input->post('asal_sekolah');
         $update['alamat_sekolah']=$this->input->post('alamat_sekolah');
         $update['tujuan']=$this->input->post('tujuan');
         $update['tanggal_dibuat']=$this->input->post('tanggal_dibuat');
         $update['tanggal_hijriah']=$this->input->post('tanggal_hijriah');
             $this->m_data->UpdateData('luar_negeri','no',$no,$update);
             $this->session->set_flashdata('sukses','data berhasil disimpan!');
             redirect('Staf/mutasi_ln');


      }


//---------------------------------------Data Kepala Pejabat----------------------------------------

public function kepala_pejabat(){
    $data['menu_open'] = 'i';
        $data['active_menu'] = 'kepala_pejabat'; 
        $data['data_baru']= $this->m_data->get_data_baru();

        $data['kadis'] = $this->m_data->get_pejabat('kadis');
        $data['kabid'] = $this->m_data->get_pejabat('kabid');
        $data['kasi_kur'] = $this->m_data->get_pejabat('kasi_kur');
        $data['kasi_kesis'] = $this->m_data->get_pejabat('kasi_kesis');
        $data['kabid_akun'] = $this->m_data->get_akun('kabid');
        $data['kadis_akun'] = $this->m_data->get_akun('kadis');
        $data['kasi_kur_akun'] = $this->m_data->get_akun_kasi('kasi_kur');
        $data['kasi_kesis_akun'] = $this->m_data->get_akun_kasi('kasi_kesis');
       

    $this->load->view('v_pejabat',$data);
}


//-------------------------------------Format Surat-----------------------------------------------------------

public function format_surat(){
    $data['menu_open'] = 'i';
    $data['keluar'] = $this->m_data->get_surat('keluar');
    $data['masuk'] = $this->m_data->get_surat('masuk');
    $data['luar_negeri'] = $this->m_data->get_surat('luar_negeri');
    $data['active_menu'] = 'format_surat';
    $data['data_baru']= $this->m_data->get_data_baru();
    $this->load->view('v_surat', $data);
}

public function edit_format() {
    $no_urut=$this->input->post('no_urut');
        $update['no_urut']=$this->input->post('no_urut');
         $update['format']=$this->input->post('format');
             $this->m_data->UpdateData('format_no_surat','no_urut',$no_urut,$update);
             $this->session->set_flashdata('sukses','data berhasil disimpan!');
             redirect('Staf/format_surat');

    
}


public function preview_keluar()  {
    $data['keluar'] = $this->m_data->get_surat('keluar');
    $data['format'] = $this->m_data->format_surat('keluar');
    $this->load->view('preview-keluar', $data);
}

public function preview_masuk()  {
    $data['keluar'] = $this->m_data->get_surat('masuk');
    $data['format'] = $this->m_data->format_surat('masuk');
    $this->load->view('preview-masuk', $data);
}

public function preview_keluar_negeri() {
    $data['luar_negeri'] = $this->m_data->get_surat('luar_negeri');
    $data['format'] = $this->m_data->format_surat('luar_negeri');
    $this->load->view('preview-luar-negeri', $data);
    
}



//-----------------------------------Permintaan Mutasi-----------------------------------------------------------
   
   public function permintaan_mutasi(){
    $data['menu_open'] = 'i';
    $data['active_menu'] = 'permintaan';
    $data['version'] = "1.2.3";
    $data['permintaan'] = $this->m_data->data_baru();
    $data['data_baru']= $this->m_data->get_data_baru();

     $this->load->view('v_permintaan', $data);
   }

   public function get_permintaan_mutasi_ajax() {
    $filter = $this->input->get('filter');
    $data = [];
    
    if($filter == 'today') {
        $this->db->where('DATE(tanggal_disurat)', date('Y-m-d'));
    }
    
    $this->db->select('*');
    $this->db->from('permintaan_mutasi'); 
    $this->db->order_by('tanggal_disurat', 'DESC');
    $query = $this->db->get();
    $data = $query->result();
    
    echo json_encode($data);
   }
     

   public function notif(){
    $data['data_baru']= $this->m_data->get_data_baru();
    $this->load->view('v_menu', $data);
}

   public function EditPermintaan() {
        // Pastikan pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('error', 'Maaf, Anda harus login terlebih dahulu');
            redirect('login');
        }

        // Ambil data dari form (misalnya menggunakan POST)
        $no = $this->input->post('no');
        $data = array(
            'status' => $this->input->post('status'),
            'alasan_penolakan' => $this->input->post('alasan_penolakan')
        );

        // Update file fields only if a new file is uploaded
        if ($this->input->post('status') === 'Selesai') {
            $uploaded_file = $this->upload_file('file_upload');
            if ($uploaded_file) {
                $data['surat_hasil_mutasi'] = $uploaded_file;
            }
        }

        // Panggil method UpdateData di model
        $this->m_data->UpdateData('permintaan_mutasi', 'no', $no, $data);

        // Set pesan sukses dan redirect
        $this->session->set_flashdata('success', 'Data berhasil diperbarui');
        redirect('Staf/permintaan_mutasi'); // Ganti dengan controller dan method yang sesuai
    }

    private function upload_file($field_name) {
        if (empty($_FILES[$field_name]['name'])) {
            return 'No file uploaded'; // Return warning if no new file is uploaded
        }

        $config['upload_path'] = './assets/surat/';
        $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            return 'File upload failed'; // Return warning if upload fails
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function arsip(){
        $data['menu_open'] = 'i';
        $data['active_menu'] = 'arsip';
        $data['version'] = "1.2.3";
        $data['permintaan'] = $this->m_data->data_arsip();
        $data['data_baru']= $this->m_data->get_data_baru();
        $this->load->view('v_arsip', $data);
    }

    public function UpdateCoba() {
    
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

   
  
    public function scan_berkas($no)
{
    $this->load->model('m_data2');
    $data = $this->m_data2->get_file_by_no($no);

    if (!$data) {
        show_error('Data tidak ditemukan!');
    }

    // Ambil nama file dari database
    $filename = $data->surat_pindah_sekolah_asal;
    $filepath = FCPATH . 'assets/uploads/' . $filename;

    if (!file_exists($filepath)) {
        $this->session->set_flashdata('alert_error', 'File tidak ditemukan di server: ' . $filename);
        redirect('Staf/permintaan_mutasi');
        return;
    }

    // Jalankan Python
    
    $python = "C:\\Users\\Zakhest\\AppData\\Local\\Programs\\Python\\Python313\\python.exe";
    $script = FCPATH . "assets/scan.py";
    $command = "\"$python\" \"$script\" \"$filename\"";

    $descriptorspec = [
        0 => ["pipe", "r"], // stdin
        1 => ["pipe", "w"], // stdout
        2 => ["pipe", "w"]  // stderr
    ];

    $process = proc_open($command, $descriptorspec, $pipes);

    if (is_resource($process)) {
        fclose($pipes[0]); // stdin tidak digunakan
        $output = stream_get_contents($pipes[1]);
        $error_output = stream_get_contents($pipes[2]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        proc_close($process);

        // Cek jika Python return error
        if (trim($error_output)) {
            log_message('error', 'Python stderr: ' . $error_output);
            $this->session->set_flashdata('alert_error', 'Gagal proses Python: ' . $error_output);
            redirect('Staf/permintaan_mutasi');
            return;
        }

        // Decode JSON dari Python
        $hasil = json_decode($output, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            log_message('error', 'Gagal decode JSON: ' . json_last_error_msg());
            log_message('error', 'Raw Output: ' . $output);
            $this->session->set_flashdata('alert_error', 'Format JSON tidak valid dari Python.');
            redirect('Staf/permintaan_mutasi');
            return;
        }

        // Simpan hasil parsing ke database
        $id_scan = $this->m_data2->simpan_hasil_scan($hasil);

        // Simpan ID ke session
        $this->session->set_userdata('id_scan_result', $id_scan);
        $this->session->set_flashdata('alert_error', 'Scan Berhasil!.');

        // Redirect ke mutasi_keluar (frontend akan ambil data via AJAX)
 
        redirect('Staf/');
    } else {
        $this->session->set_flashdata('alert_error', 'Gagal membuka proses Python.');
        redirect('Staf/permintaan_mutasi');
    }

    
}

public function get_scan_data()
{
    $this->load->model('m_data2');
    $scan_id = $this->session->userdata('id_scan_result');

    if (!$scan_id) {
        echo json_encode(['success' => false, 'message' => 'Scan ID tidak ditemukan di session.']);
        return;
    }

    $data = $this->m_data2->get_scan_data_by_id($scan_id);

    if ($data) {
        echo json_encode(['success' => true, 'data' => $data]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Data tidak ditemukan di database.']);
    }
}

public function baru() {
    $data_baru = $this->m_data->data_baru();
    echo json_encode(['data_baru' => $data_baru]);
}






   
    

    
    
    


}