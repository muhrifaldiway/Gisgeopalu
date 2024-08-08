<?php

class geowisata_model extends CI_Model {

	public function getAllGeowisata()
	{
			return $this->db->get('geowisata')->result_array();
	}

  public function tambahDataGeowisata()
  {
    $data = [

      "lat_long" => $this->input->post('lat_long', true),
			"long_lat" => $this->input->post('long_lat', true),
      "nama_tempat" => $this->input->post('nama_tempat', true),
      "gambar" => $this->input->post('gambar', true),
      "keterangan" => $this->input->post('keterangan', true),


    ];

    $this->db->insert('kordinat', $data);

  }

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapusDataGeowisata($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kordinat');
	}

	public function getGeowisataById($id)
	{
		return $this->db->get_where('kordinat', ['id' => $id])->row_array();

	}

	public function update()
	{
		$data = [

			"lat_long" => $this->input->post('lat_long', true),
			"long_lat" => $this->input->post('long_lat', true),
      "nama_tempat" => $this->input->post('nama_tempat', true),
      "gambar" => $this->input->post('gambar', true),
      "keterangan" => $this->input->post('keterangan', true),


		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kordinat', $data);

	}


}
