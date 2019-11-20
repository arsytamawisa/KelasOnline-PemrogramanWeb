<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin Sistem Informasi Orangtua</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/member/login/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/css/util.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/member/login/css/main.css">
	<!--===============================================================================================-->
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?= base_url('/') ?>">Koding Web</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('/') ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Kelas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php foreach ($kategori as $key => $value): ?>
						<a class="dropdown-item" href="<?= base_url('kelas/list/') ?><?= $value['nama_kategori'] ?>">
							<?= $value['nama_kategori'] ?>
						</a>
					<?php endforeach ?>
					</div>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href=" <?= base_url('mading') ?> ">Mading <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href=" <?= base_url('forum') ?> ">Forum <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-32" style="text-align:center"> Login Member</span>

					<span class="txt1 p-b-11"> Username </span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11"> Password </span>
					<div class="wrap-input100 m-b-12">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div>
							<a href="<?= base_url('daftar') ?>" class="txt3"> Belum punya akun? </a>
						</div>						
						<div>
							<a href="#" class="txt3"> Lupa password? </a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn w-full"> Login </button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/member/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/member/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/member/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/member/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/member/login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/member/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>assets/member/login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/member/login/vendoassets/login/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/member/login/js/main.js"></script>

</body>
</html>