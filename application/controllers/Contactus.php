<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('saran_model');
		$this->load->model('kos_model');
		$this->load->model('pelanggan_model');
		//session cek login
		$this->simple_pelanggan->cek_login();
	}

	public function index()
	{
		$site = $this->konfigurasi_model->listing();

		$id_pelanggan = $this->session->userdata('id_pelanggan');
		$valid = $this->form_validation;

		$valid->set_rules('saran','Keluhan','required',array('required'	=>	'%s Wajib diisi'));

		if ($valid->run()===FALSE)
		{
			$data = array(	'title'	=>	'Contact Us'.$site->namaweb,
						'site'	=>	$site,
						'isi'	=>	'contactus/list'
						);
			$this->load->view('layout/wrapper', $data, FALSE);
	
		}else{
		$data = array(	'id_pelanggan'	=>	$id_pelanggan,
							'saran'		=>	$this->input->post('saran')
						);
			$this->saran_model->tambah($data);
			$this->session->set_flashdata('sukses','Terima kasih atas saran anda ^-^');
			redirect(base_url('contactus'),'refresh');

				}
	}

	


}

/* End of file Contactus.php */
/* Location: ./application/controllers/Contactus.php */