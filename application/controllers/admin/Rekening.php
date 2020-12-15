<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('rekening_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data rekening
	public function index()
	{
		$rekening = $this->rekening_model->listing();

		$data = array(	'title'		=>	'Data Rekening',
						'rekening'	=>	$rekening,
						'isi'		=>	'admin/rekening/list');

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// tambah rekening
	public function tambah()
	{
		
		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_bank','Nama Bank','required|is_unique[rekening.nama_bank]', 
			array(	'required'	=>	'%s Harus Di Isi',
					'is_unique' => '%s Sudah ada, buat nomor rekening baru'
					));


		if ($valid->run()) 
		{
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '5000';//dalam KB
			$config['max_width']  		= '2024';
			$config['max_height'] 		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar')){

			//end validasi 
		$data = array(	'title'		=>	'Tambah Rekening',
						'error' 	=>	 $this->upload->display_errors(),
						'isi'		=>	'admin/rekening/tambah'
					);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
	} else {
		$upload_gambar = array('upload_data' => $this->upload->data());

		// create thumbnail gambar
		$config['image_library']	= 'gd2';
		$config['source_image']		= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
		$config['new_image']		= './assets/upload/image/thumbs/';//lokasi file disimpan
		$config['create_thumb'] 	= TRUE;
		$config['maintain_ratio'] 	= TRUE;
		$config['width']         	= 250;//pixel
		$config['height']       	= 250;//pixel
		$config['thumb_marker']		= '';

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();

		//end create

		$i = $this->input;
		$data = array(	'nama_bank'			=>	$i->post('nama_bank'),
						'urutan' 			=>	$i->post('urutan'), 
						'gambar' 			=>	$upload_gambar['upload_data']['file_name'] 
					);
		$this->rekening_model->tambah($data);
		$this->session->set_flashdata('sukses','Data telah ditambah');
		redirect(base_url('admin/rekening'),'refresh');
		}
	}
		$data = array(	'title'		=>	'Tambah Rekening',
						'isi'		=>	'admin/rekening/tambah'
					);

		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

	// edit rekening
	public function edit($id_rekening)
	{
		$rekening = $this->rekening_model->detail($id_rekening);

		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_bank','Nama Rekening','required', 
			array(	'required'	=>	'%s Harus Di Isi',
					));

		if ($valid->run()) 
		{
			//cek jika gambar diganti
			if (!empty($_FILES['gambar']['name'])) {
				
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '5000';//dalam KB
			$config['max_width']  		= '2024';
			$config['max_height'] 		= '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){

			//end validasi 
		$data = array(	'title'		=>	'Edit Rekening',
						'rekening' 	=>	$rekening, 
						'error' 	=>  $this->upload->display_errors(),
						'isi'		=>	'admin/rekening/edit'
					);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
	} else {

		$upload_gambar = array('upload_data' => $this->upload->data());

		// create thumbnail gambar
		$config['image_library']	= 'gd2';
		$config['source_image']		= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
		$config['new_image']		= './assets/upload/image/thumbs/';
		//lokasi file disimpan
		$config['create_thumb'] 	= TRUE;
		$config['maintain_ratio'] 	= TRUE;
		$config['width']         	= 250;//pixel
		$config['height']       	= 250;//pixel
		$config['thumb_marker']		= '';

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();

		//end create

		$i = $this->input;
		$slug_rekening = url_title($this->input->post('nama_bank'), 'dash', TRUE);

		$data = array(	'id_rekening'	=>	$id_rekening,
						'nama_bank'		=>	$i->post('nama_bank'),
						'urutan'	=>	$i->post('urutan'),
						'gambar' 		=>	$upload_gambar['upload_data']['file_name'] 
					);
		$this->rekening_model->edit($data);
		$this->session->set_flashdata('sukses','Data telah diedit');
		redirect(base_url('admin/rekening'),'refresh');
		}} else{
			// edit rekening tanpa gambar
			$i = $this->input;
		$slug_rekening = url_title($this->input->post('nama_bank'), 'dash', TRUE);

		$data = array(	'id_rekening'	=>	$id_rekening,
						'nama_bank'		=>	$i->post('nama_bank'),
						'urutan'	=>	$i->post('urutan')
						// 'gambar' 	=>	$upload_gambar['upload_data']['file_name'] 
					);
		$this->rekening_model->edit($data);
		$this->session->set_flashdata('sukses','Data telah diedit');
		redirect(base_url('admin/rekening'),'refresh');
		}}
		$data = array(	'title'		=>	'Edit Rekening Kos',
						'rekening' 	=>	$rekening, 
						'isi'		=>	'admin/rekening/edit'
					);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// delete rekening
	public function delete($id_rekening)
	{
		$data = array('id_rekening'=>$id_rekening);
		$this->rekening_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/rekening'),'refresh');
	}

}

/* End of file Rekening.php */
/* Location: ./application/controllers/admin/Rekening.php */