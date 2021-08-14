<?php 

	/**
	 * 
	 */
	class M_data extends CI_Model
	{
		
		function __construct()
		{
			
		}


		function get($table){

			return $this->db->get($table)->result_array();
		}

		function detail($table, $kode_produk){

			return $this->db->get_where($table,['kode_produk' => $kode_produk])->row_array();
		}
	}

 ?>