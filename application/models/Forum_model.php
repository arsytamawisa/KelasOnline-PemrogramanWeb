<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_model extends CI_Model 
{
	public function tampil()
	{
		$this->db->join('kategori', 'kategori.id_kategori = forum.id_kategori', 'left');
		$this->db->join('member', 'member.id_member = forum.id_member', 'left');
		return $this->db->get('forum')->result_array();
	}

	public function limit()
	{
		$this->db->join('Member', 'member.id_member = forum.id_member', 'left');
		return $this->db->get('forum', 5)->result_array();
	}

	public function detail($id)
	{
		$this->db->join('member', 'forum.id_member = member.id_member', 'left');
		$this->db->where('id_forum', $id);
		return $this->db->get('forum')->row_array();	
	}

	public function komentar($id)
	{
		$this->db->order_by('id_detail_forum', 'asc');
		$this->db->join('member', 'member.id_member = detail_forum.id_member', 'left');
		$this->db->join('forum', 'forum.id_forum = detail_forum.id_forum', 'left');
		$this->db->where('detail_forum.id_forum', $id);
		return $this->db->get('detail_forum')->result_array();
	}

	public function tambah_komentar($input)
	{
		$this->db->insert('detail_forum', $input);
	}

	public function edit_komentar($input, $id_detail_forum)
	{
		$this->db->where('id_detail_forum', $id_detail_forum);
		$this->db->update('detail_forum', $input);
	}

	public function hapus_komentar($id_forum, $id_detail_forum)
	{
		$this->db->where('id_forum', $id_forum);
		$this->db->where('id_detail_forum', $id_detail_forum);
		$this->db->delete('detail_forum');
	}
}