<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Kepala extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function index(){
        $no_urut=$this->input->post('no_urut');
        $id_login=$this->input->post('id_login');
        $update['nama']=$this->input->post('nama');
        $update['nip']=$this->input->post('nip');
        $ubah['username']=$this->input->post('username');
        $ubah['password']=$this->input->post('password');
        if ($this->m_data->UpdateData('kepala_pejabat','no_urut',$no_urut,$update) &&
    $this->m_data->UpdateData('login','id_login',$id_login,$ubah)) 
{
    $this->session->set_flashdata('sukses','Data berhasil diubah!');
} 
else 
{
    $this->session->set_flashdata('error','Data gagal diubah!');
}

        
        redirect(site_url('Staf/kepala_pejabat'));
    }
}