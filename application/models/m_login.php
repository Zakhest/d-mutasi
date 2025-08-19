<?php
class m_login extends CI_Model {

    // Fungsi cek login
    function cek_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('login');
    }

    // Simpan status pengguna sebagai "online"
    function save_online_user($session_id, $id_login) {
        $data = array(
            'session_id'    => $session_id,
            'id_login'      => $id_login,
            'ip_address'    => $this->input->ip_address(),
            'last_activity' => time(),
            'status'        => 'online'
        );

        if ($this->db->get_where('online_users', ['session_id' => $session_id])->num_rows() > 0) {
            $this->db->where('session_id', $session_id);
            $this->db->update('online_users', $data);
        } else {
            $this->db->insert('online_users', $data);
        }
    }

    // Hapus pengguna dari daftar online saat logout
    function delete_online_user($session_id) {
        $this->db->where('session_id', $session_id);
        $this->db->delete('online_users');
    }

    // Ambil daftar pengguna yang online
    function get_online_users() {
        $this->db->select('login.id_login, login.username, login.nama_wali, online_users.ip_address, online_users.last_activity, online_users.status');
        $this->db->join('login', 'online_users.id_login = login.id_login', 'left');
        $this->db->where('online_users.last_activity >', time() - 300); // Aktif dalam 5 menit terakhir
        return $this->db->get('online_users')->result_array();
    }

    // Perbarui status pengguna yang tidak aktif lebih dari 5 menit menjadi offline
    function update_status() {
        $this->db->where('last_activity <', time() - 300);
        $this->db->update('online_users', ['status' => 'offline']);
    }

    function getOnlineUsers(){
        $this->db->select('online_users.id_login, login.username, online_users.last_activity, online_users.status');
        $this->db->from('online_users');
        $this->db->join('login', 'online_users.id_login = login.id_login', 'left');
        $this->db->where('online_users.status', 'online');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Menghitung total pengguna dari tabel login
    function getTotalUsers(){
        return $this->db->count_all('login');
    }
}
?>
