<?php 
	
	/**
	 * 
	 */
	class DashboardSeller extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();

			$this->load->library('form_validation');
		}

		function index(){

			$this->load->view('templateSeller/header');
			$this->load->view('seller/dashboard');
			$this->load->view('templateSeller/footer');
		}


		function upload_produk(){

			$data['prov'] = $this->db->get_where('tbl_provinsi',['id' => $this->session->prov])->row_array();

			$data['kab'] = $this->db->get_where('tbl_kabupaten',['id' => $this->session->kab])->row_array();



			$this->form_validation->set_rules('nama_produk', 'Nama produk', 'required|trim');
		 	$this->form_validation->set_rules('harga', 'Harga produk', 'required|trim');

		 	// $this->form_validation->set_rules('gambar_produk', 'Gambar produk', 'required|trim');

		 	if ($this->form_validation->run() == false) {

		 		$this->load->view('templateSeller/header');
				$this->load->view('seller/upload_produk', $data);
				$this->load->view('templateSeller/footer');
		 	}else{


				$kode = rand(1, 100000);
		        $kode_produk = "ebunga-".$kode;

			    $config['upload_path']          = './assets_user/img/product';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 1000000;
				$config['max_width']            = 10240;
				$config['max_height']           = 76800;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar_produk')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Gambar yang anda masukan terlalu besar", "", "warning" );');
			 		redirect('DashboardSeller/upload_produk');

			 	}else{

			 	$produk = $_FILES['gambar_produk']['name'];
			 	$nama_produk = strtolower($this->input->post('nama_produk'));

			 	$slug_produk = str_replace(" ", "-", $nama_produk);

			 	$zona_produk = $this->db->get_where('tbl_zona',['kode_seller' => $this->session->kode_seller])->result_array();
			 	
			 	$kategori_produk = $this->input->post('kategori_produk');
			 	$slug_kategori = str_replace(" ", "-", strtolower($kategori_produk));

			 	foreach ($zona_produk as $zona) {
		 		$data = [
		 			'kode_produk' => $kode_produk,
		 			'kategori_produk' => $this->input->post('kategori_produk'),
		 			'slug_kategori' => $slug_kategori,
		 			'nama_produk' => $this->input->post('nama_produk'),
		 			'harga_produk' => $this->input->post('harga'),
		 			'gambar' => $produk,
		 			'kode_seller' => $this->session->kode_seller,
		 			'slug_produk' => $slug_produk,
		 			'prov' => $this->session->prov,
		 			'kab' => $this->session->kab,
		 			'kec' =>$zona['kec'] ,
		 			'kel' => $zona['kel'],

		 		];

		 		$inputProduk = $this->db->insert('tbl_produk', $data);
		 	}
		 		// foreach ($zona_produk as $zona) {

		 		// 	$data = [
		 		// 	'kode_produk' => $kode_produk,
		 		// 	'kode_seller' => $this->session->kode_seller,
		 		// 	'prov' => $this->session->prov,
		 		// 	'kab' => $this->session->kab,
		 		// 	'kec' =>$zona['kec'] ,
		 		// 	'kel' => $zona['kel'],
		 		// 	];

		 		// 	$inputZonaProduk = $this->db->insert('tbl_zona_produk', $data);
		 		// }

		 	

		 		$this->session->set_flashdata('message', 'swal("Sukses!", "Produk Anda berhasil diupload", "success");');
		 		redirect('DashboardSeller/upload_produk');

		 	}

		 	}



		}

		function set_zona(){

			$data['prov'] = $this->db->get_where('tbl_provinsi',['id' => $this->session->prov])->row_array();

			$data['kab'] = $this->db->get_where('tbl_kabupaten',['id' => $this->session->kab])->row_array();

			$data['kec'] = $this->db->get_where('tbl_kecamatan',['regency_id' => $data['kab']['id']])->result_array();

			// $data['cheked'] = $this->db->get('tbl_zoba')->result_array();

			$this->load->view('templateSeller/header');
			$this->load->view('seller/set_zona', $data);
			$this->load->view('templateSeller/footer');
		}


		function act_zona(){	
			$kec = $this->input->post('kec');
			$kel = $this->input->post('kel');
			$kode_seller = $this->session->kode_seller;

			$jml  = count($kel);

			$cek_kec = $this->db->get_where('tbl_zona',['kec' => $kec])->row_array();
			

			foreach ($kel as $kel2) {

				$cek_kel = $this->db->get_where('tbl_zona',['kel' => $kel2])->row_array();

				if ($cek_kel == false) {

					$data = [
					'kode_seller' => $kode_seller,
					'prov' => $this->session->prov,
					'kab' => $this->session->kab,
					'kec' => $kec,
					'kel' => $kel2,
				];

				$input = $this->db->insert('tbl_zona', $data);
					
				}else{
					continue;
				}
				
			
			}
			
					$this->session->set_flashdata('message', 'swal("Success!", "Zona anda berhasil perbaharui", "success");');
				redirect('DashboardSeller/set_zona');
				
			}


			function data_produk(){

				$kode_seller = $this->session->kode_seller;
				$this->db->select('kode_seller');
				$this->db->distinct();
				$query = $this->db->get('tbl_produk')->result_array();
				var_dump($query);
			}


	
	}

 ?>