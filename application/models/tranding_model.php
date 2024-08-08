<?php

class tranding_model extends CI_Model {

	public function getAllTranding()
	{
			return $this->db->get('tranding')->result_array();
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapusDataTranding($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tranding');
	}

	public function getTrandingById($id)
	{
		return $this->db->get_where('tranding', ['id' => $id])->row_array();

	}

}
