<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model 
{
	public function tampil()
	{
		return $this->db->get('kategori')->result_array();
	}

	public function tambah($input)
	{
		$config['upload_path'] = './assets/img/kelas/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size']  = '2000';
		
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload('gambar_kategori'))
		{
			$error = $this->upload->display_errors();
			echo "<script>alert('File yang anda upload ukuran terlalu besar atau format berbeda');</script>";
			redirect('admin/kategori/tambah','refresh');
		}
		else 
		{
			$input['gambar_kategori'] = $this->upload->data('file_name');
			$this->db->insert('kategori', $input);
		}
	}

	public function edit($input, $id)
	{
		$config['upload_path'] = './assets/img/kelas/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size']  = '2000';

		$this->load->library('upload', $config);
		
		$temp = $this->detail($id);

		if($this->upload->do_upload('gambar_kategori'))
		{
			if( file_exists("./assets/img/kelas/$temp[gambar_kategori]") )
			{
				unlink("./assets/img/kelas/$temp[gambar_kategori]");
			}

			$input['gambar_kategori'] = $this->upload->data('file_name');
		}

		$this->db->where('id_kategori', $id);
		$this->db->update('kategori', $input);
	}

	public function detail($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->get('kategori')->row_array();
	}

	public function hapus($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
	}

	public function kategori($id)
	{
		$this->db->join('kategori', 'kelas.id_kategori = kategori.id_kategori', 'left');
		$this->db->where('kategori.nama_kategori', $id);
		return $this->db->get('kelas')->result_array();	
	}

	public function detail_kategori($id)
	{
		$this->db->where('nama_kategori', $id);
		return $this->db->get('kategori')->row_array();	
	}
}