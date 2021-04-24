<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_transaksi extends CI_Model {
	private $table = "tr_transaksi";
	private $primary = "id_trans";

	function getCount(){
		return $this->db->count_all($this->table);
	}

    function getCountStatus($query){
        $this->db->where('id_status', $query);
        return $this->db->get($this->table);
    }

    function getStatus()
    {
        return $this->db->get('tb_status_transaksi');
    }
	
	function get(){
		$this->db->order_by('waktu_pinjam','DESC');
		$this->db->where('tb_status_transaksi.id_status = tr_transaksi.id_status AND tb_user.id_user = tr_transaksi.id_user AND tb_book.id_buku = tr_transaksi.id_buku AND tb_kode_kelas.id_kelas = tb_user.id_kelas');
		$this->db->select('id_trans,tr_transaksi.id_buku,waktu_pinjam,waktu_kembali,nama,nama_kelas,no_telp,judul,penulis,nama_status');
		return $this->db->get('tr_transaksi, tb_user, tb_book, tb_kode_kelas, tb_status_transaksi');
	}
    
    function cari($cari){
        $this->db->like("waktu_pinjam",$cari);
        $this->db->order_by('waktu_pinjam','DESC');
        $this->db->where('tb_status_transaksi.id_status = tr_transaksi.id_status AND tb_user.id_user = tr_transaksi.id_user AND tb_book.id_buku = tr_transaksi.id_buku AND tb_kode_kelas.id_kelas = tb_user.id_kelas');
        $this->db->select('id_trans,tr_transaksi.id_buku,waktu_pinjam,waktu_kembali,nama,nama_kelas,no_telp,judul,penulis,nama_status');
        return $this->db->get('tr_transaksi, tb_user, tb_book, tb_kode_kelas, tb_status_transaksi');
    }

    function tampilUser($cari){
        $this->db->like($this->table.'.id_user',$cari);
        $this->db->order_by('waktu_pinjam','DESC');
        $this->db->where('tb_status_transaksi.id_status = tr_transaksi.id_status AND tb_user.id_user = tr_transaksi.id_user AND tb_book.id_buku = tr_transaksi.id_buku AND tb_kode_kelas.id_kelas = tb_user.id_kelas');
        $this->db->select('id_trans,tr_transaksi.id_buku,waktu_pinjam,waktu_kembali,nama,nama_kelas,no_telp,judul,penulis,nama_status');
        return $this->db->get('tr_transaksi, tb_user, tb_book, tb_kode_kelas, tb_status_transaksi');
    }

	function cek($kode){
        $this->db->where($this->primary,$kode);
        return $this->db->get($this->table);
    }
    
    function hapus($kode){
        $this->db->where($this->primary,$kode);
        $this->db->delete($this->table);
    }

    function simpan($jenis){
        $this->db->insert($this->table,$jenis);
        return $this->db->insert_id();
    }
    
    function update($id, $query){
        $this->db->where($this->primary,$id);
        $this->db->update($this->table,$query);
    }
}
