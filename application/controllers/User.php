<?php

/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data = array();
		$q = $this->db->get('users');
		$data['users'] = $q->result_array();

		$this->load->view('back/css/header');
		$this->load->view('back/user', $data);
		$this->load->view('back/css/footer');
	}
	public function add()
	{
		$this->load->model('user_model');
		$data= array();
		$this->load->view('back/css/header');
		$this->load->view('add_user');
		$this->load->view('back/css/footer');
	}
	public function action_add()
	{
		$data= array(
			'id_user'=>$this->input->post('id_user'),
			'userid'=>$this->input->post('userid'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
			'grup'=>$this->input->post('grup'),
		);
		$this->db->insert('users',$data);
		redirect('user','refresh');
	}
}