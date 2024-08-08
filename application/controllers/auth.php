<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function construct()
	{
		parent:: __construct();
		$this->load->model('login_model');

	}

	public function index()
	{

	$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email');

	$this->form_validation->set_rules('password', 'Password', 'trim|required');



//	if ($this->form_validation->run() == FALSE) {

		$data['title'] = 'Login';
		$this->load->view('templates/auth/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth/auth_footer');
	//} else {
		//validasi lolos
	//	$this->_login();
	//}

}

    public function register()	{


		$data['title'] = 'Register';
		$this->load->view('templates/auth/auth_header', $data);
		$this->load->view('auth/registration');
		$this->load->view('templates/auth/auth_footer');

	}

	public function simpan_register()	{


		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[user.username]');

		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');

		
		if ($this->form_validation->run()==true)
	   	{
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->login_model->register($nama,$username,$password);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('auth');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}
