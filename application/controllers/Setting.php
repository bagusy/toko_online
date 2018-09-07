<?php

/**
 * 
 */
class Setting extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('setting_model');
	}

	public function index ()
	{
		$data = array();
		$q = $this->db->get('setting');
		$data['setting'] = $q->result_array();
	
		if (isset($_POST['updateSetting'])) {
			
			unset($_POST['updateSetting']);
			// print_r($_POST);

			foreach ($_POST as $key => $value) {
				$this->db->where('name', $key);
				$data = array( 
					'name' => $key,
					'value' => $value );
				// $this->setting_model->isExist($key);
				$this->db->update('setting', $data);
			}

		}

		$data['site_title'] = $this->setting_model->getName('site_title');
		$data['tag_line'] = $this->setting_model->getName('tag_line');
		$data['web_address'] = $this->setting_model->getName('web_address');
		$data['domain'] = $this->setting_model->getName('domain');
		$data['default_role'] = $this->setting_model->getName('default_role');
		$data['timezone'] = $this->setting_model->getName('timezone');
		$data['produk_per_halaman'] = $this->setting_model->getName('produk_per_halaman');
		$data['image_width'] = $this->setting_model->getName('image_width');
		$data['image_height'] = $this->setting_model->getName('image_height');



		$this->load->view('back/header', $data);
		$this->load->view('back/setting', $data);
		$this->load->view('back/footer', $data);
	}
}