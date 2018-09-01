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

		

		$this->load->view('back/css/header', $data);
		$this->load->view('back/order', $data);
		$this->load->view('back/css/footer', $data);
	}

	public function item()
	{
		$this->load->model('produk_model');
		$id = $this->uri->segment(2);
		$data['produk'] = $this->produk_model->getId($id);
		$this->load->view('front/header',$data);
		$this->load->view('front/form_order',$data);
		$this->load->view('front/footer',$data);

	}

	public function add()
	{
		$this->load->model('order_model');
		$data= array();
		$this->load->view('back/css/header',$data);
		$this->load->view('back/add_order',$data);
		$this->load->view('back/css/footer',$data);
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
		redirect('back/order','refresh');

	}

}