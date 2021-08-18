<section class="breadcrumb-section set-bg" data-setbg="<?= base_url() ?>assets_user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Register Seller</h2>
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

                      
                       
                        <section v-if="step == 1">
                            <h5 class="text-success"><strong>Step 1 Account</strong></h5>
                            <hr>

                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telp</label>
                                <input type="number" class="form-control" name="no_telp" v-model="no_telp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" v-model="nama_lengkap">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" name="pass1" v-model="pass1">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="pass2" v-model="pass2">
                            </div>
                        </section>

                        <section v-if="step == 2">
                            <h5 class="text-success"><strong>Step 2 Zona Seller</strong></h5>
                            <hr>

                              <select id="prov">
                         <option>kluar</option>
                         <option>a</option>
                         <option>b</option>
                     </select>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Provinsi</label>
                                <select @change="prov2" class="form-control" name="prov" v-model="prov" id="prov">
                                    <option>--Pilih Provonsi--</option>
                                    <?php foreach ($prov as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kabupaten</label>
                                <select class="form-control" name="kab" v-model="kab" id="kab">
                                   
                                </select>
                            </div>
                           <!--  <div class="form-group">
                                <label for="exampleInputEmail1">Kecamaatan</label>
                                <select class="form-control" name="kab">
                                    <option>--Pilih Kecamatan--</option>
                                </select>
                            </div> -->
                             <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Kelurahan</label>
                                <select class="form-control" name="kab">
                                    <option>--Pilih Kelurahan-</option>
                                </select>
                            </div> -->
                        </section>

                        <section v-if="step == 3">
                            <h5 class="text-success"><strong>Step 3 Document</strong></h5>
                            <hr>

                        <form method="post" action="<?= base_url() ?>seller/action_register">
                      

                            <div class="form-group">
                                <label for="exampleInputEmail1">KTP</label>
                                <input type="file" class="form-control" name="ktp" v-model="ktp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NPWP</label>
                                <input type="file" class="form-control" name="npwp" v-model="npwp">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">SIUP</label>
                                <input type="file" class="form-control" name="siup" v-model="siup">
                            </div>

                            <input type="hidden" name="no_telp" v-model="no_telp">
                            <input type="hidden" name="nama_lengkap" v-model="nama_lengkap">
                            <input type="hidden" name="pass1" v-model="pass1">
                            <input type="hidden" name="pass2" v-model="pass2">
                            <input type="hidden" name="prov" v-model="prov">
                            <input type="hidden" name="kab" v-model="kab">
                            <!-- <input type="hidden" name="ktp" v-model="ktp">
                            <input type="text" name="npwp" v-model="npwp">
                            <input type="text" name="siup" v-model="siup"> -->

                            <button @click.prevent="PreNext" v-if="step==3" class="btn btn-success"><i class="fa fa-arrow-left"></i> Prev Next </button>
                            <input type="submit" v-if="step==3" class="btn btn-success" value="Reigter">
                        </form>
                        </section>

                        <button @click.prevent="next" v-if="step==1" class="btn btn-success">Next <i class="fa fa-arrow-right"></i></button>

                        <button @click.prevent="PreNext" v-if="step==2" class="btn btn-success"><i class="fa fa-arrow-left"></i> Prev Next </button>
                        <button @click.prevent="next" v-if="step==2" class="btn btn-success">Next <i class="fa fa-arrow-right"></i></button>



                         



                     </div>




<!--                 <form method="post" action="<?= base_url('buyer/register') ?>">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Telp</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="nohp">
                      
                    </div>

                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" id="" name="name">
                  
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass1">
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass2">

                    </div>
                    
                    <button type="submit" class="btn btn-success">Register</button>
                </form> -->
                </div>
                </div>
            </div>

            <div class="col-md-3">
                
            </div>
            
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

<script>
    var app = new Vue({
      el: '#app',
      data: {
       step: 1,
        no_telp: '',
        nama_lengkap : '',
        pass1 : '',
        pass2 : '',
        prov:'--Pilih Provinsi',
        kab : '4',
        ktp : '',
        npwp : '',
        siup : '',
      },

        methods: {
            next:  function () {
             this.step++;
            },

            PreNext: function(){
                this.step--;
            },

            prov2: function(){
                var id = this.prov
                var url = "<?= base_url('ebunga/kab?id=') ?>"+id;
                $("#kab").load(url);
            }


          }

        
    })
</script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $("#prov").click(function(){
            alert('ebunga');
        })
    })
</script>
