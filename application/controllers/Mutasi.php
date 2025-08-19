<?php
defined('BASEPATH') OR exit ('Dilarang akses');

class Mutasi extends Ci_Controller{ 
	function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_data');
        

	}
   
    public function index() 
    {
        
      if (!$this->session->userdata('logged_in')) {
      $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
      redirect('login'); 
 
    }

         $data['version'] = "1.2.3";

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
 
         $data['menu']="v_nav";
        $data['jk']=$this->m_data->hitung();
        $data['jk2']=$this->m_data->hitung2();
        $data['provinsi']=$this->m_data->DataGet('provinsi');
         $data['sekolah']=$this->m_data->DataGet('sekolah');
        $data['status']=  "v_status";   
      
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
         redirect(site_url('Mutasi/index'));
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
                       $data['isi']='mutasi_keluar/v_detail_mutasi';
                     
   
               
           }
           else
           {   
               echo "kosong";
           }
            
             $data['version'] = "1.2.3";
                $data['status']=  "v_status";   
      
       
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

         $add['no']=$this->input->post('no');
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
             $this->m_data->AddData('data_mutasi',$add);
             $this->session->set_flashdata('sukses','data berhasil disimpan!');
             redirect(site_url('Mutasi/index'));
    }


    public function Sekolah()
    {
    
         $nama_sekolah = $this->input->get('nama_sekolah');
         $hasil = $this->m_data->GetNamaSekolah($nama_sekolah);
         echo json_encode($hasil);
         //$this->load->view('sekolah/v_sekolah', $hasil);
    }

    public function data_sekolah(){
        $data['sekolah']= $this->m_data->data_sekolah();
        $data['version'] = "1.2.3";
        $this->load->view('sekolah/v_sekolah', $data);
    }

 

    public function Sekolah_tujuan()
    { 
    
         $tujuan_sekolah = $this->input->get('tujuan_sekolah');
         $data = $this->m_data->GetDataSekolah($tujuan_sekolah);
         echo json_encode($data);
    }
//=-----------------------------------Mutasi Masuk-------------------------------------------
    public function Mutasi_masuk(){
          if (!$this->session->userdata('logged_in')) {
      $this->session->set_flashdata('error', 'Maaf, Anda tidak bisa akses halaman ini, silahkan login dulu');
      redirect('login');
 
    }

         $data['version'] = "1.2.3";

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
                    $data['isi']='v_modal_mutasi';
                  
 
            
        }
        else
        {   
            
            $data['mutasi_masuk'] = $this->m_data->DataGet('mutasi_masuk');
            $data['isi']='v_data_mutasi';
            
        }
 
          $data['sekolah']=$this->m_data->DataGet('sekolah');
         $data['status']=  "v_status";   
           $data['menu']="v_nav";
       
        $this->load->view('mutasi_masuk/v_mutasi_masuk',$data);
    }


//---------------- Cek data Mutasi masuk ------------------- //

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


//--------------------------------------------------------//

    //-------------Edit Data masuk--------------------//
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
             $data['version'] = "1.2.3";
             $data['status']="v_status";
            $data['sekolah']=$this->m_data->DataGet('sekolah');
        $this->load->view('mutasi_masuk/v_edit', $data);
    }

    public function printdata (){
         if($this->uri->segment(4)=='print')
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
             $data['version'] = "1.2.3";
             $data['status']="v_status";
            $data['sekolah']=$this->m_data->DataGet('sekolah');
        $this->load->view('mutasi_masuk/v_cetak', $data);
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
          $this->load->view('v_update_siswa', $data);
    }

   public function AddMasuk()
   {

         $add['no_urut']=$this->input->post('no_urut');
         $add['tanggal_hari_ini']=$this->input->post('tanggal_hari_ini');
         $add['tanggal_hijriah']=$this->input->post('tanggal_hijriah');
         $add['kepala_sd']=$this->input->post('kepala_sd');
         $add['alamat_sekolah']=$this->input->post('alamat_sekolah');
         $add['kecamatan']=$this->input->post('kecamatan');
         $add['no_surat']=$this->input->post('no_surat');
         $add['tanggal_surat']=$this->input->post('tanggal_surat');
             $this->m_data->AddData('mutasi_masuk',$add);
             $this->session->set_flashdata('sukses','data berhasil disimpan!');
             redirect(site_url('Mutasi/mutasi_masuk'));

       
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
         redirect(site_url('mutasi/cek_data/'.$no_urut.'/cek'));
    
 
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
             redirect(site_url('Mutasi/editdata/'.$no_urut.'/edit'));
    }

      public function UpdateDataSiswa()
    {    
         $no_urut=$this->input->post('no_urut');
         $nisn=$this->input->post('nisn');
         $update['no_urut']=$this->input->post('no_urut');
         $update['no']=$this->input->post('no');
         $update['nama_siswa']= $this->input->post('nama_siswa');
         $update['ttl']= $this->input->post('ttl');
         $update['masuk_kelas']= $this->input->post('masuk_kelas');
         $update['tahun']=$this->input->post('tahun');
         $update['asal_sekolah']= $this->input->post('asal_sekolah');
         $update['nisn']= $this->input->post('nisn');
         $this->m_data->UpdateData('siswa_masuk','nisn',$nisn,$update);
         $this->session->set_flashdata('sukses','Data berhasil diubah!');
         redirect(site_url('mutasi/editdata/'.$no_urut.'/edit'));
    
 
}

//------------------Mutasi Keluar Negeri --------------------------------//


      public function Mutasi_ln(){


         $data['version'] = "1.2.3";

           if($this->uri->segment(4)=='cek')
        {   

        
            
        }
        else
        {   
            
          $data['mutasi_ln']=$this->m_data->DataGet('luar_negeri');
            
        }

                   $data['menu']="v_nav";
        

        $data['sekolah']=$this->m_data->DataGet('sekolah');
        $data['status']="v_status";
        $this->load->view('mutasi_keluar_negeri/v_mutasi_luar', $data);

      }


      public function AddDataLuar(){
        $add['no']=$this->input->post('no');
         $add['no_surat']=$this->input->post('no_surat');
         $add['nama_siswa']=$this->input->post('nama_siswa');
         $add['tanggal_surat']=$this->input->post('tanggal_surat');
         $add['jenis_kelamin']=$this->input->post('jenis_kelamin');
         $add['kelas']=$this->input->post('kelas');
         $add['nama_wali']=$this->input->post('nama_wali');
         $add['asal_sekolah']=$this->input->post('asal_sekolah');
         $add['alamat_sekolah']=$this->input->post('alamat_sekolah');
         $add['tujuan']=$this->input->post('tujuan');
        
         $add['tanggal_dibuat']=$this->input->post('tanggal_dibuat');
         $add['tanggal_hijriah']=$this->input->post('tanggal_hijriah');
             $this->m_data->AddData('luar_negeri',$add);
             $this->session->set_flashdata('sukses','data berhasil disimpan!');
             redirect(site_url('Mutasi/mutasi_ln'));


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
             redirect(site_url('Mutasi/cek_luar/'.$no.'/cek'));


      }


     






}