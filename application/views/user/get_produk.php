<?php foreach ($produk as $data) { ?>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="">
                <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?> ">
                <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="<?= base_url() ?>/produk/detail-produk/<?= $data['kode_produk'] ?>"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="<?= base_url() ?>/produk/detail-produk/<?= $data['kode_produk'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#"><?= $data['nama_produk'] ?></a></h6>
                <h5>Rp <?= $data['harga_produk'] ?></h5>
            </div>
        </div>
    </div>
 <?php } ?>