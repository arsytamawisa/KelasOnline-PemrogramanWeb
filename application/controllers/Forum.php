<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller 
{

	public function index()
	{
		$data['forum'] 		= $this->Forum_model->tampil();
		$data['kategori'] 	= $this->Kategori_model->tampil();

		if($this->input->post('submit'))
		{
			$data['keyword'] = $this->input->post('submit');
		}
		else {
			$data['keyword'] = null;
		}

		$this->load->view('template/member/header', $data);
		$this->load->view('member/forum/tampil', $data);
		$this->load->view('template/member/footer');
	}


	public function pertanyaan()
	{
		if(!$this->session->userdata('member') OR empty($this->session->userdata('member')))
		{
			redirect('login','refresh');
		}

		$data['kategori'] 	= $this->Kategori_model->tampil();

		$this->load->view('template/member/header', $data);
		$this->load->view('member/forum/tanya');
		$this->load->view('template/member/footer');
	}


	public function detail($id)
	{
		$edit = $this->input->post('edit');
		$submit = $this->input->post('submit');
		$id_detail_forum = $this->input->post('id_detail_forum');

		$submitData = array(
			'id_forum' 	=> $this->input->post('id_forum'),
			'id_member' => $this->input->post('id_member'),
			'komentar' 	=> $this->input->post('komentar')
		);

		$editData = array(
			'id_forum' 	=> $this->input->post('id_forum'),
			'id_member' => $this->input->post('id_member'),
			'komentar' 	=> $this->input->post('komentar')
		);

		if( $submit !== NULL )
		{
			$this->Forum_model->tambah_komentar($submitData);
			redirect('forum/detail/'.$id,'refresh');
		}

		if( $edit !== NULL )
		{
			$this->Forum_model->edit_komentar($editData, $id_detail_forum);
			redirect('forum/detail/'.$id,'refresh');
		}

		$data['forum']		= $this->Forum_model->detail($id);
		$data['komentar'] 	= $this->Forum_model->komentar($id);
		$data['kategori'] 	= $this->Kategori_model->tampil();

		$this->load->view('template/member/header', $data);
		$this->load->view('member/forum/detail', $data);
		$this->load->view('template/member/footer');
	}


	public function rules()
	{
		$data['kategori'] 	= $this->Kategori_model->tampil();

		$this->load->view('template/member/header', $data);
		$this->load->view('member/forum/rules');
		$this->load->view('template/member/footer');
	}

	public function hapus_komentar($id_forum,$id_detail_forum)
	{
		$this->Forum_model->hapus_komentar($id_forum,$id_detail_forum);
		redirect('forum/detail/'.$id_forum,'refresh');
	}
	
}
