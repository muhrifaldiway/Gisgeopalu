<?php

class bewisata_model extends CI_Model {

	public function getAllBewisata()
	{
			return $this->db->get('bewisata')->result_array();
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapusDataBewisata($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('bewisata');
	}

	public function getBewisataById($id)
	{
		return $this->db->get_where('bewisata', ['id' => $id])->row_array();

	}

}
