<?php $member = $this->session->userdata('member') ?>

<header class="header-area"></header>	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature-v2">
					<span class="badge badge-light"><?= htmlentities($mading['nama_member']) ?></span>
					<a href="">
						<h4><?= htmlentities($mading['judul_mading']) ?></h4>
					</a>
					<p><?= htmlentities($mading['deskripsi_mading']) ?></p>
					<span class="badge badge-light"><?= tanggal_indo($mading['tanggal']) ?></span>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4><?= hitung_komentar_mading($mading['id_mading']) ?> Jawaban</h4>
				<br>
			</div>
		</div>
		
		<div class="row">
			<?php foreach ($komentar as $key => $value): ?>
				<div class="col-lg-12 col-md-12">
					<div class="single-feature-v3">
						<a href="">
							<h4><?= $value['nama_member'] ?></h4>
						</a>
						<p><?= htmlentities($value['komentar']) ?></p>
						<br>
						<?php if($value['nama_member'] == $member['nama_member'] ): ?>
							<p>
								<form action=" <?= base_url("mading/hapus_komentar/$mading[id_mading]/$value[id_detail_mading]")?> ">
									<button type="submit" class="btn btn-default pull-right mr-2">
										<i class="fa fa-trash-o pull-right" aria-hidden="true"> Hapus </i>
									</button>
									<button type="button" id="modalEdit" data-toggle="modal" data-target="#<?= $key ?>" class="btn btn-default mr-3 pull-right">
										<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"> Edit </i>
									</button>
								</form>
							</p>
						<?php endif ?>
					</div>
				</div>
			<?php endforeach ?>
		</div>

		<?php if(isset($member)) : ?>
			<div class="row">
				<div class="col-md-12">
					<h4>Komentar</h4>
					<br>
				</div>
			</div>
			<form method="post">
				<input type="hidden" name="id_member" value="<?= $member['id_member'] ?> ">
				<input type="hidden" name="id_mading" value="<?= $mading['id_mading'] ?> ">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<textarea name="komentar" id="komentar" onkeyup="verify()" placeholder="Ketik komentar anda disini. . ." class="form-control" rows="10"></textarea>
					</div>
				</div>
			<?php endif ?>
			<br>
			<div class="row">
				<?php if(isset($member)) { ?>
					<div class="col-lg-6 col-md-6">
						<button style="width:100%;margin-bottom:20px" name="submit" id="submit" disabled class="btn btn-dark">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Submit Komentar
						</button>
					</div>
				<?php } else { ?>
					<div class="col-lg-6 col-md-6">
						<a href="<?= base_url('login') ?>" class="btn btn-dark" style="width:100%;margin-bottom:20px">
							<i class="fa fa-sign-in"></i>&nbsp; Login untuk komentar
						</a>
					</div>
				<?php } ?>
				<div class="col-lg-6 col-md-6">
					<a style="width: 100%" class="btn btn-dark pull-right" href="<?= base_url('mading') ?>">
						<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp; Lihat Mading
					</a>
				</div>
			</div>
		</form>
	</div>	
</section>
<!-- End feature Area -->


<!-- Modal -->
<?php foreach ($komentar as $key => $value): ?>
	<div class="modal fade" id="<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="container">
						<div class="row justify-content-center">
							<h5 class="modal-title">Edit Komentar</h5>
						</div>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post">
						<input type="hidden" name="id_detail_mading" value="<?= $value['id_detail_mading'] ?>">
						<input type="hidden" name="id_mading" value="<?= $value['id_mading'] ?>">
						<input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
						<div class="col-lg-12 col-md-12">
							<textarea name="komentar" rows="10" class="form-control"><?= $value['komentar'] ?></textarea>
						</div>
						<div class="modal-footer">
							<button type="submit" name="edit" class="btn btn-primary">Simpan</button>
							<button class="btn btn-danger" data-dismiss="modal">Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>