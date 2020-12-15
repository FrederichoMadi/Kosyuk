<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('wilayah_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data wilayah
	public function index()
	{
		$wilayah = $this->wilayah_model->listing();

		$data = array(	'title'		=>	'Data Wilayah Kos',
						'wilayah'	=>	$wilayah,
						'isi'		=>	'admin/wilayah/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// tambah wilayah
	public function tambah()
	{
		
		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_wilayah','Nama Wilayah','required|is_unique[wilayah.nama_wilayah]', 
			array(	'required'	=>	'%s Harus Di Isi',
					'is_unique'	=>	'%s Wilayah Sudah Ada'));


		if ($valid->run()) 
		{
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '5000';//dalam KB
			$config['max_width']  		= '2024';
			$config['max_height'] 		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar_wilayah')){

			//end validasi 
		$data = array(	'title'		=>	'Tambah Wilayah Kos',
						'error' 	=>	 $this->upload->display_errors(),
						'isi'		=>	'admin/wilayah/tambah'
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

		$slug_wilayah = url_title($this->input->post('nama_wilayah'), 'dash', TRUE);
		$data = array(	'slug_wilayah'		=>	$slug_wilayah,
						'nama_wilayah'		=>	$i->post('nama_wilayah'),
						'urutan'			=>	$i->post('urutan'),
						'gambar_wilayah' 	=>	$upload_gambar['upload_data']['file_name'] 
					);
		$this->wilayah_model->tambah($data);
		$this->session->set_flashdata('sukses','Data telah ditambah');
		redirect(base_url('admin/wilayah'),'refresh');
		}
	}
		$data = array(	'title'		=>	'Tambah Wilayah Kos',
						'isi'		=>	'admin/wilayah/tambah'
					);

		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

	// edit wilayah
	public function edit($id_wilayah)
	{
		$wilayah = $this->wilayah_model->detail($id_wilayah);

		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_wilayah','Nama Wilayah','required', 
			array(	'required'	=>	'%s Harus Di Isi',
					));

		if ($valid->run()) 
		{
			//cek jika gambar diganti
			if (!empty($_FILES['gambar_wilayah']['name'])) {
				
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '5000';//dalam KB
			$config['max_width']  		= '2024';
			$config['max_height'] 		= '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar_wilayah')){

			//end validasi 
		$data = array(	'title'		=>	'Edit Wilayah Kos',
						'wilayah' 	=>	$wilayah, 
						'error' 	=>  $this->upload->display_errors(),
						'isi'		=>	'admin/wilayah/edit'
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
		$slug_wilayah = url_title($this->input->post('nama_wilayah'), 'dash', TRUE);

		$data = array(	'id_wilayah'		=>	$id_wilayah,
						'slug_wilayah'		=>	$slug_wilayah,
						'nama_wilayah'		=>	$i->post('nama_wilayah'),
						'urutan'			=>	$i->post('urutan'),
						'gambar_wilayah' 	=>	$upload_gambar['upload_data']['file_name'] 
					);
		$this->wilayah_model->edit($data);
		$this->session->set_flashdata('sukses','Data telah diedit');
		redirect(base_url('admin/wilayah'),'refresh');
		}} else{
			// edit wilayah tanpa gambar
			$i = $this->input;
		$slug_wilayah = url_title($this->input->post('nama_wilayah'), 'dash', TRUE);

		$data = array(	'id_wilayah'		=>	$id_wilayah,
						'slug_wilayah'		=>	$slug_wilayah,
						'nama_wilayah'		=>	$i->post('nama_wilayah'),
						'urutan'			=>	$i->post('urutan')
						// 'gambar_wilayah' =>	$upload_gambar['upload_data']['file_name'] 
					);
		$this->wilayah_model->edit($data);
		$this->session->set_flashdata('sukses','Data telah diedit');
		redirect(base_url('admin/wilayah'),'refresh');
		}}
		$data = array(	'title'		=>	'Edit Wilayah Kos',
						'wilayah' 	=>	$wilayah, 
						'isi'		=>	'admin/wilayah/edit'
					);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// delete wilayah
	public function delete($id_wilayah)
	{
		$data = array('id_wilayah'=>$id_wilayah);
		$this->wilayah_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/wilayah'),'refresh');
	}

}

/* End of file Wilayah.php */
/* Location: ./application/controllers/admin/Wilayah.php */