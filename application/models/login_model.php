<?php
/**
* 
*/
class login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function auth_users($username,$password)
	{
        $query = $this->db->query("SELECT * FROM `users` WHERE `userid`='{$username}' AND `password`=('{$password}') LIMIT 1");

        return $query;
    }

    function hash_password($password)
    {

    	$new_password = md5($password.$this->config->item('encryption_key'));

    	return $new_password;
    }

    function checkAuth()
    {
    	$status = $this->session->userdata('masuk');
    	if ($status) {
    		return true;
    	} else {
    		return false;
    	}
    	
    }
 

}
