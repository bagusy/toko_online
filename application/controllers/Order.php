<?php

/**
* 
*/
class Order extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->model('order_model');
		$data = array();
		$q = $this->db->get('orders');
		$data['order'] = $q->result_array();

		$this->load->view('front/header', $data);
		$this->load->view('front/order', $data);
		$this->load->view('front/footer', $data);
	}
	public function add()
	{
		$this->load->model('order_model');
		$data= array();
		$this->load->view('front/header',$data);
		$this->load->view('front/add_order',$data);
		$this->load->view('front/footer',$data);
	}

	public function action_add()
	{
		$data= array(
			'id_order'=>$this->input->post('id_order'),
			'date'=>$this->input->post('date'),
			'userid'=>$this->input->post('userid'),
			'produkid'=>$this->input->post('produkid'),
			'total_produk'=>$this->input->post('total_produk'),
			'biaya'=>$this->input->post('biaya'),
			'status'=>$this->input->post('status'),
			'inv_num'=>$this->input->post('inv_num'),
			'pembayaran'=>$this->input->post('pembayaran'),
			
		);
		$this->db->insert('orders',$data);
		redirect('order','refresh');

	}

}