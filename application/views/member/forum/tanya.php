<header class="header-area"></header>	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<br>
				<a href="<?= base_url('forum/rules') ?>" class="btn btn-outline-dark">Baca aturan forum</a>
				<a href="<?= base_url('forum') ?>" class="btn btn-outline-dark">Kembali ke forum</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature-v3">
					<h3 align="center">Pertanyaan</h3>
					<br>
					<form>
						<label>Judul Pertanyaan</label>
						<input type="text" class="form-control">
						<br>
						<label>Kategori</label>
						<select name="nama_kategori" class="form-control">
							<option value="">Pilih Kategori</option>
							<?php foreach ($kategori as $key => $value): ?>
								<option value="<?= $value['nama_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
							<?php endforeach ?>
						</select>
						<br>
						<label>Isi Pertanyaan</label>
						<textarea rows="7" class="form-control"></textarea>
						<br>
						<button type="submit" style="width:100%;margin-top:10px;" class="btn btn-dark">Posting</button>
					</form>
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- End feature Area -->