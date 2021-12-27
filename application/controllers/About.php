<?php
class About extends CI_Controller {
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model(array('Toko_model'));
    // }


    public function index(){
        $data['title'] = 'About BBC';
        $this->load->view('about/index', $data);
    }
}