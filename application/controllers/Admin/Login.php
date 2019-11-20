<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function index()
	{
		$this->load->view("admin/etc/login");
		
		$input = $this->input->post();

		if($input)
		{
		 	$username = $input['username'];
		 	$password = sha1($input['password']);

		 	$cek = $this->Login_model->login_admin($username,$password);
		 	if($cek=="berhasil") {
		 		redirect('admin/dashboard','refresh');
		 	} else {
		 		redirect('admin/login','refresh');
		 	}
		}
	}

}