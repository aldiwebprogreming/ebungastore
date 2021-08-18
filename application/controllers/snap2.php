<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap2 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-uVr7ZDVJbX1nP28v2KV2Do_-', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token()
    {
		
		// Required
		$harga = $this->input->post('harga');
		$produk = $this->input->post('produk');
		$name_buyer = $this->input->post('name_buyer');
		$email = $this->input->post('email');
        $nohp = $this->input->post('nohp');
		
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $harga, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => 'a1',
		  'price' => $harga,
		  'quantity' => 1,
		  'name' =>$produk,
		);

		

		// Optional
		$item_details = array ($item1_details);

		// Optional
		$billing_address = array(
		  'first_name'    => "Andri",
		  'last_name'     => "Litani",
		  'address'       => "Mangga 20",
		  'city'          => "Jakarta",
		  'postal_code'   => "16602",
		  'phone'         => "081122334455",
		  'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		  'first_name'    => "Obet",
		  'last_name'     => "Supriadi",
		  'address'       => "Manggis 90",
		  'city'          => "Jakarta",
		  'postal_code'   => "16601",
		  'phone'         => "08113366345",
		  'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $name_buyer,
		  'last_name'     => "",
		  'email'         => $email,
		  'phone'         => $nohp,
		  // 'billing_address'  => $billing_address,
		  // 'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

       public function finish()
    {
        $kode_buyer = $this->input->post('kode_buyer');
    	$name_buyer = $this->input->post('name_buyer');
    	$email = $this->input->post('email');
    	$name_produk = $this->input->post('produk');
    	$kode_produk = $this->input->post('kode_produk');
    	$nohp = $this->input->post('nohp');
        $harga = $this->input->post('harga');
        $qty = $this->input->post('qty');
        $subtotal = $this->input->post('subtotal');
        $tulisan_papanbunga = $this->input->post('tulisan_papanbunga');
        $catatan = $this->input->post('catatan');
        $text_ucapan = $this->input->post('text_ucapan');
        $dari = $this->input->post('dari');

    	$result = json_decode($this->input->post('result_data'), true);
    	// echo 'RESULT <br><pre>';
    	// var_dump($result);
    	// echo '</pre>' ;

    	$data = [
    		'order_id' => $result['order_id'],
            'kode_buyer' => $kode_buyer,
            'name_buyer' => $name_buyer,
            'email' => $email,
            'no_telp' => $nohp,
            'kode_produk' => $kode_produk,
    		'name_produk' => $name_produk,
            'harga' => $harga,
            'qty' => $qty,
            'total_harga' => $subtotal,
            'note_item' => $tulisan_papanbunga,
            'catatan' => $catatan,
            'text_ucapan' => $text_ucapan,
            'dari' => $dari,
    		'kode_seller' => '',
    		'kel' => 11,
    		'kec' => 11,
            'kab' => 11,
            'prov' => 11,	
    		'metode_pembayaran' => $result['payment_type'],
    		// 'bank' => $result['va_numbers'][0]['bank'],
    		// 'va_number' => $result['va_numbers'][0]['va_number'],
    		// 'pdf_url' => $result['pdf_url'],
    		'status' => $result['status_code'],
    	];

    	$input = $this->db->insert('tbl_checkout', $data);
        $rowid = $this->input->post('rowid');
            $this->cart->remove($rowid);
            $this->session->set_flashdata('message', 'swal("Sukses!!", "Proses Chekout brhasil", "success");');

            redirect('ebunga/keranjang');


    }

    

}
