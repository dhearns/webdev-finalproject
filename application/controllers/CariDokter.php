<?php

class CariDokter extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Dokter_model'));
    }


    public function index(){
        $data['title'] = 'Daftar Dokter';
        //$this->load->model('Dokter_model');
        $data['caridokter'] = $this->Dokter_model->getAllDokter();
        $this->load->view('caridokter/index', $data);

    }

    public function detail($id){
        $data['title'] = 'Detail Data Dokter';
        //$this->load->model('Dokter_model');
        $data['caridokter'] = $this->Dokter_model->getDokterById($id);
        $this->load->view('caridokter/detail', $data);
    }
}