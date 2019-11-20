<header class="header-area"></header>	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<h1>Mading Web Koding</h1>
				<h5>
					Karya karya member sekolah koding, dapatkan inspirasi dan feedback untuk proyekmu.
				</h5>
				<br>
				<a href="<?= base_url('mading/karya') ?>" class="btn btn-outline-dark">Ayo Bikin Karyamu</a>
			</div>
		</div>

		<!-- Search & Filter -->
		<div class="row">
			<div class="col-md-8 mb-3">
				<form action="<?= base_url('mading') ?>" method="post">		
					<div class="input-group">
						<input type="text" name="keyword" class="form-control" placeholder="Search..." autocomplete="off">
						<div class="input-group-append">
							<button type="submit" name="submit" class="btn btn-dark">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>			
				</form>
			</div>
			<div class="col-md-4 mb-4">
				<select class="custom-select">
					<option value="">Filter Kategori</option>
					<option value="">Semua Kategori</option>
					<?php foreach ($kategori as $key => $value): ?>
						<option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>

		<div class="row">
			<?php foreach ($mading as $key => $value): ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-v3">
						<a href="<?= base_url("mading/detail/$value[id_mading]") ?>">
							<h4><?= htmlentities($value['judul_mading']) ?></h4>
						</a>
						<p>Dipost oleh : <?= $value['nama_member'] ?></p>
						<i class="fa fa-clock-o" aria-hidden="true"> <?= tanggal_indo($value['tanggal']) ?></i>
					</div>
				</div>	
			<?php endforeach ?>
		</div>

	</div>	
</section>
<!-- End feature Area -->	