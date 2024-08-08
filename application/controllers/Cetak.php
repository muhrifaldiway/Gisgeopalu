<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
	
    public function __construct()
	{
		parent::__construct();
		
        $this->load->model('cetak_model');
		
		$this->load->model('ambil_model');
		
		$this->load->library("form_validation"); 
	}
    
	public function index()
	{
		$admin['title'] = 'Daftar Cetak KTP-EL';
		
        $admin['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['cetak'] = $this->cetak_model->getAllCetak();
        
        //var_dump ($data);

		$this->load->view('templates/admin/header_admin', $admin);
		$this->load->view('templates/admin/side_bar_admin', $admin);
		$this->load->view('templates/admin/top_bar_admin', $admin);

		$this->load->view('cetak/index', $data);
		
		$this->load->view('templates/admin/footer_admin', $admin);
	}
    
    public function Cetak_KTP()
	{
		
		$data['cetak'] = $this->cetak_model->getAllCetak();

		$admin['title'] = 'Cetak';
		$admin['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		

		$this->load->view('templates/admin/header_admin', $admin);
		$this->load->view('templates/admin/side_bar_admin', $admin);
		$this->load->view('templates/admin/top_bar_admin', $admin);
		
		$this->load->view('admin/cetak/index');

		$this->load->view('templates/admin/footer_admin', $admin);
	}
    
    public function tambah()
	{
		$admin['title'] = 'tambah data Cetak';

		$data['cetak'] = $this->cetak_model->getAllCetak();


		$admin['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();


		$this->form_validation->set_rules('NIK','NIK','required|is_unique[cetak.NIK]',

			[

				'is_unique' => 'NIK ini sudah ada !'

			]);

		$this->form_validation->set_rules('NAMA_LENGKAP','NAMA_LENGKAP','required');
		$this->form_validation->set_rules('ALAMAT','ALAMAT','required');
		$this->form_validation->set_rules('JENIS_KELAMIN','JENIS_KELAMIN','required');
		$this->form_validation->set_rules('TANGGAL','TANGGAL','required');

		if($this->form_validation->run() == FALSE) {

			$this->load->view('templates/admin/header_admin', $admin);
			$this->load->view('templates/admin/side_bar_admin', $admin);
			$this->load->view('templates/admin/top_bar_admin', $admin);
			
			$this->load->view('cetak/tambah', $data);

			$this->load->view('templates/admin/footer_admin', $admin);
			
	} else {
		$this->cetak_model->tambahDataCetak();
		$this->session->set_flashdata('flash','telah di tambahkan');
		redirect('Cetak/index');
	}

}
    
    public function detail($id)
		{
			$admin['title'] = 'Detail Cetak';
			$admin['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();

			$cetak = $this->cetak_model->getCetakById($id);
			
            $data['cetak'] = $cetak[0];
		      	
        
			$this->load->view('templates/admin/header_admin', $admin);
			$this->load->view('templates/admin/side_bar_admin', $admin);
			$this->load->view('templates/admin/top_bar_admin', $admin);
			
			$this->load->view('Cetak/detail', $data);
			
			$this->load->view('templates/admin/footer_admin', $admin);
	}
    
    public function ubah($id)
		{
		//echo $id;
		
		$admin['title'] = 'Ubah Cetak';
		$admin['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();

		
		$cetak = $this->cetak_model->getCetakById($id);

		$data['cetak'] = $cetak[0];

		//$data['dokter'] = $this->Dokter_model->getAllDokter($id);
		

		$data['jenis_kelamin'] = ['( L ) Laki-Laki','( P ) Perempuan'];

		$this->load->library("form_validation"); 

		$this->form_validation->set_rules('NIK','NIK','required');

		$this->form_validation->set_rules('NAMA_LENGKAP','NAMA_LENGKAP','required');
		
		$this->form_validation->set_rules('ALAMAT','ALAMAT','required');

		if($this->form_validation->run() == FALSE) {

			$this->load->view('templates/admin/header_admin', $admin);
			$this->load->view('templates/admin/side_bar_admin', $admin);
			$this->load->view('templates/admin/top_bar_admin', $admin);
			
			$this->load->view('Cetak/ubah', $data);
			
			$this->load->view('templates/admin/footer_admin', $admin);

	} else {
		$this->cetak_model->ubahDataCetak($id);
		$this->session->set_flashdata('ubah','telah di ubah');
		redirect('Cetak');
	}

	}
	
	public function hapus($id)
		{
		
		$this->cetak_model->hapusDataCetak($id);
		$this->session->set_flashdata('hapus','telah di hapus');
		redirect('Cetak');
		
	}


  public function ambil($id)
		{
		//echo $id;
		
		$admin['title'] = 'Ambil Cetak';
		$admin['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();

		
		$cetak = $this->cetak_model->getCetakById($id);

		$data['cetak'] = $cetak[0];

		//$data['dokter'] = $this->Dokter_model->getAllDokter($id);
		

		$data['jenis_kelamin'] = ['( L ) Laki-Laki','( P ) Perempuan'];

		$this->load->library("form_validation"); 

		$this->form_validation->set_rules('NIK','NIK','required');

		$this->form_validation->set_rules('NAMA_LENGKAP','NAMA_LENGKAP','required');
		
		$this->form_validation->set_rules('ALAMAT','ALAMAT','required');

		if($this->form_validation->run() == FALSE) {

			$this->load->view('templates/admin/header_admin', $admin);
			$this->load->view('templates/admin/side_bar_admin', $admin);
			$this->load->view('templates/admin/top_bar_admin', $admin);
			
			$this->load->view('Cetak/ambil', $data);
			
			$this->load->view('templates/admin/footer_admin', $admin);

	} else {
		$this->cetak_model->ambilDataCetak($id);
		$this->session->set_flashdata('ambil','telah di ubah');
		redirect('Cetak');
	}

	

}

}
