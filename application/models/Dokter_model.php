<?php

class Dokter_model extends CI_model {
    public function getAllDokter(){
        return $this->db->get('dokter')->result_array();
    }

    public function getDokterById($id){
        return $this->db->get_where('dokter', ['id' => $id])->result_array();
    }
}