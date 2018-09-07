<?php
/**
* 
*/
class Bank extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('bank_model');
		$this->load->model('setting_model');
	}
	public function index()
	{
		$data = array();
		$q = $this->db->get('bank');
		$data['bank'] = $q->result_array();

		$data['site_title'] = $this->setting_model->getName('site_title');
		
		$this->load->view('back/header', $data);
		$this->load->view('back/bank', $data);
		$this->load->view('back/footer', $data);
	}
	public function add()
	{
		$this->load->model('bank_model');
		$data= array();

		$data['site_title'] = $this->setting_model->getName('site_title');

		$this->load->view('back/header',$data);
		$this->load->view('back/add_bank',$data);
		$this->load->view('back/footer',$data);
	}
	public function action_add()
	{
		$data= array(
			'id_bank'=>'',
			'date'=>date('Y-m-d H:i:s'),
			'bank'=>$this->input->post('nama_bank'),
			'account_name'=>$this->input->post('nama_pemilik'),
			'account_number'=>$this->input->post('nomor_rekening'),
			'moota_bank_id'=>'',
		);
		$this->db->insert('bank',$data);
		redirect('bank','refresh');
	}
	public function update(){
		$this->load->model('bank_model');
		$data= array();
		$id_bank = $this->uri->segment(3, 0);
		// echo $product_id;
		if (isset($_POST['update'])) {
			$data= array(
				'id_bank'=>'',
				'date'=>date('Y-m-d H:i:s'),
				'bank'=>$this->input->post('bank'),
				'account_name'=>$this->input->post('account_name'),
				'account_number'=>$this->input->post('account_number'),
				'moota_bank_id'=>'',
			);
			$this->db->where('id_bank',$account_number);
			$str = $this->db->update('bank', $data);
			redirect('bank', 'refresh');
		}
		$sql = "SELECT * FROM `bank` WHERE `id_bank` = '{$account_number}' LIMIT 1";
		$q = $this->db->query($sql);
		$data['bank'] = $q->result_array();

		$data['site_title'] = $this->setting_model->getName('site_title');

		$this->load->view('back/header',$data);
		$this->load->view('back/bank',$data);
		$this->load->view('back/footer',$data);
	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where(array('id_bank'=>$id));
		$this->db->delete('bank');
		redirect('bank','refresh');
	}
}