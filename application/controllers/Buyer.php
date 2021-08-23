<?php

		/**
		 * 
		 */
		class Buyer extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->library('form_validation');
			}


			function login(){

				$this->form_validation->set_rules('email','email','required');
				$this->form_validation->set_rules('pass','password','required');
				$this->form_validation->set_rules('rule','rule','required');

				if ($this->form_validation->run() == false) {
					$this->load->view('templateuser/header');
					$this->load->view('auth/login');
					$this->load->view('templateuser/footer');
				}else{

					$email = $this->input->post('email');
					$pass = $this->input->post('pass');
					$rule = $this->input->post('rule');

					if ($rule == 'ebunga') {
						$this->login_ebunga($email, $pass);
					}elseif ($rule == 'ptb') {
						$this->login_ptb($email, $pass);
					}else{

							$this->session->set_flashdata('message', 'swal("Gagal!", "Plih metode login", "error");');
							redirect('auth/login');
					}
					
				}

				
			}

			function login_ebunga($email, $pass){

				$cek = $this->db->get_where('tbl_buyer',['email' => $email])->row_array();
				if ($cek) {
					if (password_verify($pass, $cek['pass'])) {
						
						$data = [
							'email_buyer' => $email,
							'name_buyer' => $cek['name'],
							'kode_buyer' => $cek['kode_buyer'],
						];
						$this->session->set_userdata($data);

						// $this->session->set_flashdata('message', 'swal("Sukses!", "Anda Berhasil Mendaftar", "success");');
							redirect('ebunga/');
					}else{

						$this->session->set_flashdata('message', 'swal("Gagal!", "Password anda salah", "error");');
							redirect('auth/login');
					}
					
				}else{

					$this->session->set_flashdata('message', 'swal("Gagal!", "Akun anda tidak terdaftar", "error");');
							redirect('auth/login');

				}

			}

			function login_ptb($email, $pass){
				$cek = $this->db->get_where('tbl_register_ptb',['email' => $email])->row_array();
				if ($cek) {
					if (password_verify($pass, $cek['password'])) {
						
						$data = [
							'email_buyer' => $email,
							'name_buyer' => $cek['name'],
							'kode_buyer' => $cek['kode_user'],
						];
						$this->session->set_userdata($data);

						// $this->session->set_flashdata('message', 'swal("Sukses!", "Anda Berhasil Mendaftar", "success");');
							redirect('ebunga/');
					}else{

						$this->session->set_flashdata('message', 'swal("Gagal!", "Password anda salah", "error");');
							redirect('auth/login');
					}
					
				}else{

					$this->session->set_flashdata('message', 'swal("Gagal!", "Akun anda tidak terdaftar", "error");');
							redirect('auth/login');

				}
			}

		function login_cart(){


			$email = $this->input->post('email');
			$pass = $this->input->post('pass');

				$cek = $this->db->get_where('tbl_buyer',['email' => $email])->row_array();
				if ($cek) {
					if (password_verify($pass, $cek['pass'])) {
						
						$data = [
							'email_buyer' => $email,
							'name_buyer' => $cek['name'],
							'kode_buyer' => $cek['kode_buyer'],
							'nohp' => $cek['nohp'],
						];
						$this->session->set_userdata($data);

						// $this->session->set_flashdata('message', 'swal("Sukses!", "Anda Berhasil Mendaftar", "success");');
							redirect('ebunga/keranjang');
					}else{

						$this->session->set_flashdata('message', 'swal("Gagal!", "Password anda salah", "error");');
							redirect('ebunga/keranjang');
					}
					
				}else{

					$this->session->set_flashdata('message', 'swal("Gagal!", "Akun anda tidak terdaftar", "error");');
							redirect('ebunga/keranjang');

				}

		}

			function register(){
				
				$this->form_validation->set_rules('name','nama lengkat','required');
				$this->form_validation->set_rules('email','email','required');
				$this->form_validation->set_rules('pass1','password','required');
				$this->form_validation->set_rules('pass2','konfirmasi password','required|matches[pass1]');


				if ($this->form_validation->run() == false) {

					$this->load->view('templateuser/header');
					$this->load->view('auth/register');
					$this->load->view('templateuser/footer');
				} else{

					$kode = rand(1, 100000);
					$kode_buyer = "buyer-".$kode;

					$data =[

						'kode_buyer' => $kode_buyer,
						'name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'nohp' => $this->input->post('nohp'),
						'pass' => password_hash($this->input->post('pass1'), PASSWORD_DEFAULT),
					];

					$this->db->insert('tbl_buyer', $data);

					$this->session->set_flashdata('message', 'swal("Sukses!", "Anda Berhasil Mendaftar", "success");');
					redirect('auth/login');

				}

				
			}

			function logout(){

				$this->session->unset_userdata('name_buyer');
				$this->session->set_flashdata('message', 'swal("Sukses!", "Anda Berhasil Keluar", "success");');
					redirect('auth/login');
			}
		}
 ?>