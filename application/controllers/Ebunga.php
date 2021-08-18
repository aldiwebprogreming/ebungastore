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
        'price2' => $this->input->post('harga'),
        'name'    => $this->input->post('nama_produk'),
        'kode_produk'    => $this->input->post('kode_produk'),
        'gambar_produk' => $this->input->post('gambar'),
       	'tulisan_papanbunga' => $this->input->post('tulisan_papanbunga'),
     		'catatan' => $this->input->post('catatan'),
     		'nama_penerima' => $this->input->post('nama_penerima'),
     		'nohp' => $this->input->post('nohp'),
     		'text_ucapan' => $this->input->post('text_ucapan'),
     		'dari' => $this->input->post('dari'),
        'sisa_bayar' => $this->input->post('harga'),
        'sisa_voucher' => 0,

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

  function cek_voucher(){

    $kode_vouhcer  = $this->input->get('id');
    $data['total'] = $this->input->get('total');
    $data['voucher'] = $this->db->get_where('tbl_list_voucherproduk',['kode_voucher' => $kode_vouhcer])->row_array();

    $cek_v = $this->db->get_where('tbl_post_voucher',['kode_voucher' => $kode_vouhcer,'status' =>'terpakai'])->row_array();

    if ($data['voucher'] == false) {
      echo '<small class="text-danger">Kode vouhcer tidak terdaftar</small>';
    }elseif ($cek_v == true) {
      echo '<small class="text-danger">Voucher anda sudah digunakan.</small>';
    }else{

    $this->load->view('user/get_voucher', $data);
  }




  }

   function cek2(){

    echo '<div id="ebunga">Hello</div>';



  }

 function post_voucher(){

   

      $bb = $this->cart->contents();
      foreach ($bb as $rowid) {
       } 

     $nilai_voucher = $this->input->post('nilai_voucher');
     $harga_produk =  $rowid['price2'];

     $hasil = $nilai_voucher - $harga_produk;
    $hasil2 =  $harga_produk - $nilai_voucher;

if ($hasil2 <= 0) {
    $sisaBayar = 0;
}else{
  $sisaBayar = $hasil2;
}



    $cart = array(
        'rowid'  => $rowid['rowid'],
        'price2' => $hasil2,
        'sisa_bayar' => $sisaBayar,
        'sisa_voucher' => $hasil,
        
      );
       $this->cart->update($cart);
     $cc = $this->cart->contents();

     if ($hasil <= 0) {
        $status = 'terpakai';
    }else{
      $status = 'sisa';
      $data = array(
        
        'nilai_voucher' => $hasil,
        );
        $kode = $this->input->post('kode_voucher');
        $this->db->where('kode_voucher', $kode);
        $this->db->update('tbl_list_voucherproduk', $data);
    }

      $data = [

      'kode_voucher' => $this->input->post('kode_voucher'),
      'nilai_voucher' => $this->input->post('nilai_voucher'),
      'kode_produk' => $this->input->post('kode_produk'),
      'status' => $status

    ];
    $this->db->insert('tbl_post_voucher', $data);

    if ($hasil2 <= 0) {
       $this->session->set_flashdata('message', 'swal("Sukses!", "Transaksi Lunas", "success");');
          redirect('ebunga/keranjang?pesan=2');
    }else{
    $this->session->set_flashdata('message', 'swal("Sukses!", "Voucher anda berhasil dipakai, Masukan vocuher anda lagi", "success");');
          redirect('ebunga/keranjang?pesan=1');

        }
    

 }

 function checkout(){

      $cart = $this->cart->contents();
    foreach ($cart as $cart2) {
     } 

     $data = [

      'order_id' => $this->input->post('order_id'),
      'kode_buyer' => $this->input->post('kode_buyer'),
      'name_buyer' => $this->input->post('name_buyer'),
      'email' => $this->input->post('email_buyer'),
      'no_telp' => $this->input->post('nohp'),
      'kode_produk' => $cart2['kode_produk'],
      'name_produk' => $cart2['name'],
      'harga' => $cart2['price'],
      'qty' => $cart2['qty'],
      'total_harga' => $cart2['subtotal'],
      'note_item' => $cart2['tulisan_papanbunga'],
      'catatan' => $cart2['catatan'],
      'text_ucapan' => $cart2['text_ucapan'],
      'dari' => $cart2['dari'],
      'kode_seller' => '',
      'kel' => 11,
      'kec' => 11,
      'kab' => 11,
      'prov' => 11,
      'metode_pembayaran' => 'voucher',
      'status' => 1,
     ];

     $input = $this->db->insert('tbl_checkout', $data);
     if ($input) {
       $this->cart->remove($cart2['rowid']);
       $this->session->set_flashdata('message', 'swal("Sukses!", "Anda berhasil checkout", "success");');
       
        redirect('ebunga/keranjang');
      
     }





 }


 }

 ?>