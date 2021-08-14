<section class="breadcrumb-section set-bg" data-setbg="<?= base_url() ?>assets_user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?= $detail['nama_produk'] ?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="<?= base_url() ?>assets_user/img/product/<?= $detail['gambar'] ?> " alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel owl-loaded owl-drag">
                            
                            
                            
                            
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-525px, 0px, 0px); transition: all 1.2s ease 0s; width: 1050px;"><div class="owl-item cloned" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item cloned" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div><div class="owl-item" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item active" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item active" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div><div class="owl-item cloned active" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item cloned active" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 67.5px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?= $detail['nama_produk'] ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">Rp <?= $detail['harga_produk']?></div>
                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                            vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                            quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                        <div id="app">
                        <form method="post" action="<?= base_url('ebunga/keranjang') ?>">
                          
                          <section v-if="step == 1">
                            <h3>Step 1</h3>

                            <div class="product__details__quantity mb-3">
                                <label>Jumlah Pesanan</label>
                            <div class="quantity">
                                <div class="pro-qty"><span class="dec qtybtn">-</span>
                                    <input type="text" v-model="jumlah">
                                <span class="inc qtybtn">+</span></div>
                            </div>
                            </div>

                             <div class="form-group">
                                <label>Tulisan Pada Papan Bunga</label>
                                <textarea class="form-control" name="tulisan_papanbunga" v-model="tulisan_papanbunga"></textarea>
                                <small id="emailHelp" class="form-text text-muted">Mohon diisi form ini agar pesanan anda dapat diproses</small>
                              </div>

                              <div class="form-group">
                                <label>Catatan</label>
                                <textarea class="form-control" name="tulisan_papanbunga" v-model="catatan"></textarea>
                                <small id="emailHelp" class="form-text text-muted">Mohon diisi form ini agar pesanan anda dapat diproses</small>
                              </div>

                              
                              
                          </section>

                          <section v-if="step == 2">
                              <h3>Step 2</h3>

                              
                              <div class="form-group">
                                <label>Nama Penerima</label>
                                <input type="text" name="nama_penerima" class="form-control" v-model="nama_penerima">
                                <small id="emailHelp" class="form-text text-muted">Mohon diisi form ini agar pesanan anda dapat diproses</small>
                              </div>

                              <div class="form-group">
                                <label>No Telp Penerima</label>
                                <input type="number" name="nohp" class="form-control" v-model="nohp">
                                <small id="emailHelp" class="form-text text-muted">Mohon diisi form ini agar pesanan anda dapat diproses</small>
                              </div>


                          </section>

                          <section v-if="step == 3">
                              <h3>Step 3</h3>
                              <h2>Kartu Ucapan</h2>
                              <hr>

                               <div class="form-group">
                                <label>Tulisan Pada Kartu Ucapan</label>
                                <textarea class="form-control" name="text_ucapan" v-model="text_ucapan" placeholder="Happy Birtday (max 50 karakter)"></textarea>
                                <small id="emailHelp" class="form-text text-muted">Mohon diisi form ini agar pesanan anda dapat diproses</small>
                              </div>

                              <div class="form-group">
                                <label>Dari</label>
                                <input type="text" name="dari" class="form-control" v-model="dari" placeholder="Dari Jhon">
                                <small id="emailHelp" class="form-text text-muted">Mohon diisi form ini agar pesanan anda dapat diproses</small>
                              </div>
                          </section>

                            <button v-if="step == 1" type="submit" @click.prevent="nextStep" class="btn btn-success"><i class="fa fa-arrow-right"></i> Next</button>

                            <button v-if="step != 1 " @click.prevent="prevtStep" class="btn btn-success"><i class="fa fa-arrow-left"></i> Prev Next</button>

                            <button v-if="step == 2" type="submit" @click.prevent="nextStep" class="btn btn-success"><i class="fa fa-arrow-right"></i>  Next</button>


               <!--              input keranjang -->

                             <input type="hidden" name="kode_produk" class="form-control" value="<?= $detail['kode_produk'] ?>">

                              <input type="hidden" name="harga" class="form-control" value="<?= $detail['harga_produk'] ?>">

                             <input type="hidden" name="jumlah" class="form-control" v-model="jumlah">
                            <input type="hidden" name="tulisan_papanbunga" class="form-control" v-model="tulisan_papanbunga">
                            <input type="hidden" name="catatan" class="form-control" v-model="catatan">
                            <input type="hidden" name="nama_penerima" class="form-control" v-model="nama_penerima">

                            <input type="hidden" name="nohp" class="form-control" v-model="nohp">

                            <input type="hidden" name="text_ucapan" class="form-control" v-model="text_ucapan">
                            <input type="hidden" name="dari" class="form-control" v-model="dari">

                            
                             <button v-if="step == 3" type="submit"  class="btn btn-success"><i class="fa fa-shopping-cart"></i>  ADD TO CARD</button>

                            
                        
                        </form>
                        </div>


                        
                        
                       
                       <!--  <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> -->
                        <ul>
                            <li><b>Ketersedian</b> <span>Tersdia</span></li>
                            <li><b>Pengiriman</b> <span>01 day shipping. <samp>Gratis Ongkir</samp></span></li>
                           <!--  <li><b>Weight</b> <span>0.5 kg</span></li> -->
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <script>
        var app = new Vue({
          el: '#app',
          data: {
            message: 'Hello Vue!',
            step : 1,
            jumlah : 1,
            tulisan_papanbunga: '',
            catatan : '',
            nama_penerima: '',
            nohp : '',
            text_ucapan : '',
            dari : '',

          },
          methods : {
            nextStep: function(){
                this.step++;
            },

            prevtStep: function(){
                this.step--;
            }
          }
        })
    </script>

   

    




