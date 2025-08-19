<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function index()
    {
       
        $add['nama_sekolah']=$this->input->post('nama_sekolah');
        $add['alamat']=$this->input->post('alamat');
        $add['kota']=$this->input->post('kota');
        $add['provinsi']=$this->input->post('provinsi');
            $this->m_data->AddData('sekolah',$add);
            $this->session->set_flashdata('sukses','data berhasil disimpan!');
            redirect(site_url('Staf/data_sekolah'));
    }

    public function edit(){
        $no=$this->input->post('no');
        $update['nama_sekolah']=$this->input->post('nama_sekolah');
        $update['alamat']=$this->input->post('alamat');
        $update['kota']=$this->input->post('kota');
        $update['provinsi']=$this->input->post('provinsi');
       
        $this->m_data->UpdateData('sekolah','no_urut',$no,$update);
        $this->session->set_flashdata('sukses','Data berhasil diubah!');
        redirect(site_url('staf/data_sekolah'));
    }
}