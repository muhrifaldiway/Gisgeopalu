<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mapping extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->library("form_validation");
    $this->load->helper('url');
    $this->load->model('kordinat_model');
  }

	public function index()
	{
		$admin['title'] = 'Admin';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		$data['mapping'] = $this->kordinat_model->getAllKordinat();

    $this->load->view('templates/admin/header_admin', $admin);
		$this->load->view('templates/admin/side_bar_admin', $admin);
		$this->load->view('templates/admin/top_bar_admin', $admin);

		$this->load->view('mapping/index',$data);

		$this->load->view('mapping/footer', $admin);
	}


  public function ubah($id)
  {
  $admin['title'] = 'Ubah Data Marker';

  $data['mapping'] = $this->kordinat_model->getKordinatById($id);
  //$this->load->library("form_validation");


//  $admin['user'] = $this->db->get_where('user', ['email' =>
//  $this->session->userdata('email')])->row_array();
    $this->load->view('templates/kordinat/header', $admin);
    $this->load->view('templates/admin/side_bar_admin', $admin);
    $this->load->view('templates/admin/top_bar_admin', $admin);

    $this->load->view('mapping/ubah', $data);

    $this->load->view('templates/kordinat/footer', $admin);

  }

  public function update()
  {
    $admin['title'] = 'Ubah Data Kordinat';

    $this->load->library("upload");
    $this->load->helper('url');

    $config['upload_path'] = './assets/images/file';
              $config['allowed_types'] = 'gif|jpg|png|jpeg';
              $this->upload->initialize($config);
              $this->upload->do_upload('gambar');
              $image_data = $this->upload->data();
              $pictures = $image_data['file_name'];


    $id = $this->input->post('id');
    $lat_long = $this->input->post('lat_long');
    $long_lat = $this->input->post('long_lat');
    $nama_tempat = $this->input->post('nama_tempat');
    $gambar = $pictures;
    $keterangan = $this->input->post('keterangan');


    $data = array(
      'lat_long' => $lat_long,
      'long_lat' => $long_lat,
      'nama_tempat' => $nama_tempat,
      'gambar' => $gambar,
      'keterangan' => $keterangan,

    );

    $where = array(
      'id' => $id
    );

    $this->kordinat_model->update_data($where,$data,'kordinat');
    $this->session->set_flashdata('ubah','telah di ubah');
    redirect('mapping');
  }


	public function hapus($id)
			{

			$this->kordinat_model->hapusDataKordinat($id);
			$this->session->set_flashdata('hapus','telah di hapus');
			redirect('mapping');

		}



}
