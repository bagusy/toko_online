
<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('login_model');
        // $this->config->load('encryption_key');
    }
 
    function index(){
    	if (false === $this->login_model->checkAuth()) {
        	$this->load->view('back/login');
        } else {
	    	redirect(base_url());
	    }
    }
 
    function auth(){

        $username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
 		$hash_password = $this->login_model->hash_password($password);
 		// echo $hash_password;

        $cek_users = $this->login_model->auth_users($username,$hash_password);
 
        if($cek_users->num_rows() > 0){ //jika user ada

            $data = $cek_users->row_array();
            $this->session->set_userdata('masuk',TRUE);

            $this->session->set_userdata('akses',$data['groups']);
            $this->session->set_userdata('ses_id',$data['userid']);
            $this->session->set_userdata('ses_nama',$data['userid']);
            redirect(base_url());
            // print_r($_SESSION);
 
        }else{ //jika tidak ada

            $url = base_url();
            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
            // redirect($url);
            print_r($_SESSION);

        }
	     
    }
 
    function out(){
        $this->session->sess_destroy();
        $url = base_url('');
        redirect($url);
    }
 
}