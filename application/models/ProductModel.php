<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {
    
    public function listProduk(){
        $data = $this->db->query('SELECT * FROM PRODUK;');
        return $data;
    }

    public function beliProduk($idProduk){
        $data = $this->db->query('SELECT * FROM PRODUK WHERE ID_PRODUK = '.$idProduk.';');
        return $data;
    }

    public function insertPembeli($data){
		$this->db->insert('PEMBELI', $data);
		return true;
    }

    public function get_count() {
        return $this->db->count_all('PRODUK');
    }
    
    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('PRODUK');

        return $query->result();
    }
}
?>