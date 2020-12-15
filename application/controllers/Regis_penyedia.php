<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_Penyedia extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penyedia_model');
	}

	// halaman regis
	public function index()
	{
		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_pemilik','Nama Lengkap','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('email_pemilik','E-mail','required|valid_email|is_unique[penyedia.email_pemilik]', 
			array(	'required'				=>	'%s Harus Di Isi',
					'valid_email'	=>	'%s Tidak Valid',
					'is_unique'				=>	'%s Nama Email sudah ada'));

		$valid->set_rules('password_pemilik','Password','required|min_length[6]|max_length[32]', 
			array(	'required'		=>	'%s Harus Di Isi',
					'min_length'	=>	'%s Minimal 6 karakter',
					'max_length'	=>	'%s Maximal 32 karakter'));

		if ($valid->run()===FALSE) 
		{
			//end validasi
		$data = array(	'title'		=>	'Registrasi Penyedia',
						'isi'		=>	'regis_penyedia/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
	} else {
		$i = $this->input;
		$data = array(	'nama_pemilik'		=>	$i->post('nama_pemilik'),
						'email_pemilik'		=>	$i->post('email_pemilik'),
						'password_pemilik'	=>	$i->post('password_pemilik'),
						'telepon'			=>	$i->post('telepon'),
						'alamat'			=>	$i->post('alamat'),
						'tanggal_daftar'	=>	date('Y-m-d H:i:s')
					);
		$this->penyedia_model->tambah($data);

		// end session
		$this->session->set_flashdata('sukses','Registrasi Penyedia Berhasil');
		redirect(base_url('regis_penyedia/sukses'),'refresh');
		}
	}

	// sukses
	public function sukses()
	{
		$data = array (	'title'		=>	'Regisistrasi Penyedia Berhasil',
						'isi'		=>	'regis_penyedia/sukses'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Regis_Penyedia.php */
/* Location: ./application/controllers/Regis_Penyedia.php */