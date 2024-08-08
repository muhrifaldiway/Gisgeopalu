<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class geowisata extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('gisgeo_model');
		$this->load->model('kordinat_model');
		$this->load->helper('text');

	}

	public function index()
	{
		$data['title'] = 'Geowisata Palu';
		$this->load->helper('text');
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		$data['wisata'] = $this->gisgeo_model->getAllGis();
		$data['geowisata'] = $this->kordinat_model->getAllKordinat();
		$this->load->view('beranda/index',$data);

	}


  public function wisata($id)
  {
    $data['title'] = 'Geowisata Palu';
    //$admin['user'] = $this->db->get_where('user', ['email' =>
    //$this->session->userdata('email')])->row_array();

    $data['geowisata'] = $this->kordinat_model->getKordinatById($id);
    $this->load->view('beranda/index2',$data);
    
    
  }

	public function detail()
	{
		$data['title'] = 'Geowisata Palu';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		$data['wisata'] = $this->gisgeo_model->getAllGis();
		$data['bewisata'] = $this->bewisata_model->getAllBewisata();
		$data['tranding'] = $this->tranding_model->getAllTranding();

		$this->load->view('beranda/index2',$data);

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
