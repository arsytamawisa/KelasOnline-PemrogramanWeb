
<script src="<?= base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendor/popper.js/umd/popper.min.js"> </script>
<script src="<?= base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="<?= base_url() ?>assets/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/front.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<script>
	$(document).ready(function(){
		$("select[name=bulan]").on('change',function(){
			var bulan = $(this).val();
			var id_kelas = document.getElementById('kelas').value;
			
			$.ajax({
				url:"<?php echo base_url("presensi/hasil") ?>",
				method:"POST",
				data:"id_detail_kelas="+id_kelas+"&bulan="+bulan,
				success:function(data){
					$("#absensi").html(data);
				}
			})
		})
	})
</script>


<script>
	$(document).ready(function(){
		$.ajax({
			url:"<?php echo base_url("presensi/hasil_presensi") ?>",
			success:function(data){
				$("#absensi").html(data);
			}
		})
	})
</script>


<script>
	$(document).ready(function(){
		$("select[name=semester]").on('change',function(){
			var semester = $(this).val();
			var id_detail_kelas = document.getElementById('id_detail_kelas').value;
			
			$.ajax({
				url:"<?php echo base_url("nilai/hasil") ?>",
				method:"POST",
				data:"id_detail_kelas="+id_detail_kelas+"&id_semester="+semester,
				success:function(data){
					$("#nilai").html(data);
				}
			})
		})
	})
</script>


<!-- <script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script> -->


<!-- Format Rupiah -->
<!-- <script>

	var harga = document.getElementById('harga');
	var harga_diskon = document.getElementById('harga_diskon');
	harga.addEventListener('keyup', function(e)
	{
		harga.value = formatRupiah(this.value);
	});

	harga.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
	});

	function formatRupiah(bilangan, prefix)
	{
		var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
		split = number_string.split(','),
		sisa  = split[0].length % 3,
		rupiah  = split[0].substr(0, sisa),
		ribuan  = split[0].substr(sisa).match(/\d{1,3}/gi);

		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}

	function limitCharacter(event)
	{
		key = event.which || event.keyCode;
    	if ( key != 188 // Comma
       		&& key != 8 // Backspace
       		&& key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
       		&& (key < 48 || key > 57) // Non digit
       		// Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
       	) {
    	event.preventDefault();
    	return false;
    	}
	}

</script> -->


<!-- Diskon -->
<script>

	$("#diskon").keyup(function(e){
		var harga  = parseInt($("#harga").val());
		var diskon  = parseInt($("#diskon").val());
		var total = harga - (harga*(diskon/100));
		$("#harga-diskon").val(total);
	});

	$("#harga").keyup(function(){
		var harga  = parseInt($("#harga").val());
		var diskon  = parseInt($("#diskon").val());
		var total = harga - (harga*(diskon/100));
		$("#harga-diskon").val(total);
	});

</script>

</body>
</html>