<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'home';
$route['/'] 					= 'home';
$route['daftar'] 				= 'home/daftar';
$route['logout'] 				= 'home/logout';
$route['pemesanan'] 			= 'home/pemesanan';
$route['dashboard'] 			= 'home/dashboard';
$route['pengaturan'] 			= 'home/pengaturan';
$route['admin/logout'] 			= 'admin/dashboard/logout';
$route['admin/pengaturan'] 		= 'admin/dashboard/pengaturan';
$route['404_override'] 			= 'home/error_404';
$route['translate_uri_dashes'] 	= FALSE;
