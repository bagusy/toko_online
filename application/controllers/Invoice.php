<?php

/**
* 
*/
class Invoice extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index ()
	{
		$data = array();
		$q = $this->db->get('invoice');
		$data['invoice'] = $q->result_array();

		$this->load->view('back/header', $data);
		$this->load->view('back/invoice', $data);
		$this->load->view('back/footer', $data);
	}

	public function detail()
	{
		$data = array();
		$q = $this->db->get('orders');
		$data['orders'] = $q->result_array();

		// $data['invoice'] = $this->order_model->get_invoice_by_id($inv_num);
        // $data['orders']  = $this->order_model->get_orders_by_invoice($inv_num);
		
		$this->load->view('back/header',$data);
		$this->load->view('back/detail_invoice',$data);
		$this->load->view('back/footer',$data);
	}
}