<div id="get">

<div class="section-title product__discount__title">
    <h2>Produk tersedia</h2>
</div>

<div id="filter" class="text-center mb-5">
     <button type="button" id="papan bunga" class="btn btn-outline-info mr-3" @click="all">All <i class="fas fa-list"></i> </button>

    <button type="button" id="papan bunga" class="btn btn-outline-primary mr-3" @click="papanbunga">Papan Bunga <i class="fas fa-chalkboard"></i> </button>

    <button type="button" class="btn btn-outline-warning mr-3"  @click="bunga">Bunga <i class="fas fa-spa"></i></button>

    <button type="button" class="btn btn-outline-success mr-3"@click="parcel">Parcel <i class="fas fa-shopping-bag"></i></button>


    <button type="button" class="btn btn-outline-danger mr-3" @click="cake">Cake <i class="fas fa-birthday-cake"></i></button>
   
</div>
<div id="filter" v-if="filter == 'all'">
    <div class="row">
         <?php foreach ($produk as $data) { ?>
            <div class="col-lg-4 mb-5">
                <div class="card shadow" style="">
                  <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
                    <p class="card-text"></p>
                    <a href="<?= base_url() ?>/produk/detail-produk/<?= $data['kode_produk'] ?>" class="btn btn-success btn-sm btn-lg btn-block">Belanja<i class="fas fa-shopping-bag"></i></a>
                  </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>


<div id="papanbunga" v-if="filter == 'papanbunga'">
    <?php 
        if ($papanbunga == false) {
            echo '<h3 class="text-center"> Produk Tidak tersedia </h3>' ;
        }else{
     ?>
     <div class="row">
   <?php foreach ($papanbunga as $data) { ?>

    <div class="col-lg-4 mb-5">
        <div class="card shadow" style="">
          <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
            <p class="card-text"></p>
            <a href="<?= base_url() ?>/produk/detail-produk/<?= $data['kode_produk'] ?>" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
          </div>
        </div>
    </div>
    
 <?php } ?>
</div>
<?php } ?>
</div>

<div id="parcel" v-if="filter == 'parcel'">
    <?php 
        if ($parcel == false) {
            echo '<h3 class="text-center"> Produk Tidak tersedia </h3>' ;
        }else{
     ?>
     <div class="row">
    <?php foreach ($parcel as $data) { ?>
    <div class="col-lg-4 mb-5">
        <div class="card shadow" style="">
          <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
            <p class="card-text"></p>
            <a href="<?= base_url() ?>/produk/detail-produk/<?= $data['kode_produk'] ?>" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
          </div>
        </div>
    </div>
 <?php } ?>
</div>
<?php } ?>
</div>

<div id="bunga" v-if="filter == 'bunga'">
    <?php 
        if ($bunga == false) {
            echo '<h3 class="text-center"> Produk Tidak tersedia </h3>' ;
        }else{
     ?>
     <div class="row">
    <?php foreach ($bunga as $data) { ?>
    <div class="col-lg-4 mb-5">
        <div class="card shadow" style="">
          <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
            <p class="card-text"></p>
            <a href="<?= base_url() ?>/produk/detail-produk/<?= $data['kode_produk'] ?>" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
          </div>
        </div>
    </div>
 <?php } ?>
 </div>
<?php } ?>
</div>

<div id="cake" v-if="filter == 'cake'">
    <?php 
        if ($cake == false) {
            echo '<h3 class="text-center"> Produk Tidak tersedia </h3>' ;
        }else{
     ?>
     <div class="row">
    <?php foreach ($cake as $data) { ?>
        <div class="col-lg-4 mb-5">
        <div class="card shadow" style="">
          <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
            <p class="card-text"></p>
            <a href="<?= base_url() ?>/produk/detail-produk/<?= $data['kode_produk'] ?>" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
          </div>
        </div>
    </div>
 <?php } ?>
 </div>
<?php } ?>
</div>


 </div>


  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <script>
        var app = new Vue({
              el: '#get',
              data: {
                filter: 'all',
                label : "All Product"
              },

              methods: {

                 all: function(){

                this.filter = 'all';
                this.label = 'All Product';
                        
                },


                papanbunga: function(){

                this.filter = 'papanbunga';
                 this.label = 'Papan Bunga';
                        
                },

                bunga: function(){

                this.filter = 'bunga';
                 this.label = 'Bunga';
                        
                },

                 parcel: function(){

                this.filter = 'parcel';
                this.label = 'Parcel';
                        
                },

                 cake: function(){

                this.filter = 'cake';
                this.label = 'Cake';
                        
                }



              }
            })
    </script>
