<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambil extends CI_Controller {
	
    
	public function index()
	{
		$admin['title'] = 'Daftar Cetak KTP-EL';
		//$admin['user'] = $this->db->get_where('user', ['email' => 
		//$this->session->userdata('email')])->row_array();

		//$data['pasien'] = $this->Pasien_model->getAllPasien();

		$this->load->view('templates/admin/header_admin', $admin);
		$this->load->view('templates/admin/side_bar_admin', $admin);
		$this->load->view('templates/admin/top_bar_admin', $admin);

		$this->load->view('ambil/index');
		
		$this->load->view('templates/admin/footer_admin', $admin);
	}
    
    
}
