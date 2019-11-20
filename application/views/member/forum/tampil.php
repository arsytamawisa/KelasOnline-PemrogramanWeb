<header class="header-area"></header>	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<h1>Forum Web Koding</h1>
				<h5>
					Buka pintu ilmu pengetahuan dengan forum bermanfaat bersama member lain.
				</h5>
				<br>
				<a href="<?= base_url('forum/pertanyaan') ?>" class="btn btn-outline-dark">Saya mau bertanya</a>
				<a href="<?= base_url('forum/rules') ?>" class="btn btn-outline-dark">Baca aturan forum</a>
			</div>
		</div>

		<!-- Search & Filter -->
		<div class="row">
			<div class="col-md-8 mb-3">
				<div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-dark">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
				</div>			
			</div>
			<div class="col-md-4 mb-4">
				<select  class="custom-select">
					<option value="">Filter Kategori</option>
					<option value="">Semua Kategori</option>
					<?php foreach ($kategori as $key => $value): ?>
						<option value=""><?= $value['nama_kategori'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>

		<div class="row">
			<?php foreach ($forum as $key => $value): ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-v3">
						<span class="badge badge-dark"><?= $value['nama_kategori'] ?></span>

						<?php if ($value['status'] == "Sudah terjawab") : ?>
							<span class="pull-right"><span class="lnr lnr-checkmark-circle"></span></span>
						<?php endif ?>

						<a href="<?= base_url("forum/detail/$value[id_forum]") ?>">
							<h4><?= htmlentities($value['judul_forum']) ?></h4>
						</a>
						<span class="lnr lnr-bubble"></span> <?= hitung_komentar_forum($value['id_forum']) ?>
					</div>
				</div>					
			<?php endforeach ?>
		</div>
		
	</div>	
</section>
<!-- End feature Area -->	