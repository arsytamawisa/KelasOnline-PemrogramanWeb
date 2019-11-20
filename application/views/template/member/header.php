<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>KodingWeb</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/linearicons.css">
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/nice-select.css">					
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/main.css">
	<link rel="stylesheet" href="<?= base_url('assets/member/') ?>css/zebra-dialog/flat/zebra_dialog.min.css">
</head>

<body>

	<header id="header" id="home">
		<p></p>
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<span></span>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="<?= base_url('/') ?>">Home</a></li>
						<li class="menu-has-children"><a href="#">Kelas</a>
							<ul>
								<?php foreach ($kategori as $key => $value): ?>
									<li><a href="<?= base_url('kelas/list/') ?><?= $value['nama_kategori'] ?>"> <?= $value['nama_kategori'] ?></a></li>
								<?php endforeach ?>
							</ul>
						</li>	
						<li><a href="<?= base_url('mading') ?>">Mading</a></li>
						<li><a href="<?= base_url('forum') ?>">Forum</a></li>
						
						<?php if(!$this->session->userdata('member') OR empty($this->session->userdata('member'))): ?>
							<li><a href="<?= base_url('login') ?>">Login</a></li>	        
						<?php endif ?>

						<?php if($this->session->userdata('member')): ?>
							<li class="menu-has-children"><a href="#">Profil</a>
								<ul>
									<li><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
									<li><a href="<?= base_url('pemesanan') ?>">Pemesanan</a></li>
									<li><a href="<?= base_url('pengaturan') ?>">Ganti Password</a></li>
									<li><a href="<?= base_url('logout') ?>">Logout</a></li>
								</ul>
							</li>
						<?php endif ?>	
						  
					</ul>
				</nav>	    		
			</div>
		</div>
	</header>