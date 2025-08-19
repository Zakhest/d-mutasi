<?php

class Logout extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index() {
        $this->session->sess_destroy();
        redirect('');
    }
}