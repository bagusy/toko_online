<?php

/**
 * 
 */
class City extends CI_Controller
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
				
			}elseif ($_POST['section'] == 'subdistrict') {
				echo $this->city_model->subdistrictDropdown($_POST['id']) ;
			}

		}
	}
}