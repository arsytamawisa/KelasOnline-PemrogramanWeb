<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-start">
			<div class="banner-content col-lg-9">
				<h6 class="text-white">Selamat Datang di</h6>
				<h1 class="text-white">
					KodingWeb				
				</h1>
				<p class="pt-20 pb-20 text-white">
					Situs belajar online terkini terkece terngehee
				</p>
				<a href="<?= base_url('daftar') ?>" class="primary-btn text-uppercase">Daftar Akun</a>
			</div>											
		</div>
	</div>					
</section>
<!-- End banner Area -->	

<!-- Start service Area -->
<section class="service-area section-gap" id="service">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Mulai Belajar Website</h1>
					<p>Membuat website dari dasar, pastikan membacanya dan praktek dengan urut mulai dari awal.</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<?php foreach ($kategori as $key => $value): ?>
			<div class="col-lg-3">
				<div class="single-service-v2">
					<div class="thumb">
						<img class="img-fluid" src="<?= base_url("assets/img/kelas/$value[gambar_kategori]") ?>" alt="">
					</div>
					<div class="detail">
						<a href="<?= base_url("kelas/list/$value[nama_kategori]") ?>">
							<h4 align="center"><?= $value['nama_kategori'] ?></h4>
						</a>
						<p align="justify"><?= $value['deskripsi_kategori'] ?></p>
					</div>
				</div>
			</div>											
			<?php endforeach ?>
		</div>
	</div>	
</section>
<!-- End service Area -->