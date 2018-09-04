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
		$this->load->view('back/header', $data);
		$this->load->view("back/kategori", $data);
		$this->load->view('back/footer', $data);
	}

	public function add()
	{
		$this->load->model('kategori_model');
		$data= array();

        $this->load->view('back/header',$data);
        $this->load->view('back/add_kategori',$data);
        $this->load->view('back/footer',$data);
	}

	public function action_add()
	{
		$data= array(
			'id_kategori'=>$this->input->post('id_kategori'),
			'name'=>$this->input->post('name'),
			'parent'=>$this->input->post('parent')
		);
		$this->db->insert('kategori',$data);
		redirect('kategori','refresh');

	}
	public  function update(){
		$data= array();
        $this->load->model('kategori_model');

		$categori_id = $this->uri->segment(3, 0);
		// echo $categori_id;

		if (isset($_POST['update'])) {
			$data= array(
			'id_kategori'=>$this->input->post('id_kategori'),
			'name'=>$this->input->post('name'),
			'parent'=>$this->input->post('parent')
			);

			$this->db->where('id_kategori',$categori_id);
			$str = $this->db->update('kategori', $data);
			redirect('kategori', 'refresh');

		}

		$sql = "SELECT * FROM `kategori` WHERE `id_kategori` = '{$categori_id}' LIMIT 1";
		$q = $this->db->query($sql);
		$data['kategori'] = $q->result_array();
		// print_r($q);
		$this->load->view('back/header',$data);
		$this->load->view('back/update_kategori',$data);
		$this->load->view('back/footer',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
		redirect('kategori','refresh');
	}
}