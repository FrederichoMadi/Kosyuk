<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarkos extends CI_Controller {

	// load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kos_model');
		$this->load->model('wilayah_model');
	}

	public function index()
	{
		$site = $this->konfigurasi_model->listing();
		$listing_wilayah = $this->kos_model->listing_wilayah();
		$kos = $this->kos_model->home();
		

		$data = array(	'title'		=>	'Daftar Kos '.$site->namaweb,
						'site' 		=> 	$site,
						'kos' 		=> 	$kos,
						'listing_wilayah' 		=> 	$listing_wilayah,
						'isi' 		=>	'daftarkos/list' 
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}


	//listing data wilayah kos
	public function wilayah($slug_wilayah)
	{
		// wilayah detail
		$wilayah 		= $this->wilayah_model->read($slug_wilayah);
		$id_wilayah 	= $wilayah->id_wilayah;

		// data dari web
		$site = $this->konfigurasi_model->listing();
		// Data umum
		$listing_wilayah = $this->kos_model->listing_wilayah();
		$kos = $this->kos_model->wilayah($id_wilayah);

		$data = array(	'title'		=>	'Kos Wilayah '.$wilayah->nama_wilayah,
						'site' 		=> 	$site,
						'kos' 		=> 	$kos,
						'listing_wilayah' 		=> 	$listing_wilayah,
						'isi' 		=>	'daftarkos/list' 
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}



	// detail kos
	public function detail($slug_kos)
	{
		$site 	= $this->konfigurasi_model->listing();
		$kos 	= $this->kos_model->read($slug_kos);
		$id_kos	= $kos->id_kos;
		$gambar	= $this->kos_model->gambar($id_kos);
		$kos_lainnya = $this->kos_model->home();

		$data = array(	'title'		=>	$kos->nama_kos,
						'site' 		=> 	$site,
						'kos' 		=> 	$kos,
						'gambar' 	=>	$gambar,
						'kos_lainnya' => $kos_lainnya,
						'isi' 		=>	'daftarkos/detail' 
					);
		$this->load->view('layout/wrapper', $data, FALSE);

	}

	public function cari()
	{
		
		$listing_wilayah = $this->kos_model->listing_wilayah();
		$nama_kos= $this->input->post('nama_kos');
		$kos = $this->kos_model->cari_kos($nama_kos);

		$data  = array(	'title'	=> 'Daftar kos',
						'kos' 	=>	$kos, 
						'listing_wilayah' => $listing_wilayah,
						'isi' 	=>	'daftarkos/list' 
					);

		$this->load->view('layout/wrapper', $data, FALSE);
		
	}

}

/* End of file Dafatarkos.php */
/* Location: ./application/controllers/Dafatarkos.php */