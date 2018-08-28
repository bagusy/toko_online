<?php

/**
* 
*/
class Kategori extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->model('kategori_model');
		
		$data = array();
		$q = $this->db->get('kategori');
		$data['kategori'] = $q->result_array();
	
		// print_r($data['kategori']);
		$this->load->view("back/kategori", $data);
		
	}
}