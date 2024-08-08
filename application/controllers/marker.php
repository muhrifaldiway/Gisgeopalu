<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class marker extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->library("form_validation");
    $this->load->helper('url');
    //$this->load->model('wisata_model');
    $this->load->model('kordinat_model');
  }

	public function index()
	{
		$admin['title'] = 'Tambah data marker';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();
  	$data['kordinat'] = $this->kordinat_model->getAllKordinat();

    $this->load->view('templates/kordinat/header', $admin);
		$this->load->view('templates/admin/side_bar_admin', $admin);
		$this->load->view('templates/admin/top_bar_admin', $admin);

		$this->load->view('marker/index',$data);

		$this->load->view('templates/kordinat/footer', $data, FALSE);

}



public function add()
{
  $admin['title'] = 'Tambah Data Kordinat';

  $this->load->library("upload");
  $this->load->helper('url');

  $config['upload_path'] = './assets/images/file';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar');
            $image_data = $this->upload->data();
            $pictures = $image_data['file_name'];
  $config['upload_path'] = './assets/images/file';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar2');
            $image_data = $this->upload->data();
            $pictures2 = $image_data['file_name'];
  $config['upload_path'] = './assets/images/file';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar3');
            $image_data = $this->upload->data();
            $pictures3 = $image_data['file_name'];
  $config['upload_path'] = './assets/images/file';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar4');
            $image_data = $this->upload->data();
            $pictures4 = $image_data['file_name'];
  $config['upload_path'] = './assets/images/file';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar5');
            $image_data = $this->upload->data();
            $pictures5 = $image_data['file_name'];
  $config['upload_path'] = './assets/images/file';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar6');
            $image_data = $this->upload->data();
            $pictures6 = $image_data['file_name'];
            
              

  $id = $this->input->post('id');
  $lat_long = $this->input->post('lat_long');
  $long_lat = $this->input->post('long_lat');
  $nama_tempat = $this->input->post('nama_tempat');
  $gambar = $pictures;
  $gambar2 = $pictures2;
  $gambar3 = $pictures3;
  $gambar4 = $pictures4;
  $gambar5 = $pictures5;
  $gambar6 = $pictures6;
  $tanggal = $this->input->post('tanggal');
  $keterangan = $this->input->post('keterangan');


  $data = array(
    'lat_long' => $lat_long,
    'long_lat' => $long_lat,
    'nama_tempat' => $nama_tempat,
    'gambar' => $gambar,
    'gambar2' => $gambar2,
    'gambar3' => $gambar3,
    'gambar4' => $gambar4,
    'gambar5' => $gambar5,
    'gambar6' => $gambar6,
    'tanggal' => $tanggal,
    'keterangan' => $keterangan,

  );

  $this->db->insert('kordinat', $data);
  $this->session->set_flashdata('flash','telah di tambahkan');
  redirect('marker');
}




}
