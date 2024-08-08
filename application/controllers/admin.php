<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('gisgeo_model');

	}

	public function index()
	{
		$admin['title'] = 'Admin';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		$data['wisata'] = $this->gisgeo_model->getAllGis();

		$this->load->view('templates/admin/header_admin', $admin);
		$this->load->view('templates/admin/side_bar_admin', $admin);
		$this->load->view('templates/admin/top_bar_admin', $admin);

		$this->load->view('admin/index',$data);

		$this->load->view('templates/admin/footer_admin', $data, FALSE);
	}

	public function geowisata()
	{
		//$data = $this->gisgeo_model->getAllGis();
		$admin['title'] = 'Admin';
		$data = array(
			'wisata' => $this->gisgeo_model->getAllGis()
		);

		$this->load->view('templates/admin/header_admin', $admin);
		$this->load->view('templates/admin/side_bar_admin', $admin);
		$this->load->view('templates/admin/top_bar_admin', $admin);
			$this->load->view('map/index',$data);
		$this->load->view('templates/admin/footer_admin', $data);
		//echo json_encode($data);
	}


}
