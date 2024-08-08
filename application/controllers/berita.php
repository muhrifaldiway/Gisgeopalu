<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->library("form_validation");
    $this->load->helper('url');
    $this->load->model('tranding_model');
    $this->load->model('bewisata_model');
  }

	public function index()
	{
		$admin['title'] = 'Admin';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		$data['tranding'] = $this->tranding_model->getAllTranding();
    $data['geowisata'] = $this->geowisata_model->getAllGeowisata();

    $this->load->view('templates/admin/header_admin', $admin);
		$this->load->view('templates/admin/side_bar_admin', $admin);
		$this->load->view('templates/admin/top_bar_admin', $admin);

		$this->load->view('berita/index',$data);

		$this->load->view('mapping/footer', $admin);
	}

  public function tranding()
  {
    $admin['title'] = 'Berita Tranding';
    //$admin['user'] = $this->db->get_where('user', ['email' =>
    //$this->session->userdata('email')])->row_array();

    $data['tranding'] = $this->tranding_model->getAllTranding();

    $this->load->view('templates/admin/header_admin', $admin);
    $this->load->view('templates/admin/side_bar_admin', $admin);
    $this->load->view('templates/admin/top_bar_admin', $admin);

    $this->load->view('berita/tranding/index',$data);

    $this->load->view('mapping/footer', $admin);
  }

  public function tambah_tranding()
  {
    $admin['title'] = 'Tambah Data Berita Tranding';
    //$admin['user'] = $this->db->get_where('user', ['email' =>
    //$this->session->userdata('email')])->row_array();

    //$data['tranding'] = $this->tranding_model->getAllTranding();

    $this->load->view('templates/admin/header_admin', $admin);
    $this->load->view('templates/admin/side_bar_admin', $admin);
    $this->load->view('templates/admin/top_bar_admin', $admin);

    $this->load->view('berita/tranding/tambah');

    $this->load->view('mapping/footer', $admin);
  }

  public function addtranding()
  {
    $admin['title'] = 'Tambah Data Berita Tranding';

    $this->load->library("upload");
    $this->load->helper('url');

    $config['upload_path'] = './assets/images/file';
              $config['allowed_types'] = 'gif|jpg|png|jpeg';
              $this->upload->initialize($config);
              $this->upload->do_upload('gambar');
              $image_data = $this->upload->data();
              $pictures = $image_data['file_name'];


    $id = $this->input->post('id');
    $judul = $this->input->post('judul');
    $tanggal = $this->input->post('tanggal');
    $gambar = $pictures;
    $penulis = $this->input->post('penulis');
    $isi = $this->input->post('isi');


    $data = array(
      'judul' => $judul,
      'tanggal' => $tanggal,
      'gambar' => $gambar,
      'penulis' => $penulis,
      'isi' => $isi,
    );

    $this->db->insert('tranding', $data);
    $this->session->set_flashdata('flash','telah di tambahkan');
    redirect('berita/tranding');
  }


  public function Tubah($id)
  {
  $admin['title'] = 'Ubah Data Berita Tranding';

  $data['tranding'] = $this->tranding_model->getTrandingById($id);
  //$this->load->library("form_validation");


//  $admin['user'] = $this->db->get_where('user', ['email' =>
//  $this->session->userdata('email')])->row_array();
    $this->load->view('templates/kordinat/header', $admin);
    $this->load->view('templates/admin/side_bar_admin', $admin);
    $this->load->view('templates/admin/top_bar_admin', $admin);

    $this->load->view('berita/tranding/ubah', $data);

    $this->load->view('templates/kordinat/footer', $admin);

  }

  public function Tupdate()
  {
    $admin['title'] = 'Ubah Data Berita Tranding';

    $this->load->library("upload");
    $this->load->helper('url');

    $config['upload_path'] = './assets/images/file';
              $config['allowed_types'] = 'gif|jpg|png|jpeg';
              $this->upload->initialize($config);
              $this->upload->do_upload('gambar');
              $image_data = $this->upload->data();
              $pictures = $image_data['file_name'];


    $id = $this->input->post('id');
    $judul = $this->input->post('judul');
    $tanggal = $this->input->post('tanggal');
    $gambar = $pictures;
    $penulis = $this->input->post('penulis');
    $isi = $this->input->post('isi');


    $data = array(
      'judul' => $judul,
      'tanggal' => $tanggal,
      'gambar' => $gambar,
      'penulis' => $penulis,
      'isi' => $isi,
    );

    $where = array(
      'id' => $id
    );

    $this->tranding_model->update_data($where,$data,'tranding');
    $this->session->set_flashdata('ubah','telah di ubah');
    redirect('berita/tranding');
  }


	public function Thapus($id)
			{

			$this->tranding_model->hapusDataTranding($id);
			$this->session->set_flashdata('hapus','telah di hapus');
			redirect('berita/tranding');

		}

    public function bewisata()
    {
      $admin['title'] = 'Berita Geowisata';
      //$admin['user'] = $this->db->get_where('user', ['email' =>
      //$this->session->userdata('email')])->row_array();

      $data['bewisata'] = $this->bewisata_model->getAllBewisata();

      $this->load->view('templates/admin/header_admin', $admin);
      $this->load->view('templates/admin/side_bar_admin', $admin);
      $this->load->view('templates/admin/top_bar_admin', $admin);

      $this->load->view('berita/geowisata/index',$data);

      $this->load->view('mapping/footer', $admin);
    }

    public function tambah_bewisata()
    {
      $admin['title'] = 'Tambah Data Berita Geowisata';
      //$admin['user'] = $this->db->get_where('user', ['email' =>
      //$this->session->userdata('email')])->row_array();

      //$data['tranding'] = $this->tranding_model->getAllTranding();

      $this->load->view('templates/admin/header_admin', $admin);
      $this->load->view('templates/admin/side_bar_admin', $admin);
      $this->load->view('templates/admin/top_bar_admin', $admin);

      $this->load->view('berita/geowisata/tambah');

      $this->load->view('mapping/footer', $admin);
    }

    public function addbewisata()
    {
      $admin['title'] = 'Tambah Data Berita Geowisata';

      $this->load->library("upload");
      $this->load->helper('url');

      $config['upload_path'] = './assets/images/file';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $this->upload->initialize($config);
                $this->upload->do_upload('gambar');
                $image_data = $this->upload->data();
                $pictures = $image_data['file_name'];


      $id = $this->input->post('id');
      $judul = $this->input->post('judul');
      $tanggal = $this->input->post('tanggal');
      $gambar = $pictures;
      $penulis = $this->input->post('penulis');
      $isi = $this->input->post('isi');


      $data = array(
        'judul' => $judul,
        'tanggal' => $tanggal,
        'gambar' => $gambar,
        'penulis' => $penulis,
        'isi' => $isi,
      );

      $this->db->insert('bewisata', $data);
      $this->session->set_flashdata('flash','telah di tambahkan');
      redirect('berita/bewisata');
    }


    public function Bubah($id)
    {
    $admin['title'] = 'Ubah Data Berita Geowisata';

    $data['bewisata'] = $this->bewisata_model->getBewisataById($id);
    //$this->load->library("form_validation");


  //  $admin['user'] = $this->db->get_where('user', ['email' =>
  //  $this->session->userdata('email')])->row_array();
      $this->load->view('templates/kordinat/header', $admin);
      $this->load->view('templates/admin/side_bar_admin', $admin);
      $this->load->view('templates/admin/top_bar_admin', $admin);

      $this->load->view('berita/geowisata/ubah', $data);

      $this->load->view('templates/kordinat/footer', $admin);

    }

    public function Bupdate()
    {
      $admin['title'] = 'Ubah Data Berita Geowisata';

      $this->load->library("upload");
      $this->load->helper('url');

      $config['upload_path'] = './assets/images/file';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $this->upload->initialize($config);
                $this->upload->do_upload('gambar');
                $image_data = $this->upload->data();
                $pictures = $image_data['file_name'];


      $id = $this->input->post('id');
      $judul = $this->input->post('judul');
      $tanggal = $this->input->post('tanggal');
      $gambar = $pictures;
      $penulis = $this->input->post('penulis');
      $isi = $this->input->post('isi');


      $data = array(
        'judul' => $judul,
        'tanggal' => $tanggal,
        'gambar' => $gambar,
        'penulis' => $penulis,
        'isi' => $isi,
      );

      $where = array(
        'id' => $id
      );

      $this->bewisata_model->update_data($where,$data,'bewisata');
      $this->session->set_flashdata('ubah','telah di ubah');
      redirect('berita/bewisata');
    }


  	public function Bhapus($id)
  			{

  			$this->bewisata_model->hapusDataBewisata($id);
  			$this->session->set_flashdata('hapus','telah di hapus');
  			redirect('berita/bewisata');

  		}



}
