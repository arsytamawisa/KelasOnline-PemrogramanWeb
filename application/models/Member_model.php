<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model 
{
	public function tampil()
	{
		return $this->db->get('member')->result_array();
	}
}