<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyedia extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penyedia_model');
	}

	// login penyedia
	public function index()
	{

		// validasi 
		$this->form_validation->set_rules('email_pemilik','E-mail/Username','required', array(	'required'	=>	'%s Harus di Isi'));
		
		$this->form_validation->set_rules('password_pemilik','Password','required', array(	'required'	=>	'%s Harus di Isi'));

		if ($this->form_validation->run()) 
		{
			$email_pemilik 		= $this->input->post('email_pemilik');
			$password_pemilik 	= $this->input->post('password_pemilik');
			// proses ke simple
			$this->simple_penyedia->login($email_pemilik, $password_pemilik);
		}

		// end validasi


		$data = array(	'title'	=>	'Login Penyedia',
						'isi'	=>	'penyedia/list'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function logout()
	{
		// ambil fungsi logout di simple_penyedia yang sudah di set di autoload libraries
		$this->simple_penyedia->logout();
	}

}

/* End of file Penyedia.php */
/* Location: ./application/controllers/Penyedia.php */