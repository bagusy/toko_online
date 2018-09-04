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
	}
	public function index()
	{
		
		$data = array();
		$q = $this->db->get('orders');
		$data['order'] = $q->result_array();

		

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

}