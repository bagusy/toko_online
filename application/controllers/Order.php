<?php

/**
* 
*/
class Order extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('city_model');
		$this->load->model('order_model');
		$this->load->model('setting_model');
		$this->load->model('bank_model');
	}
	public function index()
	{
		
		$data = array();
		$q = $this->db->get('orders');
		$data['order'] = $q->result_array();

		$data['site_title'] = $this->setting_model->getName('site_title');
		

		$this->load->view('front/header', $data);
		$this->load->view('front/order', $data);
		$this->load->view('front/footer', $data);
	}

	public function item()
	{
		$this->load->model('produk_model');
		$id = $this->uri->segment(2);
		$data['id'] = $id;
		$data['produk'] = $this->produk_model->getId($id);
		$data['site_title'] = $this->setting_model->getName('site_title');

		$this->load->view('front/header',$data);
		$this->load->view('front/order',$data);
		$this->load->view('front/footer',$data);

	}

	public function add()
	{
		$this->load->model('order_model');
		$this->load->model('city_model');
		$data= array();

		$this->load->view('front/add_order',$data);

	}

	public function action_add()
	{
		$data= array(
			'id_order'=>'',
			'date'=>date('Y-m-d H:i:s'),
			'userid'=>'',
			'produkid'=>'',
			'total_produk'=>$this->input->post('total_produk'),
			'biaya'=>$this->input->post('biaya'),
			'status'=>$this->input->post('status'),
			'inv_num'=>$this->input->post('inv_num'),
			'pembayaran'=>$this->input->post('pembayaran'),
			
		);
		$this->db->insert('orders',$data);
		redirect('front/order','refresh');

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
				'id_order'=>$this->input->post('id_order'),
				'date'=>$this->input->post('date'),
				'userid'=>$this->input->post('userid'),
				'produkid'=>$this->input->post('produkid'),
				'total_produk'=>$this->input->post('total_produk'),
				'biaya'=>$this->input->post('biaya'),
				'status'=>$this->input->post('status'),
				'inv_num'=>$this->input->post('inv_num'),
				'pembayaran'=>$this->input->post('pembayaran')
			);


			$this->db->where('id_order',$product_id);
			$str = $this->db->update('orders', $data);
			redirect('orders', 'refresh');

		}
		$data['site_title'] = $this->setting_model->getName('site_title');
		
		$sql = "SELECT * FROM `orders` WHERE `id_order` = '{$product_id}' LIMIT 1";
		$q = $this->db->query($sql);
		$data['orders'] = $q->result_array();
		// print_r($q);
		$this->load->view('back/header',$data);
		$this->load->view('back/update_orders',$data);
		$this->load->view('back/footer',$data);
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where(array('id_order'=>$id));
		$this->db->delete('orders');
		redirect('order','refresh');
	}

}