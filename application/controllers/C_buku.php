<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_buku extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model(array('M_buku'));
		$this->load->library(array('session', 'form_validation','upload'));

        if(!$this->session->userdata('nama')){
            redirect('c_login');
        }
	}

	public function index()
	{
		if ($this->input->get('query') !== null){
			$data['q_cari']=$this->input->get('query');
			$data['buku']=$this->M_buku->cari($data['q_cari'])->result();
			$count=$this->M_buku->cari($data['q_cari']);
			$data['title'] = "Hasil Pencarian Buku";
			$this->session->set_flashdata('pesan', 'Hasil Pencarian \''.$data['q_cari'].'\', Ditemukan '.$count->num_rows().' data');
		}else{
			$data['title'] = "Data Buku";
			$data['buku']=$this->M_buku->get()->result();			
		}
		$data['jumlah']=$this->M_buku->getCount();
		$this->load->view('v_index', $data);
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data Buku";
		if ($this->input->post('judul') !== null){
            //config upload img
            $config['upload_path']='./assets/img/buku/';
            $config['allowed_types']='gif|jpg|png';
            $config['max_size']='1000';
            $config['max_width']='2000';
            $config['max_height']='1024';

            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }

            $info=array(
                'judul'=>$this->input->post('judul'),
                'penulis'=>$this->input->post('penulis'),
                'penerbit'=>$this->input->post('penerbit'),
                'tahun'=>$this->input->post('tahun'),
                'halaman'=>$this->input->post('halaman'),
                'genre'=>$this->input->post('genre'),
                'sinopsis'=>$this->input->post('sinopsis')
                //foto nanti
            );
            $this->M_buku->simpan($info);
            $this->session->set_flashdata('pesan', 'Data Buku ditambahkan');
        	redirect('c_buku');
		}else{
			$this->load->view('v_index', $data);
		}
	}

	public function sunting($id)
	{
		
		$data['title'] = "Sunting Data Pengguna";
		if ($this->input->post('judul') !== null) {
			$idp=$this->input->post('id_buku');
			$info=array(
               	'judul'=>$this->input->post('judul'),
                'penulis'=>$this->input->post('penulis'),
                'penerbit'=>$this->input->post('penerbit'),
                'tahun'=>$this->input->post('tahun'),
                'halaman'=>$this->input->post('halaman'),
                'genre'=>$this->input->post('genre'),
                'sinopsis'=>$this->input->post('sinopsis')
                //foto nanti
	            );
			$this->M_buku->update($idp,$info);
			$this->session->set_flashdata('pesan', 'Data berhasil disunting');
			redirect('c_buku');
		}else{
			$data['id_buku'] = $id;
			$data['buku']=$this->M_buku->cek($id)->row_array();
			$this->load->view('v_index', $data);
		}
	}

	public function hapus()
	{
		$hapus=$this->input->post('id_buku');
    	$this->M_buku->hapus($hapus);
    	$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
    	redirect('c_buku');
	}
} 