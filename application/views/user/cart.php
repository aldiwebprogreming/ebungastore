<section class="breadcrumb-section set-bg" data-setbg="<?= base_url() ?>assets_user/img/breadcrumb.jpg" style="background-image: url(&quot;img/breadcrumb.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="checkout spad">
        <div class="container">
            
            <div class="checkout__form">
                <h4>Billing Details</h4>
               
                    <div class="row">
                        


                        <?php 
                            if ($this->cart->contents() == null) { ?>
                                <div class="col-lg-12 col-md-6">
                                <center>                                
                                    <img src="<?= base_url() ?>assets_user/img/notfount/keranjang.png" style="height: 400px;">
                                <h3><strong> Keranjang Belanja Anda Tidak Ada</strong>
                                </h3>
                                <a class="badge btn-success mt-3" href="<?= base_url() ?>produk/papan-bunga"><i class="fa fa-shopping-bag"></i> Belanja Sekarang</a>
                                </center>

                                
                           <?php } else {  ?> 

                            <div class="col-lg-8 col-md-6">
                        

                            <div class="row">
                                <?php foreach ($this->cart->contents() as $cart) { ?>

                                <div class="col-sm-3">
                                    
                                    <img class="shadow" src="<?= base_url() ?>assets_user/img/product/<?= $cart['gambar_produk'] ?>">
                                    <center>
                                    <a href="<?= base_url() ?>ebunga/hapus_keranjang?id=<?= $cart['rowid'] ?>" class="badge btn-danger mt-2"><i class="fa fa-trash"></i> Hapus Keranjang</a>
                                    </center>
                                </div>
                                <div class="col-sm-9">
                                    <ul class="list-group shadow">
                                      <li class="list-group-item bg-success" aria-current="true"><h3 style="color:white;"><?= $cart['name'] ?></h3></li>
                                      <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Jumlah</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['qty'] ?></p>
                                      </li>

                                      <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Harga</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['price'] ?></p>
                                      </li>

                                      <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Nama Penerima</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['nama_penerima'] ?></p>
                                      </li>

                                      <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>No Telp</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['nohp'] ?></p>
                                      </li>

                                      <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Tulisan Papan Bunga</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['tulisan_papanbunga'] ?></p>
                                      </li>

                                      <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Catatan</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['catatan'] ?></p>
                                      </li>

                                      <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Text Ucapan</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['text_ucapan'] ?></p>
                                      </li>

                                      <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Dari</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['dari'] ?></p>
                                      </li>
                                       <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Harga 2</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['price2'] ?></p>
                                      </li>

                                      <!--  <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Sisa bayar</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['sisa_bayar'] ?></p>
                                      </li>
                                       <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1"><strong>Sisa Vocuher</strong></h5>
                                         
                                        </div>
                                        <p class="mb-1"><?= $cart['sisa_voucher'] ?></p>
                                      </li> -->
                                    </ul>
                                </div>

                                <?php } ?>

                            </div>
                           
                          
                            
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order shadow">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Produk <span>Harga</span></div>
                                <ul>
                                    <li><?= $cart['name'] ?> <span>Rp <?= $cart['price'] ?></span></li>
                                </ul>

                                <hr>

                                <div class="form-group" id="app">

                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Bayar dengan voucher?
                                        <input type="checkbox" id="acc-or" v-model="click">
                                        <span class="checkmark"></span>

                                    </label>
                                </div>


                            
                                <div id="cek2">
                                  <?php 
                                    if ($this->input->get('pesan') == 1) {
                                      echo '<small class="text-primary">Voucher anda berhasil digunkan.masukan voucher anda lagi untuk melunasi produk ini.</small>';
                                    }elseif ($this->input->get('pesan') == 2) {
                                      echo '<small class="text-success">Voucher anda berhasil digunakan.</small>';
                                    }else{
                                      echo "";
                                    }
                                   ?>
                                 
                                </div>

                                  <div v-if='click == true'>
                                  <label>Masukan Kode Voucher</label><br>
                                  <small>Sisa yang anda harus bayar adalah Rp.<?= $cart['sisa_bayar'] ?></small>
                                  
                                  <?php if ($cart['price2'] <= 0) { ?>
                                     <input type="text" name="voucher" class="form-control"placeholder="_ _ _ _ _ _ _" style="text-align: center;" disabled="">
                                   <?php }else{ ?>

                                  <input type="text" name="voucher" class="form-control" v-model="voucher" placeholder="_ _ _ _ _ _ _" style="text-align: center;">
                                <?php } ?>
                                  

                                  <center>
                                    <div id="cek" v-if="cek() == 8">
                                    <div v-if="cek() == 8">
                                    <div class="load spinner-border text-success mt-3" role="status">
                                      <span class="sr-only">Loading...</span>

                                    </div>
                                  </div>
                                    <input type="submit" @click.prevent="klik()" name="kirim" class="btn btn-primary" id="klik" style="display: none">
                                <!--   </form> -->
                                  </div>
                                  </div>

                                  
                               
                                 
                                 
                            
                                </div>
                                <!-- <hr>                                 -->
                                <div class="checkout__order__total">Total <span>Rp <?= $cart['price'] ?></span></div>
                                <div class="checkout__input__checkbox">
                                    <a href="<?= base_url() ?>auth/register/">Buat Akun Anda ?</a>
                                </div>

                                
                                
                               

                               <!--  <button type="submit" class="btn btn-success"></button> -->
                               <?php if ($cart['price2'] <= 0) { ?>
                                <form method="post" action="checkout">
                                <input type="hidden" name="order_id" value="voucher">
                                <input type="hidden" name="kode_buyer" value="<?= $this->session->kode_buyer?>">
                                <input type="hidden" name="name_buyer" value="<?= $this->session->name_buyer?>">
                                <input type="hidden" name="email_buyer" value="<?= $this->session->email_buyer?>">
                                 <input type="hidden" name="nohp" value="<?= $this->session->nohp?>">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i>Checkout</button>
                                </form>
                              <?php } elseif ($this->session->name_buyer == null) { ?>

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                 <i class="fa fa-credit-card"></i> Checkout
                                </button>
                                                           
                        
                             
                               
                            </div>
                        </div>

                    <?php }else{ ?>

                       <button type="button" id="pay-button" data-amount="800" class="btn btn-success btn-icon icon-left mt-3"><i class="fa fa-credit-card"></i> Checkout</button>

                       <form id="payment-form" method="post" action="<?=site_url()?>/snap2/finish">
                        <input type="hidden" name="result_type" id="result-type" value=""></div>
                        <input type="hidden" name="result_data" id="result-data" value="">
                      </div>

                      <input type="hidden" name="kode_buyer" id="kode_buyer" value="<?= $this->session->kode_buyer  ?>">

                       <input type="hidden" name="name_buyer" id="name_buyer" value="<?= $this->session->name_buyer  ?>">

                       <input type="hidden" name="email" id="email" value="<?= $this->session->email_buyer  ?>">

                        <input type="hidden" name="nohp" id="nohp" value="<?= $this->session->nohp  ?>">

                       <input type="hidden" name="produk" id="produk" value="<?= $cart['name'] ?>">

                        <input type="hidden" name="harga" id="harga" value="<?= $cart['price'] ?>">

                        <input type="hidden" name="kode_produk" id="kode_produk" value="<?= $cart['kode_produk'] ?>">

                        <input type="hidden" name="qty" id="qty" value="<?= $cart['qty'] ?>">
                        <input type="hidden" name="subtotal" id="subtotal" value="<?= $cart['subtotal'] ?>">
                        <input type="hidden" name="tulisan_papanbunga" id="tulisan_papanbunga" value="<?= $cart['tulisan_papanbunga'] ?>">

                         <input type="hidden" name="catatan" id="catatan" value="<?= $cart['catatan'] ?>">

                        <input type="hidden" name="text_ucapan" id="text_ucapan" value="<?= $cart['text_ucapan'] ?>">

                         <input type="hidden" name="dari" id="dari" value="<?= $cart['dari'] ?>">

                          <input type="hidden" name="rowid" id="" value="<?= $cart['rowid'] ?>">

                       

                       </div>
                      </form>

                    <?php }} ?>
            </div>
        </div>
    </section>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Login</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="<?= base_url() ?>buyer/login_cart">
          <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <!-- small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
          </div>
          <div class="form-check">
            
           <!--  <small class="float-right"><a class="badge badge-primary" href="">Daftar akun?</a></small> -->
          </div>
        
       

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Login</button>
      </div>

       </form>
      </div>
     
    </div>
  </div>
</div>



    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><strong>Login</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        
    </div>
  </div>
</div>



     <script type="text/javascript">
  
    $("#pay-button").click(function (event) {
      // var gross =  $(this).data('amount');
      // var nama = $(this).data('nama');
      event.preventDefault();
      $(this).attr("disabled", "disabled");


    var produk = $('#produk').val();
    var harga = $('#harga').val();
    var name_buyer = $('#name_buyer').val();
    var email = $('#email').val();
    var nohp = $('#nohp').val();

    
    $.ajax({
      type:'POST',
      url: '<?=base_url()?>/snap2/token',
      cache: false,

      data: {
        produk: produk,
        harga: harga,
        name_buyer: name_buyer,
        email: email,
        nohp: nohp,
      },

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          // resultType.innerHTML = type;
          // resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>


   <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

  <script>
    var app = new Vue({
      el: '#al',
      data: {
        produk : 'ebunga',
        
      },

      methods: {

        aa : function(){
         
        }
      }

         
     

       
    })
  </script>





<!--   vue js -->

 

  <script>
    var app = new Vue({
      el: '#app',
      data: {
        voucher: '',
        jml: 0,
        click : false,
        produk2 : 'al'
      },

       methods: {
          cek: function () {
              return this.voucher.length;

          },

          reload : function (){
            if (this.cek() == 8) {
                alert('ebunga');
            }
          },

          coba : function(){
          return this.produk2 = 'aldi';
        },


          klik: function(event){
             var cek = "<?= base_url('ebunga/cek_voucher?id=') ?>"+this.voucher+'&total='+<?= $cart['price'] ?>;
             $.get(cek, function(data){
                $("#cek").html(data);
             })
             
          }
        },


          updated: function(){
              console.log($el)
            }

        
     

       
    })
  </script>





  

<!--   end -->



  <script type="text/javascript">
    var auto_refresh = setInterval(
    function () {
        $('#klik').trigger('click');
       
    }, 7000); 
    
</script>





