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

		$this->load->view('back/css/header', $data);
		$this->load->view('back/css/user', $data);
		$this->load->view('back/css/footer', $data);
	}
	public function add()
	{
		$data= array();
		$this->load->view('back/css/header',$data);
		$this->load->view('back/css/add_user',$data);
		$this->load->view('back/css/footer',$data);
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