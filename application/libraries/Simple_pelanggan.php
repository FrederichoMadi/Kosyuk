<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// untuk pelanggan
class Simple_pelanggan
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        // load data model user
        $this->CI->load->model('pelanggan_model');
	}

	// fungsi login
	public function login($email,$password)
	{
		$check = $this->CI->pelanggan_model->login($email,$password);
		// jika ada data user, maka create session login
		if ($check) 
		{
			$id_pelanggan	=	$check->id_pelanggan;
			$nama_pelanggan	=	$check->nama_pelanggan;
			
			// buat session
			$this->CI->session->set_userdata('id_pelanggan', $id_pelanggan);
			$this->CI->session->set_userdata('nama_pelanggan', $nama_pelanggan);
			$this->CI->session->set_userdata('email', $email);
			
			// redirect ke halaman admin yang di proteksi
			redirect(base_url('home'),'refresh');
		}else{
			// kalau tidak ada, login lagi
			$this->CI->session->set_flashdata('warning','Username atau Password salah');
			redirect(base_url('masuk'),'refresh');
		}
	}

	public function cek_login()
	{
		// mengecek session, jika belum ke halaman login
		if($this->CI->session->userdata('email') == "") 
		{
			$this->CI->session->flashdata('warning','Anda belum login');
			redirect(base_url('masuk'),'refresh');
		} 

	}

	// logout akun
	public function logout()
	{
		// membuang session dengan unset
		$this->CI->session->unset_userdata('id_pelanggan');
		$this->CI->session->unset_userdata('nama_pelanggan' );
		$this->CI->session->unset_userdata('email');
	
		// setelah logout
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(base_url('masuk'),'refresh');

	}
	




	

}

/* End of file Simple_pelanggan.php */
/* Location: ./application/libraries/Simple_pelanggan.php */
