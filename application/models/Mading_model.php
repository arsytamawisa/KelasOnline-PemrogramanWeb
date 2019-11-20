<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mading_model extends CI_Model 
{
	public function tampil()
	{
		$this->db->join('Member', 'member.id_member = mading.id_member', 'left');
		return $this->db->get('mading')->result_array();
	}

	public function cari()
	{
		$this->db->like('judul_mading', $keyword);
		return $this->db->get('mading')->result_array();
	}

	public function limit()
	{
		$this->db->join('Member', 'member.id_member = mading.id_member', 'left');
		return $this->db->get('mading', 5)->result_array();
	}

	public function tambah($input)
	{
		$this->db->join('member', 'member.id_member = detail_mading.id_member', 'left');
		$this->db->join('mading', 'mading.id_mading = detail_mading.id_mading', 'left');
		$this->db->insert('mading', $input);
	}

	public function detail($id)
	{
		$this->db->join('member', 'mading.id_member = member.id_member', 'left');
		$this->db->where('id_mading', $id);
		return $this->db->get('mading')->row_array();	
	}

	public function komentar($id)
	{
		$this->db->order_by('id_detail_mading', 'asc');
		$this->db->join('member', 'member.id_member = detail_mading.id_member', 'left');
		$this->db->join('mading', 'mading.id_mading = detail_mading.id_mading', 'left');
		$this->db->where('detail_mading.id_mading', $id);
		return $this->db->get('detail_mading')->result_array();
	}

	public function tambah_komentar($input)
	{
		$this->db->insert('detail_mading', $input);
	}

	public function edit_komentar($input, $id_detail_mading)
	{
		$this->db->where('id_detail_mading', $id_detail_mading);
		$this->db->update('detail_mading', $input);
	}
	
	public function hapus_komentar($id_mading,$id_detail_mading)
	{
		$this->db->where('id_mading', $id_mading);
		$this->db->where('id_detail_mading', $id_detail_mading);
		$this->db->delete('detail_mading');
	}
}