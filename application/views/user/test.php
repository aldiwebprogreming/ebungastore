<!DOCTYPE html>
<html>
<head>
	<title>tes</title>
</head>
<body>


	<div id="app">

		<h3>Test</h3>

		<h4>{{produk}}</h4>

		<button id="klik">Klik</button>
		
		<div id="get">
			
		</div>

	</div>



	 

	<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
	  <script src="<?= base_url() ?>assets_user/js/jquery-3.3.1.min.js"></script>

	  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
 

	<script>
		
		$(document).ready(function(){

			$("#klik").click(function(){
				 var cek = "<?= base_url('ebunga/cek2') ?>";
				 $("#get").load(cek);
			})
		})

	</script>

	<script>
    var app = new Vue({
      el: '#app',
      data: {
        produk : 'ebunga',
        pesan : 'hello',
        
      } 
    })
  </script>

	



</body>
</html>