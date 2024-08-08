<?php

class gisgeo_model extends CI_Model {

	public function getAllGis()
	{
			$this->db->select('*');
			$this->db->from('kordinat');
			return $this->db->get()->result();
	}

	public function tambahDatagis()
	{
		$data = [

			"NIK" => $this->input->post('NIK', true),
			"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP', true),
			"ALAMAT" => $this->input->post('ALAMAT', true),
			"JENIS_KELAMIN" => $this->input->post('JENIS_KELAMIN'),
			"TANGGAL" => $this->input->post('TANGGAL', true),

		];

		$this->db->insert('gis', $data);

	}

	public function hapusDatagis($id)
	{
		$this->db->where('NIK',$id);
		$this->db->delete('gis');
	}

	public function getgisById($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('gis')->result_array();

	}

	public function ubahDatagis()
	{
		$data = [

			"NIK" => $this->input->post('NIK', true),
			"NAMA_LENGKAP" => $this->input->post('NAMA_LENGKAP', true),
			"ALAMAT" => $this->input->post('ALAMAT', true),
			"JENIS_KELAMIN" => $this->input->post('JENIS_KELAMIN'),
			"TANGGAL" => $this->input->post('TANGGAL', true),

		];

		$this->db->where('NIK', $this->input->post('NIK'));
		$this->db->update('gis', $data);

	}
}
