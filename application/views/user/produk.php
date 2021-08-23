<section class="breadcrumb-section set-bg" data-setbg="<?= base_url() ?>assets_user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Produk ebunga</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="margin-top: 30px;" >
        <div class="container">

            <h4 class="mb-4 text-center"><strong>Cari produk berdasarkan kelurahan</strong></h4>
            <div class="row">

                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <select class="form-control mt-3" id="prov">
                                <option>-- Pilih Provinsi --</option>
                                <?php foreach ($prov as $data) { ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                         <div class="col-sm-6 mt-3">
                            <select class="form-control" id="kab">
                                <option>-- Pilih Kabupaten --</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <select class="form-control" id="kec">
                                <option>-- Pilih Kecamatan --</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <select class="form-control" id="kel">
                                <option>-- Pilih Kelurahan --</option>
                            </select>
                        </div>


                    </div>

                </div>
            </div>
            <hr>
        </div>



    </section> 

  <!--   <div id="loading"> -->
        <h2 id="loading" class="text-center" style="display: none"><i class="fas fa-spinner fa-spin"></i> Menunggu..</h2>
<!--     </div> -->

     <section class="product spad" id="app">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Kategori Produk</h4>
                            <ul>
                                <li><a href="#">Papan Bunga</a></li>
                                <li><a href="#">Papan Bunga Single</a></li>
                                <li><a href="#">Buket Sneck</a></li>
                                <li><a href="#">Buket Uang</a></li>
                                <li><a href="#">Buket Bunga</a></li>
                                <li><a href="#">Bunga Meja</a></li>
                                <li><a href="#">Parcel</a></li>
                                <li><a href="#">Cake</a></li>
                               
                            </ul>
                        </div>


                        
                        
                       
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Produk Terlaris</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?= base_url() ?>assets_user/img/product/pr1.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Buket B</h6>
                                                <span>Rp 200.00o</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?= base_url() ?>assets_user/img/product/pb1.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Papan Bunga</h6>
                                                <span>Rp 300.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?= base_url() ?>assets_user/img/product/pr3.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Buket A</h6>
                                                <span>Rp 100.000</span>
                                            </div>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-7" id="produk">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>{{label}}</h2>
                        </div>

                        
                            
                        <div id="filter" class="text-center mb-5">
                             <button type="button" id="papan bunga" class="btn btn-outline-info mr-3" @click="all">All <i class="fas fa-chalkboard"></i> </button>

                            <button type="button" id="papan bunga" class="btn btn-outline-primary mr-3" @click="papanbunga">Papan Bunga <i class="fas fa-chalkboard"></i> </button>

                            <button type="button" class="btn btn-outline-warning mr-3"  @click="bunga">Bunga <i class="fas fa-spa"></i></button>

                            <button type="button" class="btn btn-outline-success mr-3"@click="parcel">Parcel <i class="fas fa-shopping-bag"></i></button>


                            <button type="button" class="btn btn-outline-danger mr-3" @click="cake">Cake <i class="fas fa-birthday-cake"></i></button>
                           
                        </div>

                        <div class="row" v-if="filter == 'all'">
                            
                                <?php foreach ($produk as $data) { ?>
                                <div class="col-lg-4 mb-5">
                                    <div class="card shadow" style="">
                                      <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
                                        <p class="card-text"></p>
                                        <a href="#" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
                                      </div>
                                    </div>
                                </div>

                                <?php } ?>
                
                        </div>

                        <div class="row" v-if="filter == 'parcel'">
                            
                                <?php foreach ($parcel as $data) { ?>
                                <div class="col-lg-4 mb-5">
                                    <div class="card shadow" style="">
                                      <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
                                        <p class="card-text"></p>
                                        <a href="#" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
                                      </div>
                                    </div>
                                </div>

                                <?php } ?>
                
                        </div>


                        <div class="row" v-if="filter == 'papanbunga'">
                            
                               <?php foreach ($papanbunga as $data) { ?>
                                <div class="col-lg-4 mb-5">
                                    <div class="card shadow" style="">
                                      <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
                                        <p class="card-text"></p>
                                        <a href="#" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
                                      </div>
                                    </div>
                                </div>

                                <?php } ?>
                
                        </div>

                         <div class="row" v-if="filter == 'bunga'">
                            
                               <?php foreach ($bunga as $data) { ?>
                                <div class="col-lg-4 mb-5">
                                    <div class="card shadow" style="">
                                      <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
                                        <p class="card-text"></p>
                                        <a href="#" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
                                      </div>
                                    </div>
                                </div>

                                <?php } ?>
                
                        </div>

                         <div class="row" v-if="filter == 'cake'">
                            
                                <?php foreach ($cake as $data) { ?>
                                <div class="col-lg-4 mb-5">
                                    <div class="card shadow" style="">
                                      <img src="<?= base_url() ?>assets_user/img/product/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title text-center"><strong><?= $data['nama_produk'] ?></strong></h5>
                                        <p class="card-text"></p>
                                        <a href="#" class="btn btn-success btn-sm btn-lg btn-block">Belanja <i class="fas fa-shopping-bag"></i></a>
                                      </div>
                                    </div>
                                </div>

                                <?php } ?>
                
                        </div>

                        

                    </div>
                    
<!-- 
                    <div class="row" id="produk">
                        
                            
                        
                        
                    </div> -->
                    <!-- <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <script>
        var app = new Vue({
              el: '#app',
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







