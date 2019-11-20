<?php $member = $this->session->userdata('member') ?>

<header class="header-area"></header>	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature-v2">
					<span class="badge badge-light mr-1"><?= $forum['nama_member'] ?></span>
					<span class="badge badge-light"><?= tanggal_indo($forum['tanggal']) ?></span>
					<a href="">
						<h4><?= htmlentities($forum['judul_forum']) ?></h4>
					</a>
					<p><?= htmlentities($forum['deskripsi_forum']) ?></p>
					<span class="badge badge-light"><?= $forum['status'] ?></span>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4><?= hitung_komentar_forum($forum['id_forum']) ?> Jawaban</h4>
				<br>
			</div>
		</div>

		<div class="row">
			<?php foreach ($komentar as $key => $value): ?>
				<div class="col-lg-12 col-md-12">
					<div class="single-feature-v4">
						<a href="">
							<h4><?= $value['nama_member'] ?></h4>
						</a>
						<p><?= htmlentities($value['komentar']) ?></p>
						<?php if($value['nama_member'] == $member['nama_member'] ): ?>
							<p>
								<form action="<?= base_url("forum/hapus_komentar/$forum[id_forum]/$value[id_detail_forum]") ?>">
									<div class="hapus">
										<button type="submit" onclick="return confirm('Komentar ingin dihapus?')" class="btn btn-default pull-right mr-2">
											<i class="fa fa-trash-o pull-right"> Hapus </i>
										</button>
									</div>
									<div class="edit">
										<button type="button" id="modalEdit" data-toggle="modal" data-target="#<?= $key ?>" class="btn btn-default mr-3 pull-right">
											<i class="fa fa-pencil-square-o pull-right"> Edit </i>
										</button>
									</div>
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
				<input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
				<input type="hidden" name="id_forum" value="<?= $forum['id_forum'] ?>">
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
							<i class="fa fa-paper-plane"></i>&nbsp; Submit Komentar
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
					<a style="width:100%" class="btn btn-dark pull-right" href="<?= base_url('forum') ?>">
						<i class="fa fa-arrow-left"></i>&nbsp; Lihat Mading
					</a>
				</div>
			</div>
		</form>
	</div>	
</section>
<!-- End feature Area -->


<!-- Modal -->
<?php foreach ($komentar as $key => $value): ?>
	<div class="modal fade" id="<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="container">
						<div class="row justify-content-center">
							<h5 class="modal-title">Edit Komentar</h5>
						</div>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span>&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post">
						<input type="hidden" name="id_detail_forum" value="<?= $value['id_detail_forum'] ?>">
						<input type="hidden" name="id_forum" value="<?= $value['id_forum'] ?>">
						<input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
						<div class="col-lg-12 col-md-12">
							<textarea name="komentar" rows="10" class="form-control"><?= $value['komentar'] ?></textarea>
						</div>
						<div class="modal-footer">
							<button name="edit" type="submit" class="btn btn-primary">Simpan</button>
							<button class="btn btn-danger" data-dismiss="modal">Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>