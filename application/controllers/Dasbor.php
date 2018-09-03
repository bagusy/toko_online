<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	function __construct(){
        parent::__construct();

        $this->load->model('login_model');
        // $this->config->load('encryption_key');
    }

	public function index()
	{
		if ($this->login_model->checkAuth()) {
			$this->load->view('back/header');
			$this->load->view('dasbor');
			$this->load->view('back/footer');
		} else{
			redirect(base_url().'login');
		}

	}
}
