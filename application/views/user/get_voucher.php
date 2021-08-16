
 <div id="al">
 	<small style="color: green">Vouhcer anda tersedia</small><br>
	<label for="jack">Dengan Nilai Rp. <?= $voucher['nilai_voucher']  ?></label>

	<form method="post" action="ebunga/cek_voucher">
		<input type="text" name="nilai" value="<?= $voucher['nilai_voucher'] ?>">
		<input type="text" name="kd_voucher" value="<?= $voucher['kode_voucher'] ?>">
		<button type="submit" class="btn btn-primary">gunakan vouhcer</button>
	</form>
	 
 </div>
 


 
