<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API_Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
    }

    public function index(){
        // Pastikan request adalah POST
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            http_response_code(200);
            exit();
        }
    
        file_put_contents('log_request.txt', file_get_contents("php://input") . "\n", FILE_APPEND);

        $data = json_decode(file_get_contents("php://input"), true);


        
        if (!$data || !isset($data['username']) || !isset($data['password'])) {
            echo json_encode(["success" => false, "message" => "Format request salah"]);
            http_response_code(400);
            return;
        }
        

        $username = $data['username'];
        $password = $data['password'];

        // Cek login di database
        $cek_login = $this->m_login->cek_login($username, $password);

        if ($cek_login->num_rows() > 0) {
            $user = $cek_login->row_array();

            $response = [
                "success" => true,
                "message" => "Login berhasil",
                "user" => [
                    "id_login" => (int) $user['id_login'], // Pastikan ini dikonversi ke integer
                    "username" => $user['username'],
                    "level" => $user['level'],
                    "nama_wali" => $user['nama_wali'],
                    "no_telp" => $user['no_telp']
                ]
            ];
            
            echo json_encode($response);
            http_response_code(200);
        } else {
            echo json_encode(["success" => false, "message" => "Username atau password salah"]);
            http_response_code(401);
        }
    }
}
