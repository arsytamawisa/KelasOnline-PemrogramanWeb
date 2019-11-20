<header class="header-area"></header>	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<h1><?= $detail['nama_kategori'] ?></h1>
				<p><?= $detail['deskripsi_kategori'] ?></p>
			</div>
		</div>
		<div class="row">

			<?php if(empty($kelas)) : ?>
				<div class="container">
					<h4 class="text-center">Oops, sepertinya konten belum tersedia.</h4>
					<br><br><br><br><br><br><br><br><br><br><br>
				</div>
			<?php endif ?>

			<?php foreach ($kelas as $key => $value): ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-v3">
						<a href="">
							<h4><?= $value['nama_kelas'] ?></h4>
						</a>
						<p><?= $value['deskripsi_kelas'] ?></p>

						<?php if($value['tipe_kelas'] == "Premium") : ?>
							<div class="row">
								<div class="col-md-12">					
									<i class="fa fa-lock pull-left" aria-hidden="true"> <?= $value['tipe_kelas'] ?></i> 
									<i class="fa fa fa-file pull-right" aria-hidden="true"> 23 materi</i>
								</div>
							</div>
						<?php endif ?>

						<?php if($value['tipe_kelas'] == "Free") : ?>
							<div class="row">
								<div class="col-md-12">					
									<i class="fa fa-check-square-o pull-left" aria-hidden="true"> <?= $value['tipe_kelas'] ?></i> 
									<i class="fa fa fa-file pull-right" aria-hidden="true"> 23 materi</i>
								</div>
							</div>
						<?php endif ?>

					</div>
				</div>	
			<?php endforeach ?>
		</div>
	</div>	
</section>
<!-- End feature Area -->	