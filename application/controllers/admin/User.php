<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data user
	public function index()
	{
		$user = $this->user_model->listing();

		$data = array(	'title'		=>	'Data Pengguna',
						'user'		=>	$user,
						'isi'		=>	'admin/user/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// tambah user
	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama','Nama Lengkap','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('email','E-mail','required|valid_email', 
			array(	'required'		=>	'%s Harus Di Isi',
					'valid_email'	=>	'%s Tidak Valid'));

		$valid->set_rules('username','Username','required|min_length[6]|max_length[32]|is_unique[pemilik_kos.username]', 
			array(	'required'		=>	'%s Harus Di Isi',
					'min_length'	=>	'%s Minimal 6 karakter',
					'max_length'	=>	'%s Maximal 32 karakter',
					'is_unique'		=>	'%s Username sudah ada, coba yang lain'
				));

		$valid->set_rules('password','Password','required|min_length[6]|max_length[32]', 
			array(	'required'	=>	'%s Harus Di Isi',
					'min_length'	=>	'%s Minimal 6 karakter',
					'max_length'	=>	'%s Maximal 32 karakter'));

		if ($valid->run()===FALSE) 
		{
			//end validasi 
		$data = array(	'title'		=>	'Tambah Pengguna',
						'isi'		=>	'admin/user/tambah');

		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
	} else {
		$i = $this->input;
		$data = array(	'nama'				=>	$i->post('nama'),
						'email'				=>	$i->post('email'),
						'username'			=>	$i->post('username'),
						'password'			=>	$i->post('password'),
						'akses_level'		=>	$i->post('akses_level')
					);
		$this->user_model->tambah($data);
		$this->session->set_flashdata('sukses','Data telah ditambah');
		redirect(base_url('admin/user'),'refresh');
		}

	}

	// edit user
	public function edit($id_user)
	{
		$user = $this->user_model->detail($id_user);

		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama','Nama Lengkap','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('email','E-mail','required|valid_email', 
			array(	'required'		=>	'%s Harus Di Isi',
					'valid_email'	=>	'%s Tidak Valid'));

		$valid->set_rules('password','Password','required|min_length[6]|max_length[32]', 
			array(	'required'	=>	'%s Harus Di Isi',
					'min_length'	=>	'%s Minimal 6 karakter',
					'max_length'	=>	'%s Maximal 32 karakter'));

		if ($valid->run()===FALSE) 
		{
			//end validasi 
		$data = array(	'title'		=>	'Edit Pengguna',
						'user' 		=>	$user, 
						'isi'		=>	'admin/user/edit'
					);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
	} else {
		$i = $this->input;
		$data = array(	'id_user'			=>	$id_user,
						'nama'				=>	$i->post('nama'),
						'email'				=>	$i->post('email'),
						'username'			=>	$i->post('username'),
						'password'			=>	$i->post('password'),
						'akses_level'		=>	$i->post('akses_level')
					);
		$this->user_model->edit($data);
		$this->session->set_flashdata('sukses','Data telah diedit');
		redirect(base_url('admin/user'),'refresh');
		}

	}

	// delete user
	public function delete($id_user)
	{
		$data = array('id_user'=>$id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/user'),'refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */