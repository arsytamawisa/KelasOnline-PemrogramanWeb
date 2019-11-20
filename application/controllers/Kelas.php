<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller 
{

	public function list($id)
	{
		$data['kelas'] 		= $this->Kategori_model->kategori($id);
		$data['kategori'] 	= $this->Kategori_model->tampil();
		$data['detail'] 	= $this->Kategori_model->detail_kategori($id);

		$this->load->view('template/member/header', $data);
		$this->load->view('member/kelas/tampil', $data);
		$this->load->view('template/member/footer');
	}
	
}