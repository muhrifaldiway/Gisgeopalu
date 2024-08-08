<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('gisgeo_model');
		$this->load->model('user_model');		

	}

	public function index()
	{
		$data['title'] = 'Login';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
      	$this->form_validation->set_rules('password', 'password', 'trim|required');

      	if ($this->form_validation->run() == FALSE) {

		$data['wisata'] = $this->gisgeo_model->getAllGis();
		$this->load->view('login/index',$data);

		} else {
      		//validasi lolos
      		$this->_login();
      	}
      }

      private function _login()
        {
        	$email = $this->input->post('email');
        	$password = $this->input->post('password');

        	$user = $this->db->get_where('user',['email' => $email])->row_array();


        	//jika user ada

        	if($user) {

        		//jika user aktif

        		if($user['is_active'] == 1){

        			//cek passsword

        			if(password_verify($password, $user['password'])) {

        				$data = [

        					'email' => $user['email'],
        					'role_id' => $user['role_id']
        				];

        				$this->session->set_userdata($data);
        				if ($user['role_id'] == 1) {
        					redirect('geowisata');
        					$this->session->sess_destroy();
        				}
        				 else  {
        					redirect('admin');
        					$this->session->sess_destroy();
        				}

                if ($user['role_id'] == 2) {
        					redirect('admin');
        					$this->session->sess_destroy();
        				}
        				 else  {
        					redirect('geowisata');
        					$this->session->sess_destroy();
        				}

        			} else  {

        				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah !</div>');
        			redirect('login');

        			}

        		} else  {

        			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email belum aktif !</div>');
        			redirect('login');
        		}

        	} else {

        		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email belum terdaftar !</div>');
        			redirect('login');
        	}


    }
	



	public function register()
	{
		//$data = $this->gisgeo_model->getAllGis();
		$data['title'] = 'Register';

			$this->load->view('register/index',$data);

	}

	 public function tambah()
  {
    //$admin['title'] = 'Tambah Data User';
    $data['user'] = $this->user_model->getAllUser();
    //var_dump($data);

    $this->form_validation->set_rules('email','email','required|trim|valid_email|is_unique[user.email]',

    [

      'is_unique' => 'email ini sudah pernah registrasi !'

    ]);


    if ($this->form_validation->run()==FALSE)
      {

        $data['title'] = 'Register';

			$this->load->view('register/index',$data);


      } else {
        $data = [

          'username' => $this->input->post('username'),
          'email' => $this->input->post('email'),
          'password' =>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
          'role_id' => 1,
          'is_active' => 1,

        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">Selamat registrasi anda berhasil ! anda berhasil membuat account . dan silahkan login</div>');
        redirect('login');
    }
  }

   public function logout()
    {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');

      $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">Selamat Anda Berhasil Logout </div>');
        redirect('login');
    }



}
