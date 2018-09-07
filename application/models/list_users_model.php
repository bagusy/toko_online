<?php

class List_users_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getId($id)
	{
		// echo $id;
		$this->db->where('id_user', $id);
		$item = $this->db->get('users');
		
		return $item->result_array();
	}
}