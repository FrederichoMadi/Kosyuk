<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kos_model');
		$this->load->model('wilayah_model');
		$this->load->model('konfigurasi_model');
	}

	// Halaman Utama Website
	public function index()
	{
		$site 		= $this->konfigurasi_model->listing();
		$wilayah 	= $this->wilayah_model->listing();
		$kos 		= $this->kos_model->home();
		$data = array(	'title'		=>		$site->namaweb,
						'keywords'  =>		$site->keywords,
						'deskripsi' => 		$site->deskripsi,
						'site' 		=>		$site,
						'wilayah' 	=>		$wilayah,
						'kos' 		=>		$kos, 	
						'isi'		=>		'home/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */