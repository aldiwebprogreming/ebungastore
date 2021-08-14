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
                <form action="#">
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
                                    
                                    <img src="<?= base_url() ?>assets_user/img/product/product-1.jpg">
                                    <center>
                                    <a href="<?= base_url() ?>ebunga/hapus_keranjang?id=<?= $cart['rowid'] ?>" class="badge btn-danger mt-2"><i class="fa fa-trash"></i> Hapus Keranjang</a>
                                    </center>
                                </div>
                                <div class="col-sm-9">
                                    <ul class="list-group">
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
                                    </ul>
                                </div>

                                <?php } ?>

                            </div>
                           
                          
                            
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
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

                                  <div v-if='click == true'>
                                  <label>Masukan Kode Voucher</label>
                                  <input type="text" name="voucher" class="form-control" v-model="voucher" placeholder="_ _ _ _ _ _ _" style="text-align: center;">
                                  

                                  <center>
                                    <div id="cek" v-if="cek() == 6">
                                    <div v-if="cek() == 6">
                                    <div class="load spinner-border text-success mt-3" role="status">
                                      <span class="sr-only">Loading...</span>

                                    </div>
                                  </div>
                                    <input type="submit" @click.prevent="klik()" name="kirim" class="btn btn-primary" id="klik" style="display: none">
                                <!--   </form> -->
                                  </div>
                                  </div>
                                  </center>
                                  
                                 
                            
                                </div>
                                <!-- <hr>                                 -->
                                <div class="checkout__order__total">Total <span>Rp <?= $cart['price'] ?></span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Buat akun anda?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                
                               

                               <!--  <button type="submit" class="btn btn-success"></button> -->
                               <button type="button" id="pay-button" data-amount="800" class="btn btn-success btn-icon icon-left mt-3"><i class="fa fa-credit-card"></i> Checkout</button>

                               <form id="payment-form" method="post" action="<?=site_url()?>/snap2/finish">
                                <input type="hidden" name="result_type" id="result-type" value=""></div>
                                <input type="hidden" name="result_data" id="result-data" value=""></div>
                        
                              </form>
                               
                            </div>
                        </div>

                    <?php } ?>

                    </div>
                </form>
            </div>
        </div>
    </section>

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
      
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!-- small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
        
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Login</button>
      </div>

       </form>
    </div>
  </div>
</div>



     <script type="text/javascript">
  
    $("#pay-button").click(function (event) {
      // var gross =  $(this).data('amount');
      // var nama = $(this).data('nama');
      event.preventDefault();
      $(this).attr("disabled", "disabled");


    // var nama_produk = $('#nama_produk').val();
    // var harga = $('#harga').val();
    // var name = $('#name').val();
    // var email = $('#email').val();

    
    $.ajax({
      type:'POST',
      url: '<?=base_url()?>/snap/token',
      cache: false,

      data: {
        // harga: harga,
        // nama_produk: nama_produk,
        // name: name,
        // email: email,
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


<!--   vue js -->

  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

  <script>
    var app = new Vue({
      el: '#app',
      data: {
        voucher: '',
        jml: 0,
        click : false,
      },

       methods: {
          cek: function () {
              return this.voucher.length;

          },

          reload : function (){
            if (this.cek() == 6) {
                alert('ebunga');
            }
          },

          klik: function(event){
             var cek = "<?= base_url('ebunga/cek_voucher?id=') ?>"+'ebunga';
              $("#cek").load(cek);
             
          }
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
