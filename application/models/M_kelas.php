<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_kelas extends CI_Model {
	private $table = "tb_kode_kelas";
	private $primary = "id_kelas";

	function getCount()
	{
		return $this->db->count_all($this->table);
	}

	function get()
	{
		return $this->db->get($this->table);
	}

	function getId($id)
	{
		$this->db->where($this->primary,$id);
		return $this->db->get($this->table);
	}

}
