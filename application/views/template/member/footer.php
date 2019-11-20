	<!-- start footer Area -->		
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-10  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest!</p>
					</div>
				</div>						
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social!</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>							
			</div>
		</div>
	</footer>	
	<!-- End footer Area -->		

	<script src="<?= base_url('assets/member/') ?>js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?= base_url('assets/member/') ?>js/vendor/bootstrap.min.js"></script>			
	<script src="<?= base_url('assets/member/') ?>js/easing.min.js"></script>			
	<script src="<?= base_url('assets/member/') ?>js/hoverIntent.js"></script>
	<script src="<?= base_url('assets/member/') ?>js/superfish.min.js"></script>	
	<script src="<?= base_url('assets/member/') ?>js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url('assets/member/') ?>js/jquery.magnific-popup.min.js"></script>	
	<script src="<?= base_url('assets/member/') ?>js/owl.carousel.min.js"></script>			
	<script src="<?= base_url('assets/member/') ?>js/jquery.sticky.js"></script>
	<script src="<?= base_url('assets/member/') ?>js/jquery.nice-select.min.js"></script>	
	<script src="<?= base_url('assets/member/') ?>js/waypoints.min.js"></script>
	<script src="<?= base_url('assets/member/') ?>js/jquery.counterup.min.js"></script>					
	<script src="<?= base_url('assets/member/') ?>js/parallax.min.js"></script>		
	<script src="<?= base_url('assets/member/') ?>js/mail-script.js"></script>	
	<script src="<?= base_url('assets/member/') ?>js/main.js"></script>	
	<script src="<?= base_url('assets/member/') ?>js/daftar.js"></script>	
	<script src="<?= base_url('assets/member/') ?>js/sweetalert2.all.min.js"></script>	
	<script src="<?= base_url('assets/member/') ?>js/sweetalert.js"></script>	
	<script src="<?= base_url('assets/member/') ?>js/zebra-dialog.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
	
	<!-- Validation Password match and not null -->
	<script>
		
		$('#pop1').hide();

		function checkPasswordMatch() {
			$("#divCheckPasswordMatch").show();
			var password = $("#password_baru").val();
			var confirmPassword = $("#password_konfirmasi").val();

			if (confirmPassword.length !== 0)
				if (password != confirmPassword)
					$("#divCheckPasswordMatch").html("Password tidak sesuai!");
			else
				$("#divCheckPasswordMatch").hide();
		}

		function checkPasswordChar() {
			$('#pop1').show();
			var password = $("#password_baru").val();
			var confirmPassword = $("#password_konfirmasi").val();

			if (password.length < 7 )
				$("#divCheckPasswordChar").html("Password minimal 8 karakter!");
			else
				$('#pop1').hide();
		}

		$(document).ready(function () {
			$("#password_konfirmasi").keyup(checkPasswordMatch);
		});

	</script>

	<!-- Button disabled input empty -->
	<script>
		
	    function verify(){
			if(document.getElementById("komentar").value==="") { 
		        document.getElementById('submit').disabled = true; 
		    } 
		    else { 
		        document.getElementById('submit').disabled = false;
		    }
    	}

	</script>

</body>
</html>