<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model(array('M_user', 'M_kelas'));
		$this->load->library(array('form_validation', 'session'));
	}
	public function index()
	{
		$this->load->view('v_login');
	}


	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password','password', 'required|trim|xss_clean');

        if (!$this->form_validation->run()==false){
        	$this->session->set_flashdata('message', 'Username dan password harus diisi');
            redirect('c_login');
        }else{
        	$nama=$this->input->post('nama');
            $password=$this->input->post('password');
            $cek=$this->M_user->loginCheck($nama, $password);
            $dataUser=$this->M_user->loginCheck($nama, $password)->row_array();
            $kelas=$this->M_kelas->getId($dataUser['id_kelas'])->row_array();

            if($cek->num_rows()>0){
                //login berhasil, buat session
                $this->session->set_userdata('nama', $dataUser['nama']);
                $this->session->set_userdata('email', $dataUser['email']);
                $this->session->set_userdata('kelas', $kelas['nama_kelas']);
                $this->session->set_userdata('level', $dataUser['level']);
                $this->session->set_userdata('id', $dataUser['id_user']);
                redirect(site_url());
            }else{
                //login gagal
                $this->session->set_flashdata('message', 'Username atau password salah');
                redirect('c_login');
            }
        }
	}


}