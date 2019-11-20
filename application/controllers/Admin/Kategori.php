<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		if( !$this->session->userdata('admin') OR empty($this->session->userdata('admin')) )
		{
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		$data['kategori'] 	= $this->Kategori_model->tampil();

		$this->load->view("template/admin/header");
		$this->load->view("admin/kategori/tampil", $data);
		$this->load->view("template/admin/footer");
	}

	public function tambah()
	{
		$input = $this->input->post();

		if($input)
		{
			$this->Kategori_model->tambah($input);
			redirect('admin/kategori','refresh');
		}

		$this->load->view('template/admin/header');
		$this->load->view('admin/kategori/tambah');
		$this->load->view('template/admin/footer');
	}

	public function edit($id)
	{
		$input = $this->input->post();
		
		if($input)
		{
			$this->Kategori_model->edit($input, $id);
			redirect('admin/kategori','refresh'); 
		}

		$data['kategori'] = $this->Kategori_model->detail($id);
		$this->load->view('template/admin/header');
		$this->load->view('admin/kategori/edit', $data);
		$this->load->view('template/admin/footer');
	}

	public function hapus($id)
	{
		$this->Kategori_model->hapus($id);
		redirect('admin/kategori','refresh');
	}

}
