<?php

class login_model extends CI_Model {
	
	public function __construct() {
		parent:: __construct();
	}

	public function getAllUser()
	{
				
			return $this->db->get('user')->result_array();
	}

	function register($nama,$username,$password){
		$data = array(
			'nama' =>$nama,
			'username' =>$username,
			'password' =>password_hash($password,PASSWORD_DEFAULT)
		);
		$this->db->insert('user',$data);
	}

}