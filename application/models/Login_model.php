<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login_admin($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$ambil = $this->db->get('admin');
		$cek = $ambil->num_rows();

		if($cek==1){
			$akun = $ambil->row_array();
			
			$this->session->set_userdata("admin",$akun);
			return 'berhasil';
		}
		else{
			return 'gagal';
		}
	}

	function login_user($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$ambil = $this->db->get('member');
		$cek = $ambil->num_rows();

		if($cek==1){
			$akun = $ambil->row_array();
			
			$this->session->set_userdata("member",$akun);
			return 'berhasil';
		}
		else{
			return 'gagal';
		}
	}
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */