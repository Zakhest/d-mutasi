<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
    
    function index(){
        $this->load->view('v_login');
    }

    // Fungsi autentikasi pengguna (tetap sama, tidak diubah)
    function auth(){
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $cek_login = $this->m_login->cek_login($username, $password);
        if ($cek_login->num_rows() > 0) {
            $data = $cek_login->row_array();
            $id_login = $data['id_login'];
            $username = $data['username'];
            $nama_wali = $data['nama_wali'];

            // Set sesi
            $session_id = session_id();
            $sesdata = array(
                'session_id' => $session_id,
                'username'   => $username,
                'id_login'   => $id_login,
                'nama_wali'  => $nama_wali,
                'logged_in'  => TRUE
            );
            $this->session->set_userdata($sesdata);

            // Simpan pengguna ke daftar online
            $this->m_login->save_online_user($session_id, $id_login);

            if ($data['level'] == 'staf') {
                $this->session->set_userdata('akses', 'staf');
                redirect('Dashboard');
            } elseif ($data['level'] == 'wali') {
                $this->session->set_userdata('akses', 'wali');
                redirect('wali/Loading');
            } elseif ($data['level'] == 'kep') {
                $this->session->set_userdata('akses', 'kep');
                redirect('kep/Loading');
            }
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('Login');
        }
    }

    // Fungsi logout
    function logout(){
        $session_id = $this->session->userdata('session_id');

        // Hapus pengguna dari daftar online
        $this->m_login->delete_online_user($session_id);

        // Hapus sesi
        $this->session->sess_destroy();
        redirect('Login');
    }

    // Fungsi untuk mendapatkan pengguna online
    

    function get_online_users() {
        $online_users = $this->m_login->getOnlineUsers();
        $total_users = $this->m_login->getTotalUsers();
        $offline_users = $total_users - count($online_users);

        echo json_encode([
            'online' => $online_users,
            'total' => $total_users,
            'offline' => $offline_users
        ]);
    }
}
?>
