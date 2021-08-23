<!-- <center>
<img src="<?= base_url() ?>assets_user/img/404.png" style="height: 400px;">	
<h4><strong>Produk untuk saat ini belum tersedia, kami akan melengkapi produk ini.</strong></h4> -->

	
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary but" data-toggle="modal" data-target="#exampleModalCenter" style="display: none">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <a href="<?= base_url('ebunga/produk') ?>" type="button" class="btn btn-suscess">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img src="<?= base_url() ?>assets_user/img/404.png" style="height: 200px;">
          <h5 class="mb-3 text-success"><strong>Mohon maaf produk tidak tersedia, kami akan memperbaharui produk wilayah anda</strong></h5>
          </center>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- <h3>Produk yang anda cari tidak tersedia</h3>
 -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript">
            $(document).ready(function() {
                $('.but').trigger('click');

            })
   </script>

