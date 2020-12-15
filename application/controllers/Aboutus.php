<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	//load database
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('kos_model');
	// 	$this->load->model('wilayah_model');
	// }

	public function index()
	{
		$site = $this->konfigurasi_model->listing();
		$data = array(	'title'	=> 'About Us '.$site->namaweb,
						'site' 	=> 	$site,
						'isi'	=> 'aboutus/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Aboutus.php */
/* Location: ./application/controllers/Aboutus.php */