
 <div id="al">
 	<small style="color: green">Vouhcer anda tersedia</small><br>
	<label for="jack">Dengan Nilai Rp. <?= $voucher['nilai_voucher']  ?></label>

	<form method="post" action="post_voucher">
		<input type="hidden" name="nilai_voucher" value="<?= $voucher['nilai_voucher'] ?>">
		<input type="hidden" name="kode_voucher" value="<?= $voucher['kode_voucher'] ?>">
		<input type="hidden" name="kode_produk" value="<?= $voucher['kode_produk'] ?>">
		<button type="submit" class="btn btn-primary">gunakan vouhcer</button>
	</form>
	 
 </div>
 


 
 