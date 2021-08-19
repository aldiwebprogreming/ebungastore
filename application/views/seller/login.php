<section class="breadcrumb-section set-bg" data-setbg="<?= base_url() ?>assets_user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Login Seller</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container-sm">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6 mt-5 mb-5">
            <div class="card shadow">
                <div class="card-body">
                    <div id="app">

                      
                       
                        <section>
                            <form method="post" action="<?= base_url('seller/login') ?>">
                            <h5 class="text-success"><strong>Login Seller</strong></h5>
                            <hr>

                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telp</label>
                                <input type="number" class="form-control" name="no_telp" placeholder="Masukan No telp anda">
                                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" name="pass" placeholder="Masukan password anda">
                                <?= form_error('pass', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                             <div class="form-group">
                                <input type="submit" name="kirim" class="btn btn-success" value="Login Seller">
                            </div>


                            </form>
                        </section>

                        

                       

                  


                         



                     </div>




                </div>
                </div>
            </div>

            <div class="col-md-3">
                
            </div>
            
        </div>
    </div>
</section>


