
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Upload Produk</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Data Produk</a></div>
             
            </div>
          </div>
          
            <div class="section-body">
            
            <div class="card">
              <div class="card-header">
                <h4>Uplaod Produk</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-8 col-lg-8">

                  <div class="card-body">
                
                  <form method="post" action="<?= base_url('DashboardSeller/upload_produk') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Kategori Produk</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                              <i class="fas fa-hand-pointer"></i>
                          </div>
                        </div>
                        <select class="form-control" name="kategori_produk">
                          <option>-- Pilih Kategori -- </option>
                          <option>Papan Bunga</option>
                          <option>Parcel</option>
                          <option>Buket</option>
                          <option>Cake</option>
                        </select>
                      </div>
                      
                    </div>


                    <div class="form-group">
                      <label>Nama Produk</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                              <i class="fas fa-file-signature"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control phone-number" value="" name="nama_produk" placeholder="Masukan nama produk" >
                      </div>
                        <?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                     <div class="form-group">
                      <label>Harga Produk</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                              <i class="fas fa-money-check-alt"></i>
                          </div>
                        </div>
                        <input type="number"  class="form-control phone-number" value="" name="harga" placeholder="Masukan harga produk">
                      </div>
                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                      
                    </div>

                    <div class="form-group">
                      <label>Gambar Produk</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                              <i class="fas fa-paperclip"></i>
                          </div>
                        </div>
                        <input type="file"  class="form-control phone-number" value="" name="gambar_produk">
                      </div>

                        
                      
                    </div>


                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Upload Produk</button>
                  </form>


                     
                  
                

          
          
        </section>
      </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
     <script>
        var app = new Vue({
          el: '#app',
          data: {
            errors :'',
            step : 1,
            totalStap : 3,
            name : '',
            username: '',
            email : '',
            nohp : '',
            pass1 : '',
            pass2 : '',
            kode_user : "<?= $kode_user ?>",

            val : ''
            // message: {
            //   nam : '',
            //   hp : '',
            //   pesan : '',

            // }
          },
          methods: {
            nextStep : function(){
              // if (this.step == 1) {
              //   if (!this.name) {
              //     this.errors="Nama masih kosong";
              //     return false;
              //   }
              //   if (!this.username) {
              //     this.errors="Username masih kosong";
              //     return false;
              //   }
              //   if (!this.email) {
              //     this.errors="email masih kosong";
              //     return false;
              //   }

              //   if (!this.nohp) {
              //     this.errors="No telp masih kosong";
              //     return false;
              //   }

              //   if (!this.pass1) {
              //     this.errors="Password masih kosong";
              //     return false;
              //   }
              //   if (!this.pass2) {
              //     this.errors="konfirmasi password masih kosong";
              //     return false;
              //   }
              // }
              this.step++;
            },
            prevtStep: function(){
              this.step--;
            },

            changeVoucher: function(event){
              var a = event.target.value;
              var name = this.name;
              var username = this.username;
              var email = this.email;
              var nohp = this.nohp;
              var pass1 = this.pass1;
              var pass2 = this.pass2;
              var kode_user = this.kode_user;

              var url2 = "<?= base_url('user/get_produk?id=') ?>"+a+"&name="+name+"&username="+username+"&email="+email+"&nohp="+nohp+"&pass1="+pass1+"&pass2="+pass2+"&kode_user="+kode_user;
              $("#vc").load(url2);
            }
          }
        })
     </script>