<header class="header-area"></header>	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature-v3">
					<h3 align="center">Karyaku</h3>
					<br>
					<form method="post">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<label>Judul Karya</label>
								<input name="judul_mading" type="text" class="form-control">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<label>Link Karya</label>
								<input name="link_mading" type="text" class="form-control">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<label>Keterangan</label>
								<textarea name="deskripsi_mading" class="form-control"></textarea>
							</div>
						</div>

						<?php $member = $this->session->userdata('member') ?>
						<input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
						<input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
						<br><br>
						
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<button type="submit" style="width:100%;margin-bottom:20px" class="btn btn-dark">Posting Karya</button>
							</div>
							<div class="col-lg-6 col-md-6">
								<a href="<?= base_url('mading') ?> " style="width:100%" class="btn btn-dark">Lihat Mading</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- End feature Area -->