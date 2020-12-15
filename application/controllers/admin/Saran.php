<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('saran_model');
		$this->load->model('pelanggan_model');
	}

	public function index()
	{
		$saran = $this->saran_model->listing();

		$data = array (	'title' =>	'Saran Pelanggan',
						'saran'	=>	$saran,
						'isi'	=>	'admin/saran/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// TAMBAH SARAN
	public function tambah()
	{
		$pelanggan = $this->pelanggan_model->listing();

		$valid = $this->form_validation;

		$valid->set_rules('saran', 'Saran', 'required', array(	'required'	=>	'%s Harus diisi'));

		if($valid->run()===FALSE)
		{
			$data = array (	'title' =>	'Tambah Saran',
						'pelanggan'	=>	$pelanggan,
						'isi'		=>	'admin/saran/tambah'
					);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$data = array(	'id_pelanggan' 	=>	$this->input->post('id_pelanggan'),
							'saran'			=>	$this->input->post('saran')
						);

			$this->saran_model->tambah($data);
			$this->session->set_flashdata('sukses','Data saran telah ditambah');
			redirect(base_url('admin/saran'),'refresh');
		}


		




	}

}

/* End of file Saran.php */
/* Location: ./application/controllers/admin/Saran.php */