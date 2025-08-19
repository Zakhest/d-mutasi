<?php 

class Loading extends Ci_Controller {
    function __construct(){
        parent::__construct();
        
    }

    public function index(){
        $this->load->view('kep/v_loading');
    }
}