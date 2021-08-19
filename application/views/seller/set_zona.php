
      <!-- Main Content -->
      <div class="main-content" id="app">
        <section class="section">
          <div class="section-header">
            <h1>Set Zona</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Data Produk</a></div>
             
            </div>
          </div>
          
            <div class="section-body">
            
            <div class="card">
              <div class="card-header">
                <h4>Set Zona</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-8 col-lg-8">

                  <div class="card-body">
            

                    <div class="form-group">
                      <label>Provinsi</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                              <i class="fas fa-user"></i>
                          </div>
                        </div>
                        <select class="form-control" name="kategori">
                          <option><?= $prov['name'] ?></option>
                         
                        </select>
                      </div>
                      
                    </div>


                    <div class="form-group">
                      <label>Kabupaten</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                              <i class="fas fa-user"></i>
                          </div>
                        </div>
                        <select class="form-control" name="kategori">
                          <option><?= $kab['name'] ?></option>
                        </select>
                      </div>
                      
                    </div>


                    <div class="card">
                  <div class="card-header">
                    <h4>Zona Kecamatan</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" action="<?= base_url('DashboardSeller/act_zona') ?>">
                    <div id="accordion">
                      <?php foreach ($kec as $data) {?>
                      <div class="accordion">
                        <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-<?= $data['id'] ?> " aria-expanded="false">
                          <h4> <input type="checkbox" id="checkbox" name="kec" value="<?= $data['id'] ?>"> <?= $data['name'] ?></h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-<?= $data['id'] ?>" data-parent="#accordion" style="">
                           <?php 
                              $kel = $this->db->get_where('tbl_kelurahan',['district_id' => $data['id']])->result_array();
                            foreach ($kel as $data_kel) {
                              $chaked = $this->db->get_where('tbl_zona',['kel' => $data_kel['id']])->row_array();
                            ?>

                          <input type="checkbox" <?= ($chaked == true ?'checked':'') ?> id="checkbox" value="<?= $data_kel['id'] ?>" name = "kel[]">
                          <label for="checkbox"><!-- {{ checked }} --><?= $data_kel['name'] ?></label><br>

                           <?php } ?>

                           <input type="submit" name="kirim"  class="btn btn-primary" value="Set Zona">

                          </form>

                        </div>
                      </div>

                    <?php } ?>




                      
                      
                    </div>
                  </div>
                </div>


               
                     
                    </section>

                  
                

          
          
        </section>
      </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
     <script>
        var app = new Vue({
          el: '#app',
          data: {
            kec : [],      
          },
          methods: {
           
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