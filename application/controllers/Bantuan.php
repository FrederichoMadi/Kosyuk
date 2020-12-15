<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {

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
		$data = array(	'title'	=> 'Bantuan '.$site->namaweb,
						'site' 	=> 	$site, 
						'isi'	=> 'bantuan/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Bantuan.php */
/* Location: ./application/controllers/Bantuan.php */