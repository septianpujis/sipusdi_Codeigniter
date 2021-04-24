<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_transaksi extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model(array('M_buku','M_user','M_transaksi'));
		$this->load->library(array('session', 'form_validation','upload'));

        if(!$this->session->userdata('nama')){
            redirect('c_login');
        }
	}

	public function index()
	{
		if ($this->input->get('query') !== null){
			$data['q_cari']=$this->input->get('query');
			$data['transaksi']=$this->M_transaksi->cari($data['q_cari'])->result();
			$count=$this->M_transaksi->cari($data['q_cari']);
			$data['title'] = "Hasil Pencarian Transaksi Peminjaman";
			$this->session->set_flashdata('pesan', 'Hasil Pencarian \''.$data['q_cari'].'\', Ditemukan '.$count->num_rows().' data');
		}elseif($this->session->userdata('level')=='2'){
			$data['transaksi']=$this->M_transaksi->tampilUser($this->session->userdata('id'))->result();
		}else{
			$data['title'] = "Data Peminjaman Buku";
			$data['transaksi']=$this->M_transaksi->get()->result();			
		}
		$data['jumlah']=$this->M_transaksi->getCount();
		$this->load->view('v_index', $data);
	}

	public function hapus()
	{
		$hapus=$this->input->post('id_trans');
    	$this->M_transaksi->hapus($hapus);
    	$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
    	redirect('c_transaksi');
	}

	public function sunting($id)
	{
		$data['title'] = "Sunting Data Transaksi";
		if ($this->input->post('id_trans') !== null) {
			$idp=$this->input->post('id_trans');
			if ($this->input->get_post('status')=='1' || $this->input->get_post('status')=='3' ||$this->input->get_post('status')=='5') {
					$statusB='0';
				}else{
					$statusB='1';
				};
			$infoT=array(
                'waktu_ambil'=>$this->input->post('waktu_ambil'),
                'waktu_kembali'=>$this->input->post('waktu_kembali'),
                'id_user'=>$this->input->post('user'),
                'id_status'=>$this->input->post('status'),
                'id_buku'=>$this->input->post('buku'),
            );
            $infoB=array(
            	'sedia' => $statusB
            );
			$this->M_transaksi->update($idp,$infoT);
			$this->M_buku->update($this->input->post('buku'), $infoB);
			$this->session->set_flashdata('pesan', 'Data berhasil disunting');
			redirect('c_transaksi');
		}else{
			$data['id_trans'] = $id;
			$data['user']=$this->M_user->get()->result();
			$data['buku']=$this->M_buku->get()->result();
			$data['status']=$this->M_transaksi->getStatus()->result();
			$data['trans']=$this->M_transaksi->cek($id)->row_array();
			$this->load->view('v_index',$data);
		}
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data Peminjaman";

		if ($this->input->post('waktu_pinjam') !== null){
            $infoT=array(
                'waktu_pinjam'=>$this->input->post('waktu_pinjam'),
                'id_user'=>$this->input->post('user'),
                'id_buku'=>$this->input->post('buku'),
            );
             $infoB=array(
            	'sedia' => '0'
            );
            $this->M_transaksi->simpan($infoT);
			$this->M_buku->update($this->input->post('buku'), $infoB);
            $this->session->set_flashdata('pesan', 'Data Peminjaman ditambahkan');
        	redirect('c_transaksi');
		}else{			
			$data['kelas']=$this->M_user->get()->result();
			$data['buku']=$this->M_buku->getSedia()->result();
			$this->load->view('v_index',$data);
		}
	}
}