<?php

/**
* 
*/
class Produk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index ()
	{
		$data = array();
		$q = $this->db->get('produk');
		$data['produk'] = $q->result_array();
	

		$this->load->view('back/header', $data);
		$this->load->view('back/produk', $data);
		$this->load->view('back/footer', $data);
	}

	public function add()
	{
		$this->load->model('kategori_model');
		$data= array();
		
		if (isset($_POST['save'])) {
			$data= array(
				'id_kategori'=>$this->input->post('id_kategori'),
				'name'=>$this->input->post('name'),
				'parent'=>$this->input->post('parent')
			);
			$this->db->insert('kategori',$data);
		}
		$this->load->view('back/header',$data);
		$this->load->view('back/add_produk',$data);
		$this->load->view('back/footer',$data);
	}

	public function action_add()
	{

		$data= array(
			'id_produk'=>$this->input->post('id_produk'),
			'name'=>$this->input->post('name'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'kategori'=>$this->input->post('kategori'),
			'sku'=>$this->input->post('sku'),
			'gambar_produk'=>$this->input->post('gambar_produk'),
			'berat'=>$this->input->post('berat'),
			'stok'=>$this->input->post('stok'),
			'url_drop'=>$this->input->post('url_drop'),
			'harga_drop'=>$this->input->post('harga_drop'),
			'harga'=>$this->input->post('harga'),
			'harga2'=>$this->input->post('harga2'),
			'asal_pengiriman'=>$this->input->post('asal_pengiriman')
		);
		$this->db->insert('produk',$data);
		redirect('produk','refresh');

	}
	public  function update(){
		$this->load->model('kategori_model');
		$data= array();

		if (isset($_POST['save'])) {
			$data= array(
				'id_kategori'=>$this->input->post('id_kategori'),
				'name'=>$this->input->post('name'),
				'parent'=>$this->input->post('parent')
			);
			$this->db->insert('kategori',$data);
		}

		$product_id = $this->uri->segment(3, 0);
		// echo $product_id;

		if (isset($_POST['update'])) {
			$data= array(
				'name'=>$this->input->post('name'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'kategori'=>$this->input->post('kategori'),
				'sku'=>$this->input->post('sku'),
				'gambar_produk'=>$this->input->post('gambar_produk'),
				'berat'=>$this->input->post('berat'),
				'stok'=>$this->input->post('stok'),
				'url_drop'=>$this->input->post('url_drop'),
				'harga_drop'=>$this->input->post('harga_drop'),
				'harga'=>$this->input->post('harga'),
				'harga2'=>$this->input->post('harga2'),
				'asal_pengiriman'=>$this->input->post('asal_pengiriman')
			);

			$this->db->where('id_produk',$product_id);
			$str = $this->db->update('produk', $data);
			redirect('produk', 'refresh');

		}

		$sql = "SELECT * FROM `produk` WHERE `id_produk` = '{$product_id}' LIMIT 1";
		$q = $this->db->query($sql);
		$data['produk'] = $q->result_array();
		// print_r($q);
		$this->load->view('back/header',$data);
		$this->load->view('back/update_produk',$data);
		$this->load->view('back/footer',$data);
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where(array('id_produk'=>$id));
		$this->db->delete('produk');
		redirect('produk','refresh');
	}
}
