<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['mading'] = $this->Mading_model->limit();
		$data['forum'] 	= $this->Forum_model->limit();
		
		$this->load->view("template/admin/header");
		$this->load->view("admin/etc/dashboard", $data);
		$this->load->view("template/admin/footer");
	}

	public function pengaturan()
	{
		$login = $this->session->userdata('admin');
		$input = $this->input->post();

		if($input){

			if(sha1($input['password_lama']) == $login['password'])
			{

				if($input['password_baru'] == $input['password_konfirmasi'])
				{
					$this->Pengaturan_model->ubah_password_admin($input['password_baru'], $login['id_admin']);
					echo "<script> alert('Password berhasil diubah') </script>";
					redirect('admin/pengaturan','refresh');
				}
				else
				{
					echo "<script> alert('Password konfirmasi salah') </script>";
					redirect('admin/pengaturan','refresh');
				}
			}
			else
			{
				echo "<script> alert('Password lama salah') </script>";
				redirect('admin/pengaturan','refresh');
			}
		}

		$this->load->view("template/admin/header");
		$this->load->view("admin/etc/ganti_password");
		$this->load->view("template/admin/footer");
	}

	public function logout()
	{
		$this->session->unset_userdata('admin');
		redirect('admin/login','refresh');
	}

}
