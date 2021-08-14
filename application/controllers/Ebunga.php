<?php 

 /**
  * 
  */
 class Ebunga extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_data');
 		$this->load->library('cart');
 	}

 	function index(){

 		 $this->load->view('templateuser/header');
         $this->load->view('user/index.php');
         $this->load->view('templateuser/footer');
 	}
 	

 	function papan_bunga(){

 		$data['prov'] = $this->m_data->get('tbl_provinsi');
 		$data['produk'] = $this->m_data->get('tbl_produk');

 		 $this->load->view('templateuser/header');
         $this->load->view('user/papan_bunga.php', $data);
         $this->load->view('templateuser/footer');
 	

 	}


 	function detail_produk($kode_produk){
 		$data['detail'] = $this->m_data->detail('tbl_produk', $kode_produk);

 		$this->load->view('templateuser/header');
 		$this->load->view('user/detail_produk', $data);
 		$this->load->view('templateuser/footer');
 	}


 	function keranjang(){


 		$data = array(
        'id'      => $this->input->post('kode_produk'),
        'qty'     =>$this->input->post('jumlah'),
        'price'   => $this->input->post('harga'),
        'name'    => 'Papan Bunga A',
       	'tulisan_papanbunga' => $this->input->post('tulisan_papanbunga'),
     		'catatan' => $this->input->post('catatan'),
     		'nama_penerima' => $this->input->post('nama_penerima'),
     		'nohp' => $this->input->post('nohp'),
     		'text_ucapan' => $this->input->post('text_ucapan'),
     		'dari' => $this->input->post('dari'),
    			);

 		$cart = $this->cart->insert($data);

 		$this->load->view('templateuser/header');
 		$this->load->view('user/cart');
 		$this->load->view('templateuser/footer');


 		 // $cart = $this->session->set_userdata($data);

 		// var_dump($data);
 	}

  function hapus_keranjang(){
    $id = $this->input->get('id');
    $this->cart->remove($id);
    redirect('ebunga/keranjang');
  }

  function kab(){
    $id = $this->input->get('id');
    $data['kab'] = $this->db->get_where('tbl_kabupaten', ['province_id' => $id])->result_array();
    
    $this->load->view('user/kab', $data);

  }
   function kec(){
    $id = $this->input->get('id');
    $data['kec'] = $this->db->get_where('tbl_kecamatan', ['regency_id' => $id])->result_array();
    
    $this->load->view('user/kec', $data);

  }

  function kel(){
    $id = $this->input->get('id');
    $data['kel'] = $this->db->get_where('tbl_kelurahan', ['district_id' => $id])->result_array();
    $this->load->view('user/kel', $data);

  }


  function get_produk(){

    $id = $this->input->get('id');

    $data['produk'] = $this->db->get_where('tbl_produk',['kel' => 11])->result_array();


    if ($data['produk'] == null) {
      $this->load->view('user/404.php');
    }else{
        
        $this->load->view('user/get_produk', $data);
    }

    
  }

 }

 ?>