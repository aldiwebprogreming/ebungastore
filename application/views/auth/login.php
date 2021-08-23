<section class="breadcrumb-section set-bg" data-setbg="<?= base_url() ?>assets_user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Login</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="app">
    <div class="container-sm">
        <div class="row">
            <div class="col-md-3">
                <form method="" action=""></form>
                
            </div>
            <div class="col-md-6 mt-5 mb-5">
            <div class="card shadow">
                <div class="card-body">
                <form method="post" action="<?= base_url() ?>buyer/login">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Masukan alamat email">
                        <small id="emailHelp" class="form-text text-muted" style="color: red"><?php echo form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Masukan password">
                        <small id="emailHelp" class="form-text text-muted" style="color: red"><?php echo form_error('pass'); ?></small>
                    </div>
                    <div class="form-group form-check">
                        <input type="radio" class="form-check-input" id="one" value="ebunga" v-model="picked">
                        <label class="form-check-label mr-5" for="exampleCheck1"><strong>Login dengan ebunga</strong></label>

                        <input type="radio" class="form-check-input" id="ptb" value="ptb" v-model="picked">
                        <label class="form-check-label" for="exampleCheck1"><strong>
                        Login dengan PTB</strong></label>

                       
                    </div>

                    <input type="hidden" name="rule" v-model="picked">



                  <!--   <span>Yang dipilih: {{ picked }}</span> -->
                  <button id="submit" type="submit" class="btn btn-success btn-block"><strong>MASUK</strong></button>

                    <p class="text-center mt-2 m-b-">Belum punya akun?</p>

                    <a href="<?= base_url('auth/register') ?>" id="submit" type="submit" class="btn btn-info btn-block"><strong>MENDAFTAR DISINI  <i class="fa fa-arrow-right"></i></strong></a>


                    <!-- <button type="submit" class="btn btn-success">Login</button>
                     <button @click.prevent="alert" class="btn btn-success">Register</button> -->

                </form>
                </div>
                </div>
            </div>

            <div class="col-md-3">
                
            </div>
            
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0/dist/vue.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var app = new Vue({
      el: '#app',
      data: {
        picked: '',
      },

      methods : {

        alert: function(event){
            Swal.fire('Any fool can use a computer');
        }
      }
    })
</script>

