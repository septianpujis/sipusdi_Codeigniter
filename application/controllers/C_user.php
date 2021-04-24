<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_user extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model(array('M_kelas','M_user'));
		$this->load->library(array('session', 'form_validation','upload'));

        if(!$this->session->userdata('nama')){
            redirect('c_login');
        }
	}

	public function index()
	{
		if ($this->input->get('query') !== null){
			$data['q_cari']=$this->input->get('query');
			$data['user']=$this->M_user->cari($data['q_cari'])->result();
			$count=$this->M_user->cari($data['q_cari']);
			$data['title'] = "Hasil Pencarian Pengguna";
			$this->session->set_flashdata('pesan', 'Hasil Pencarian \''.$data['q_cari'].'\', Ditemukan '.$count->num_rows().' data');
		}else{
			$data['user']=$this->M_user->get()->result();
			$data['title'] = "Data Pengguna";
		}
		$data['kelas']=$this->M_kelas->get()->result();
		$data['jumlah']=$this->M_user->getCount();
		$this->load->view('v_index', $data);
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data Pengguna";
		if ($this->input->post('nomor') !== null){
			$nomor=$this->input->post('nomor');
            $cek=$this->M_user->checkDouble($nomor);
            if($cek->num_rows()>0){
                $this->session->set_flashdata('pesan', 'NIS / NIP Sudah digunakan');
                redirect('c_user');
            }else{
                //config upload img
                $config['upload_path']='./assets/img/user/';
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
                    'nomor_induk'=>$this->input->post('nomor'),
                    'nama'=>$this->input->post('nama'),
                    'level'=>$this->input->post('level'),
                    'id_kelas'=>$this->input->post('id_kelas'),
                    'no_telp'=>$this->input->post('no_telp'),
                    'email'=>$this->input->post('email'),
                    'password'=>$this->input->post('password'),
                    //foto nanti
                );
                $this->M_user->simpan($info);
                $this->session->set_flashdata('pesan', 'Data Anggota ditambahkan');
            	redirect('c_user');

            }			
		}else{			
			$data['kelas']=$this->M_kelas->get()->result();
			$this->load->view('v_index', $data);
		}
	}

	public function sunting($id)
	{
		
		$data['title'] = "Sunting Data Pengguna";
		if ($this->input->post('nomor') !== null) {
			$idp=$this->input->post('id_user');
			$info=array(
	               'nomor_induk'=>$this->input->post('nomor'),
	               'nama'=>$this->input->post('nama'),
	               'level'=>$this->input->post('level'),
	               'id_kelas'=>$this->input->post('id_kelas'),
	               'no_telp'=>$this->input->post('no_telp'),
	               'email'=>$this->input->post('email'),
	               'password'=>$this->input->post('password'),
	               //foto nanti
	            );
			$this->M_user->update($idp,$info);
			$this->session->set_flashdata('pesan', 'Data berhasil disunting');
			redirect('c_user');
		}else{
			$data['kelas']=$this->M_kelas->get()->result();
			$data['id_user'] = $id;
			$data['user']=$this->M_user->cek($id)->row_array();
			$this->load->view('v_index', $data);
		}
	}

	public function hapus()
	{
		$hapus=$this->input->post('id_user');
    	$this->M_user->hapus($hapus);
    	$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
    	redirect('c_user');
	}

}