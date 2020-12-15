<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// untuk admin
class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        // load data model user
        $this->CI->load->model('user_model');
	}

	// fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);
		// jika ada data user, maka create session login
		if ($check) 
		{
			$id_user		=	$check->id_user;
			$nama			=	$check->nama;
			$akses_level	=	$check->akses_level;
			// buat session
			$this->CI->session->set_userdata('id_user', $id_user);
			$this->CI->session->set_userdata('nama', $nama);
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('akses_level', $akses_level);
			// redirect ke halaman admin yang di proteksi
			redirect(base_url('admin/dasbor'),'refresh');
		}else{
			// kalau tidak ada, login lagi
			$this->CI->session->set_flashdata('warning','Username atau Password salah');
			redirect(base_url('login'),'refresh');
		}
	}

	public function cek_login()
	{
		// mengecek session, jika belum ke halaman login
		if($this->CI->session->userdata('username') == "") 
		{
			$this->CI->session->flashdata('warning','Anda belum login');
			redirect(base_url('login'),'refresh');
		} 

	}

	// logout akun
	public function logout()
	{
		// membuang session dengan unset
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama' );
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		// setelah logout
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(base_url('login'),'refresh');

	}
	




	

}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
