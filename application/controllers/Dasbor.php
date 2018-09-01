<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {


	public function index()
	{
		$this->load->view('back/css/header');
		$this->load->view('dasbor');
		$this->load->view('back/css/footer');

	}
}
