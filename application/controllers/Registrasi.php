<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
	}

	// halaman regis
	public function index()
	{
		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_pelanggan','Nama Lengkap','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('email','E-mail','required|valid_email|is_unique[pelanggan.email]', 
			array(	'required'		=>	'%s Harus Di Isi',
					'valid_email'	=>	'%s Tidak Valid',
					'is_unique'		=>	'%s Nama Email sudah ada'));

		$valid->set_rules('password','Password','required|min_length[6]|max_length[32]', 
			array(	'required'	=>	'%s Harus Di Isi',
					'min_length'	=>	'%s Minimal 6 karakter',
					'max_length'	=>	'%s Maximal 32 karakter'));

		if ($valid->run()===FALSE) 
		{
			//end validasi
		$data = array(	'title'		=>	'Registrasi Pelanggan',
						'isi'		=>	'registrasi/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
	} else {
		$i = $this->input;
		$data = array(	'nama_pelanggan'	=>	$i->post('nama_pelanggan'),
						'email'				=>	$i->post('email'),
						'password'			=>	$i->post('password'),
						'telepon'			=>	$i->post('telepon'),
						'alamat'			=>	$i->post('alamat'),
						'tanggal_daftar'	=>	date('Y-m-d H:i:s')
					);
		$this->pelanggan_model->tambah($data);
		// buat session login
		$this->session->set_userdata('email', $i->post('email'));
		$this->session->set_userdata('nama_pelanggan', $i->post('nama_pelanggan'));
		// end session
		$this->session->set_flashdata('sukses','Registrasi Berhasil');
		redirect(base_url('registrasi/sukses'),'refresh');
		}
	}

	// sukses
	public function sukses()
	{
		$data = array (	'title'		=>	'Registrasi Berhasil',
						'isi'		=>	'registrasi/sukses'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */