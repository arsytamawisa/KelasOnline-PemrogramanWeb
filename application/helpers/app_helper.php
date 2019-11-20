<?php 

function hitung_komentar_forum($id) 
{
	$CI =& get_instance();
	$CI->db->where('id_forum', $id);
	return $CI->db->get('detail_forum')->num_rows();
}

function hitung_komentar_mading($id) 
{
	$CI =& get_instance();
	$CI->db->where('id_mading', $id);
	return $CI->db->get('detail_mading')->num_rows();
}

function hitung_kelas($id) 
{
	$CI =& get_instance();
	$CI->db->where('id_kategori', $id);
	return $CI->db->get('kelas')->num_rows();
}

function hitung_mading($id) 
{
	$CI =& get_instance();
	$CI->db->where('id_mading', $id);
	return $CI->db->get('mading')->num_rows();
}

function hitung_forum($id) 
{
	$CI =& get_instance();
	$CI->db->where('id_forum', $id);
	return $CI->db->get('forum')->num_rows();
}

function hitung_kategori($id) 
{
	$CI =& get_instance();
	$CI->db->where('id_kategori', $id);
	return $CI->db->get('kategori')->num_rows();
}

function hitung_member($id) 
{
	$CI =& get_instance();
	$CI->db->where('id_member', $id);
	return $CI->db->get('member')->num_rows();
}

function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jumat',
		'Sabtu',
		'Minggu'
	);

	$bulan = array (1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$split    = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}