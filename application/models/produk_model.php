<?php

/**
 * 
 */
class Produk_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getId($id)
	{
		// echo $id;
		$this->db->where('id_produk', $id);
		$item = $this->db->get('produk');
		
		return $item->result_array();
	}

	
	
}
