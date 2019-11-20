<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function index()
	{
		$data['kategori'] = $this->Kategori_model->tampil();
		$this->load->view("member/etc/login", $data);
		$input = $this->input->post();

		if($input)
		{
		 	$username = $input['username'];
		 	$password = sha1($input['password']);

		 	$cek = $this->Login_model->login_user($username,$password);
		 	if($cek=="berhasil") {
		 		redirect('','refresh');
		 	} else {
		 		redirect('login','refresh');
		 	}
		}
	}

}