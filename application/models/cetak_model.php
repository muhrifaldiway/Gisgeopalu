<?php

class cetak_model extends CI_Model {
	
	public function getAllCetak()
	{
				
			return $this->db->get('cetak')->result_array();
	}

	public function tambahDataCetak()
	{
		$data = [

			"NIK" => $this->input->post('NIK', true),
			"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP', true),
			"ALAMAT" => $this->input->post('ALAMAT', true),
			"JENIS_KELAMIN" => $this->input->post('JENIS_KELAMIN'),
			"TANGGAL" => $this->input->post('TANGGAL', true),
			
		];

		$this->db->insert('cetak', $data);

	}

	public function hapusDataCetak($id)
	{
		$this->db->where('NIK',$id);
		$this->db->delete('cetak');
	}

	public function getCetakById($id)
	{
		$this->db->where('NIK',$id);
		return $this->db->get('cetak')->result_array();
		
	}

	public function ubahDataCetak()
	{
		$data = [

			"NIK" => $this->input->post('NIK', true),
			"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP', true),
			"ALAMAT" => $this->input->post('ALAMAT', true),
			"JENIS_KELAMIN" => $this->input->post('JENIS_KELAMIN'),
			"TANGGAL" => $this->input->post('TANGGAL', true),
			
		];

		$this->db->where('NIK', $this->input->post('NIK'));
		$this->db->update('cetak', $data);

	}
}
    