<?php 

/**
 * 
 */
class Seller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
	}


	function register(){

		$data['prov'] = $this->db->get('tbl_provinsi')->result_array();

		$this->load->view('templateuser/header');
		$this->load->view('seller/register', $data);
		$this->load->view('templateuser/footer');
	}

	function action_register(){

			$config['upload_path']          = './berkas/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1000000;
			$config['max_width']            = 10240;
			$config['max_height']           = 76800;

			$config['upload_path']          = './berkas/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1000000;
			$config['max_width']            = 10240;
			$config['max_height']           = 76800;


			$config['upload_path']          = './berkas/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 76800;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('ktp')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Berkas yang anda masukan terlalu besar", "", "warning" );');
		 		redirect('seller/register');
		 	}elseif (! $this->upload->do_upload('npwp')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Berkas yang anda masukan terlalu besar", "", "warning" );');
		 		redirect('seller/register');
				
			}elseif (! $this->upload->do_upload('siup')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Berkas yang anda masukan terlalu besar", "", "warning" );');
		 		redirect('seller/register');
			}else{

				$ktp = $_FILES['ktp']['name'];
				$npwp = $_FILES['npwp']['name'];
				$siup = $_FILES['siup']['name'];

				$kode = rand(1, 100000);
		        $kode_seller = "seller-".$kode;

				$data = [
					'kode_seller' => $kode_seller,
					'no_telp' => $this->input->post('no_telp'),
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'pass' => password_hash($this->input->post('pass2'), PASSWORD_DEFAULT),
					'prov' => $this->input->post('prov'),
					'kab' => $this->input->post('kab'),
					'ktp' => $ktp,
					'npwp' => $npwp,
					'siup' => $siup,
				];


				$input = $this->db->insert('tbl_seller', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Anda berhasil mendaftar", "success");');
				redirect('seller/login');
					}



		
	}


	function login(){


		$this->form_validation->set_rules('no_telp', 'No telp', 'required|trim');
		 $this->form_validation->set_rules('pass', 'Password', 'required|trim');

		 if ($this->form_validation->run() == false) {
		 	
		 	$this->load->view('templateuser/header');
			$this->load->view('seller/login');
			$this->load->view('templateuser/footer');
		 }else{
		 	$nohp = $this->input->post('no_telp');
		 	$pass = $this->input->post('pass');
		 	$cek = $this->db->get_where('tbl_seller',['no_telp' => $nohp])->row_array();
		 	if ($cek == true) {
		 		
		 		if (password_verify($pass, $cek['pass'])) {
		 			
		 			$data = [

		 				'nama_seller' => $cek['nama_lengkap'],
		 				'no_telp' => $cek['no_telp'],
		 				'prov' => $cek['prov'],
		 				'kab' => $cek['kab'],
		 				'kode_seller' => $cek['kode_seller']
		 			];

		 				$this->session->set_userdata($data);
						redirect('seller/dashboard');
		 		}else{
					$this->session->set_flashdata('message', 'swal("Gagal!", "Password anda salah", "error");');
					redirect('seller/login');
		 		}

		 	}else{
		 		$this->session->set_flashdata('message', 'swal("Gagal!", "Akun anda tidak terdaftar", "error");');
				redirect('seller/login');
		 	}
		 }

		

	}

}

	
 ?>