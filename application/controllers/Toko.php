<?php

class Toko extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Toko_model'));
    }


    public function index(){
        $data['title'] = 'Beli Produk Kecantikan';
        $data['toko'] = $this->Toko_model->getAllProduk();
        if($this->input->post('keyword')){
            $data['toko'] = $this->Toko_model->findProduk();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('toko/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id){
        $data['title'] = 'Detail Produk';
        $data['toko'] = $this->Toko_model->getProdukById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('toko/detail', $data);
        $this->load->view('templates/footer');
    }

    // public function beli($id){
    //     $this->load->library('cart');
    //     $data['title'] = 'Beli Produk';
    //     $data['toko'] = $this->Toko_model->getProdukById($id);
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('toko/beli', $data);
    //     $this->load->view('templates/footer');
    // }
}