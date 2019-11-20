<!-- v1 -->
<!-- <header class="header-area"></header>	

<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature-v3">
					<h3 align="center">Ganti Password</h3>
					<br>
					<form method="post">
						<label>Password Lama</label>
						<input type="password" name="password_lama" class="form-control">
						<br>
						<label>Password Baru</label>
						<input type="password" name="password_baru" class="form-control">
						<br>
						<label>Konfirmasi Password</label>
						<input type="password" name="password_konfirmasi" class="form-control">
						<br>
						<button type="submit" style="width:100%;margin-top:10px" class="btn btn-dark">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>	
</section> -->
<!-- set_value('password) ?> -->


<!-- v2 -->
<link rel="stylesheet" href="<?= base_url('assets/member/css/daftar.css') ?> ">

<header class="header-area"></header>	

<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature-v3">
					<h3 align="center">Ganti Password</h3>
					<br><br>
					<form class="flp" method="post">
						<div class="row">
							<div class="col-md-12">
								<div>
									<input type="password" id="password_lama" name="password_lama" value="<?= set_value('password_lama') ?>">
									<label for="password_lama">Password Lama</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div>
									<input type="password" id="password_baru" name="password_baru" onChange="checkPasswordMatch();" onKeyUp="checkPasswordChar();" value="<?= set_value('password_baru') ?>">
									<label for="password_baru">Password Baru</label>
								</div>
							</div>
						</div>
						<div class="row" id="pop1">
							<div class="col-md-12">
								<div class="registrationFormAlert" id="divCheckPasswordChar"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div>
									<input type="password" id="password_konfirmasi" name="password_konfirmasi" value="<?= set_value('password_konfirmasi') ?>">
									<label for="password_konfirmasi">Password Konfirmasi</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" style="width:100%" class="btn btn-dark">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
</section>
