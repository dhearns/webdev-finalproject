<?php

class Toko_model extends CI_model {
    public function getAllProduk(){
        return $this->db->get('produk')->result_array();
    }

    public function getProdukById($id){
        return $this->db->get_where('produk', ['id' => $id])->result_array();
    }

    public function findProduk(){
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        return $this->db->get('produk')->result_array();
    }

    
}