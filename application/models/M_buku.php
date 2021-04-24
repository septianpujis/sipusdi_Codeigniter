<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_buku extends CI_Model {
	private $table = "tb_book";
	private $primary = "id_buku";

	function getCount(){
		return $this->db->count_all($this->table);
	}
	
	function get(){
		return $this->db->get($this->table);
	}

    function getSedia(){
        $this->db->where('sedia','1');
        return $this->db->get($this->table);
    }

	function cek($kode){
        $this->db->where($this->primary,$kode);
        return $this->db->get($this->table);
    }
    
    function hapus($kode){
        $this->db->where($this->primary,$kode);
        $this->db->delete($this->table);
    }

    function cari($cari){
        $this->db->like($this->primary,$cari);
        $this->db->or_like("judul",$cari);
        return $this->db->get($this->table);
    }

    function simpan($query){
        $this->db->insert($this->table,$query);
        return $this->db->insert_id();
    }
    
    function update($kode, $query){
        $this->db->where($this->primary,$kode);
        $this->db->update($this->table,$query);
    }

}
