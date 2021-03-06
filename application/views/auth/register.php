<section class="breadcrumb-section set-bg" data-setbg="<?= base_url() ?>assets_user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Register</h2>
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
                <form method="post" action="<?= base_url('buyer/register') ?>">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Masukan email">
                        <small id="emailHelp" class="form-text text-muted" style="color: red"><?php echo form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Telp</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="nohp" placeholder="Masukan nomor telp">
                        <small id="emailHelp" class="form-text text-muted text-danger" style="color: red"><?php echo form_error('nohp'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" id="" name="name" placeholder="Masukan nama lengakap">
                        <small id="emailHelp" class="form-text text-muted text-danger" style="color: red"><?php echo form_error('name'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass1" placeholder="Masukan password">
                        <small id="emailHelp" class="form-text text-muted text-danger"><?php echo form_error('pass1'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass2" placeholder="Masukan konfirmasi password">

                        <small id="emailHelp" class="form-text text-muted text-danger" style="color: red"><?php echo form_error('pass2'); ?></small>

                    </div>


                    <button id="submit" type="submit" class="btn btn-success btn-block"><strong>MENDAFTAR</strong></button>

                     <p class="text-center mt-2 m-b-">Sudah punya akun?</p>

                    <a href="<?= base_url('auth/login') ?>" id="submit" type="submit" class="btn btn-info btn-block"><strong>MASUK DISINI  <i class="fa fa-arrow-right"></i></strong></a>
                    
                    <!-- <button type="submit" class="btn btn-success">Register</button> -->
                </form>
                </div>
                </div>
            </div>

            <div class="col-md-3">
                
            </div>
            
        </div>
    </div>
</section>

