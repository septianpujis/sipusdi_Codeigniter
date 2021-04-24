<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_user extends CI_Model {
	private $table = "tb_user";
	private $primary = "id_user";

	function getCount()
	{
		return $this->db->count_all($this->table);
	}
	
	function get()
	{
		return $this->db->get($this->table);
	}

    function checkDouble($kode){
        $this->db->where('nomor_induk',$kode);
        return $this->db->get($this->table);
    }

	function loginCheck($nama, $password)
	{
		$this->db->where('email', $nama);		
		$this->db->or_where('nomor_induk', $nama);
		$this->db->where('password', $password);
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
        $this->db->or_like("nama",$cari);
        return $this->db->get($this->table);
    }

    function simpan($jenis){
        $this->db->insert($this->table,$jenis);
        return $this->db->insert_id();
    }
    
    function update($kode, $jenis){
        $this->db->where($this->primary,$kode);
        $this->db->update($this->table,$jenis);
    }

}
