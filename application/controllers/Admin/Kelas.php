<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller 
{

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
		$data['kelas'] = $this->Kelas_model->tampil();

		$this->load->view('template/admin/header');
		$this->load->view('admin/kelas/tampil', $data);
		$this->load->view('template/admin/footer');
	}

	public function tambah()
	{
		$input = $this->input->post();

		if($input)
		{
			$this->Kelas_model->tambah($input);
			redirect('admin/kelas','refresh');
		}

		$data['kategori'] = $this->Kategori_model->tampil();
		$this->load->view('template/admin/header');
		$this->load->view('admin/kelas/tambah', $data);
		$this->load->view('template/admin/footer');
	}

	public function edit($id)
	{
		$data['kategori'] 	= $this->Kategori_model->tampil();
		$data['kelas'] 		= $this->Kelas_model->detail($id);

		$input = $this->input->post();
		
		if($input)
		{
			$this->Kelas_model->edit($input, $id);
			redirect('admin/kelas','refresh'); 
		}

		$this->load->view('template/admin/header');
		$this->load->view('admin/kelas/edit', $data);
		$this->load->view('template/admin/footer');
	}

	public function hapus($id)
	{
		$this->Kelas_model->hapus($id);
		redirect('admin/kelas','refresh');
	}
	
}