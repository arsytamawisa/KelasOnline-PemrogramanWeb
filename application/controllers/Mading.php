<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mading extends CI_Controller 
{
	
	public function index()
	{
		$data['mading']		= $this->Mading_model->tampil();
		$data['kategori'] 	= $this->Kategori_model->tampil();

		$this->load->view('template/member/header', $data);
		$this->load->view('member/mading/tampil', $data);
		$this->load->view('template/member/footer');
	}

	public function cari()
	{
		$keyword = $this->input->post('keyword');    $siswa = $this->SiswaModel->search($keyword);
		$hasil = $this->load->view('view', array('siswa'=>$siswa), true);
		$callback = array('hasil' => $hasil);    
		echo json_encode($callback);
	}

	public function karya()
	{
		if(!$this->session->userdata('member') OR empty($this->session->userdata('member'))){
			redirect('login','refresh');
		}

		$input = $this->input->post();

		if($input)
		{
			$this->Mading_model->tambah($input);
			redirect('mading','refresh');
		}

		$data['kategori'] 	= $this->Kategori_model->tampil();

		$this->load->view('template/member/header', $data);
		$this->load->view('member/mading/karya');
		$this->load->view('template/member/footer');
	}


	public function hapus_komentar($id_mading, $id_detail_mading)
	{
		$this->Mading_model->hapus_komentar($id_mading,$id_detail_mading);
		redirect('mading/detail/'.$id_mading,'refresh');
	}


	public function detail($id)
	{
		$edit = $this->input->post('edit');
		$submit = $this->input->post('submit');
		$id_detail_mading = $this->input->post('id_detail_mading');

		$submitData = array(
			'id_mading' => $this->input->post('id_mading'),
			'id_member' => $this->input->post('id_member'),
			'komentar' 	=> $this->input->post('komentar')
		);

		$editData = array(
			'id_mading' => $this->input->post('id_mading'),
			'id_member' => $this->input->post('id_member'),
			'komentar' 	=> $this->input->post('komentar')
		);

		if( $submit !== NULL )
		{
			$this->Mading_model->tambah_komentar($submitData);
			redirect('mading/detail/'.$id,'refresh');
		}

		if( $edit !== NULL )
		{
			$this->Mading_model->edit_komentar($editData, $id_detail_mading);
			redirect('mading/detail/'.$id,'refresh');
		}

		$data['mading']		= $this->Mading_model->detail($id);
		$data['komentar'] 	= $this->Mading_model->komentar($id);
		$data['kategori'] 	= $this->Kategori_model->tampil();

		$this->load->view('template/member/header', $data);
		$this->load->view('member/mading/detail', $data);
		$this->load->view('template/member/footer');
	}

}
