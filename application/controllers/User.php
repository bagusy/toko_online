<?php

/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('setting_model');
		$this->load->model('login_model');
	}
	public function index()
	{
		$data = array();
		$q = $this->db->get('users');
		$data['users'] = $q->result_array();

		$this->load->view('back/header', $data);
		$this->load->view('back/user', $data);
		$this->load->view('back/footer', $data);
	}
	public function add()
	{
		$data= array();
		$this->load->view('back/header',$data);
		$this->load->view('back/add_user',$data);
		$this->load->view('back/footer',$data);
	}
	public function action_add()
	{
		$hash_password = $this->login_model->hash_password($this->input->post('password'));
		// print_r($_POST);
		$data= array(
			'id_user'=>$this->input->post('id_user'),
			'userid'=>$this->input->post('userid'),
			'password'=>$hash_password,
			'email'=>$this->input->post('email'),
			'groups'=>$this->input->post('groups'),
		);
		$this->db->insert('users',$data);
		redirect('user','refresh');
	}

	public  function update(){
		$data= array();
        $this->load->model('user_model');

		$id = $this->uri->segment(3, 0);
		// echo $categori_id;

		

		$sql = "SELECT * FROM `users` WHERE `id_user` = '{$id}' LIMIT 1";
		$q = $this->db->query($sql);
		$data['users'] = $q->result_array();
		$data['site_title'] = $this->setting_model->getName('site_title');
		$data['id'] = $id ;
		// print_r($q);
		$this->load->view('back/header',$data);
		$this->load->view('back/update_user',$data);
		$this->load->view('back/footer',$data);
	}

	public function action_update()
	{
		

		$data= array(
		
			'userid'=>$this->input->post('userid'),
			'email'=>$this->input->post('email'),
			'groups'=>$this->input->post('groups'),
		);
	if ($this->input->post('password') != '' ) {
			$hash_password = $this->login_model->hash_password($this->input->post('password'));
			$data['password'] = $hash_password;
		}	
		// print_r($_POST);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('users',$data);
		redirect('user','refresh');
	}
	
		public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where(array('id_user'=>$id));
		$this->db->delete('users');
		redirect('user','refresh');
	}

}