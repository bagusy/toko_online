<?php

/**
 * 
 */
class Ongkir extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('city_model');
	}
	public function index()
	{
		if (isset($_POST['section'])) {
			if ($_POST['section'] == 'city') {
				echo $this->city_model->cityDropdown($_POST['id']);
				print_r($_POST);
			}
		}
	}
}