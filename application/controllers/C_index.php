<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_index extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model(array('M_user','M_buku','M_transaksi'));
		$this->load->library('session');

        if(!$this->session->userdata('nama')){
            redirect('c_login');
        }
	}

	public function index()
	{
		$data['title'] = "Halaman Utama";
		$data['jumlahUser']=$this->M_user->getCount();
		$data['jumlahBuku']=$this->M_buku->getCount();
		$data['jumlahTrans']=$this->M_transaksi->getCount();
		$data['status1']=$this->M_transaksi->getCountStatus('1')->num_rows()+$this->M_transaksi->getCountStatus('3')->num_rows();
		$data['status2']=$this->M_transaksi->getCountStatus('2')->num_rows()+$this->M_transaksi->getCountStatus('4')->num_rows();
		$data['status5']=$this->M_transaksi->getCountStatus('5')->num_rows();
		$this->load->view('v_index', $data);
	}

    function logout(){
        $this->session->unset_userdata('nama');
        $this->session->sess_destroy();
        redirect('c_login');
    }

}