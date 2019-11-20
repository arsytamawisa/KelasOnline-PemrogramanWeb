<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model 
{
	public function tampil()
	{
		$this->db->join('Kategori', 'kategori.id_kategori = kelas.id_kategori', 'left');
		return $this->db->get('kelas')->result_array();
	}

	public function tambah($input)
	{
		$this->db->insert('kelas', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('kelas');
	}

	public function detail($id)
	{
		$this->db->join('kategori', 'kelas.id_kategori = kategori.id_kategori', 'left');
		$this->db->where('id_kelas', $id);
		return $this->db->get('kelas')->row_array();
	}

	public function edit($input, $id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->update('kelas', $input);
	}
}