<?php

class user_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	public function getAllUser()
	{

			return $this->db->get('user')->result_array();
	}

	public function getAllRole()
	{

			return $this->db->get('user_role')->result_array();
	}


	public function getUserById($id)
	{

		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function ubahDataUser()
	{
		$data = [

      "username" => $this->input->post('username', true),
      "email" => $this->input->post('email', true),
			'password' =>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      


		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);


	}


	public function join()
	{
		$this->db->select('*');
		 $this->db->from('user_role');
		 $this->db->join('user','user.role_id = user_role.id');
		 $query = $this->db->get();
		 return $query;
	}


	function register($nama,$username,$password){
		$data = array(
			'name' =>$name,
			'email' =>$email,
			'password' =>password_hash($password,PASSWORD_DEFAULT)
		);
		$this->db->insert('user',$data);
	}

	public function hapusDataUser($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user');
	}

	function jumlah_user(){

		$query = $this->db->get('user');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }

}



}
