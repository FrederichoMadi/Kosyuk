<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// untuk penyedia
class Simple_penyedia
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        // load data model user oenyedia
        $this->CI->load->model('penyedia_model');
	}

	// fungsi login
	public function login($email_pemilik,$password_pemilik)
	{
		$check = $this->CI->penyedia_model->login($email_pemilik, $password_pemilik);
		// jika ada data user, maka create session login
		if ($check) 
		{
			$id_penyedia	=	$check->id_penyedia;
			$nama_pemilik	=	$check->nama_pemilik;
			
			// buat session
			$this->CI->session->set_userdata('id_penyedia', $id_penyedia);
			$this->CI->session->set_userdata('nama_pemilik', $nama_pemilik);
			$this->CI->session->set_userdata('email_pemilik', $email_pemilik);
			
			// redirect ke halaman penyedia yang di proteksi
			redirect(base_url('dasbor_penyedia/tambah_kos'),'refresh');
		}else{
			// kalau tidak ada, login lagi
			$this->CI->session->set_flashdata('warning','Username atau Password salah');
			redirect(base_url('penyedia'),'refresh');
		}
	}

	public function cek_login()
	{
		// mengecek session, jika belum ke halaman login
		if($this->CI->session->userdata('email_pemilik') == "") 
		{
			$this->CI->session->flashdata('warning','Anda belum login');
			redirect(base_url('penyedia'),'refresh');
		} 

	}

	// logout akun
	public function logout()
	{
		// membuang session dengan unset
		$this->CI->session->unset_userdata('id_penyedia');
		$this->CI->session->unset_userdata('nama_pemilik' );
		$this->CI->session->unset_userdata('email_pemilik');
	
		// setelah logout
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(base_url('penyedia'),'refresh');

	}
	




	

}

/* End of file Simple_penyedia.php */
/* Location: ./application/libraries/Simple_penyedia.php */
