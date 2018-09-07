<?php

class List_orders_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getId($id)
	{
		// echo $id;
		$this->db->where('id_order', $id);
		$item = $this->db->get('orders');
		
		return $item->result_array();
	}
