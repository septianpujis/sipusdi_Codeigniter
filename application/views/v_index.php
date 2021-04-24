<?php
	$data['actual_link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	if (isset($title)){
		$data['menu_title'] = $title;
	}else{
		$data['menu_title'] = "Halaman Sedang Diperbaiki";
	}

	if (!isset($q_cari))$q_cari = '';
	if (!isset($id_user))$id_user= '';	
	if (!isset($id_buku))$id_buku= '';
	if (!isset($id_trans))$id_trans= '';

	
	$this->load->view("templates/v_head");
	$this->load->view("templates/v_header");
	$this->load->view("templates/v_sidebar", $data);
	$this->load->view("templates/v_title", $data);

	switch ($data['actual_link']) {
		case site_url():
			$this->load->view("templates/v_content");
			break;
		case site_url('c_user'):
			$this->load->view("user/index");
			break;
		case site_url('c_user?query='.$q_cari):
			$this->load->view("user/index");
			break;
		case site_url('c_user/tambah'):
			$this->load->view("user/tambah");
			break;
		case site_url('c_user/sunting/'.$id_user):
			$this->load->view("user/sunting");
			break;
		case site_url('c_buku'):
			$this->load->view("buku/index");
			break;
		case site_url('c_buku?query='.$q_cari):
			$this->load->view("buku/index");
			break;
		case site_url('c_buku/tambah'):
			$this->load->view("buku/tambah");
			break;
		case site_url('c_buku/sunting/'.$id_buku):
			$this->load->view("buku/sunting");
			break;
		case site_url('c_transaksi'):
			$this->load->view("transaksi/index");
			break;
		case site_url('c_transaksi?query='.$q_cari):
			$this->load->view("transaksi/index");
			break;
		case site_url('c_transaksi/tambah'):
			$this->load->view("transaksi/tambah");
			break;
		case site_url('c_transaksi/sunting/'.$id_trans):
			$this->load->view("transaksi/sunting");
			break;
		default:
			$this->load->view("templates/v_kosong");
			break;
	}

	$this->load->view("templates/v_footer");
	echo "</body></html>";
?>