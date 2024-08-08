<?php if (!defined('BASEPATH'))exit('No direct script access allowed'); 

/**
* 
*/
class access {
	public $user;

	function __construct() {
		$this->CI =& get instance();
		$auth = $this->CI->config->item('auth');

		$this->CI->load->helper('cookie');
		$this->CI->load->model('users_model');

		$this->users_model =& $this->CI->users_model;
	}

	/*CEK LOGIN USER*/

	function login($username, $password) {
		$result = $this->users_model->get_login_info($username);

		if ($result) //result found
		{
			$password = md5($password);
			if ($password === $result->password)
			{
				//SESSION
				$this->CI->session->set_userdata('user_id',$result->user_id);
			}
		}
		return FALSE;
	}

	//CEK APAKAH SUDAH LOGIN

	function is_login(){
		return (($this->CI->session->userdata('user_id'))?TRUE : FALSE);
	}

	//LOGOUT

	function logout(){
		$this->CI->session->unset_userdata('user_id');
	}
}