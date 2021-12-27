<?php 

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function index(){
        $username = $this->input->post('username');
        $data['title'] = 'Homepage';
        $this->load->view('home/index', $data);
    }
}