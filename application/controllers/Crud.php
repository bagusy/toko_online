<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$data['content'] = $this->db->get('kategori');
		$this->load->view('crud/index', $data);

	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'produk');
		redirect('crud/index');
	}
	
}

/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */
