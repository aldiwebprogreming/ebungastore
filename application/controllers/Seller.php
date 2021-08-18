<?php 

/**
 * 
 */
class Seller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}


	function register(){

		$data['prov'] = $this->db->get('tbl_provinsi')->result_array();

		$this->load->view('templateuser/header');
		$this->load->view('seller/register', $data);
		$this->load->view('templateuser/footer');
	}

	function action_register(){

		$kode = rand(1, 100000);
        $kode_seller = "seller-".$kode;

		$data = [
			'kode_seller' => $kode_seller,
			'no_telp' => $this->input->post('no_telp'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'pass' => password_hash($this->input->post('pass2'), PASSWORD_DEFAULT),
			'prov' => $this->input->post('prov'),
			'kab' => $this->input->post('kab'),
			'ktp' => $this->input->post('ktp'),
			'npwp' => $this->input->post('npwp'),
			'siup' => $this->input->post('siup'),
		];

		$input = $this->db->insert('tbl_seller', $data);
		$this->session->set_flashdata('message', 'swal("Gagal!", "Anda berhasil mendaftar", "success");');
		redirect('seller/login');
	}

}

	
 ?>