<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

	public function index()
	{
		$data['kategori'] = $this->Kategori_model->tampil();
		$this->load->view('template/member/header', $data);
		$this->load->view('member/etc/home', $data);
		$this->load->view('template/member/footer');
	}


	public function daftar()
	{
		$data['kategori'] = $this->Kategori_model->tampil();
		$this->load->view("template/member/header");
		$this->load->view("member/etc/daftar", $data);
		$this->load->view("template/member/footer");
	}


	public function pengaturan()
	{
		$login = $this->session->userdata('member');
		$input = $this->input->post();

		if($input)
		{
			if ($input['password_lama'] != NULL AND $input['password_baru'] != NULL AND $input['password_konfirmasi'] != NULL) {

				if(sha1($input['password_lama']) == $login['password'])
				{
					if($input['password_baru'] == $input['password_konfirmasi'])
					{
						$this->Pengaturan_model->ubah_password_member($input['password_baru'], $login['id_member']);
						echo "<script> alert('Password Berhasil Diubah') </script>";
					}
					else
					{
						echo "<script> alert('Password Konfirmasi Salah') </script>";
					}
				}
				else
				{
					echo "<script> alert('Password Lama Salah') </script>";
				}
			}
			else
			{
				echo "<script> alert('Lengkapi Data Terlebih Dahulu') </script>";
			}
		}

		$data['kategori'] = $this->Kategori_model->tampil();
		$this->load->view("template/member/header", $data);
		$this->load->view("member/etc/ganti_password");
		$this->load->view("template/member/footer");
	}


	public function error_404()
	{
		$this->load->view('errors/error_404');
	}


	public function logout()
	{
		$this->session->unset_userdata('member');
		redirect('','refresh');
	}

}
