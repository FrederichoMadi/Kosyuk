<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kos extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kos_model');
		$this->load->model('wilayah_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data kos
	public function index()
	{
		$kos = $this->kos_model->listing();
		$site = $this->konfigurasi_model->listing();
		$data = array(	'title'		=>	'Data Kos',
						'kos'		=>	$kos,
						'site' 		=>	$site, 
						'isi'		=>	'admin/kos/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// gambar
	public function gambar($id_kos)
	{
		$kos = $this->kos_model->detail($id_kos);
		$gambar = $this->kos_model->gambar($id_kos);
		$site = $this->konfigurasi_model->listing();

		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('judul_gambar','Judul/Nama Gambar','required', 
			array(	'required'	=>	'%s Harus Di Isi'));


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
		$data = array(	'title'		=>	'Tambah Gambar Kos: '.$kos->nama_kos,
						'kos' 		=>	$kos, 
						'gambar' 	=> 	$gambar,
						'error' 	=>	 $this->upload->display_errors(),
						'isi'		=>	'admin/kos/gambar');

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
		// slug kos
		
		$data = array(	'id_kos'			=>	$id_kos,
						'judul_gambar'		=>	$i->post('judul_gambar'),
						'gambar'			=>	$upload_gambar['upload_data']['file_name']
					);
		$this->kos_model->tambah_gambar($data);
		$this->session->set_flashdata('sukses','Data gambar telah ditambah');
		redirect(base_url('admin/kos/gambar/'.$id_kos),'refresh');
		}
	}
		// end masuk database
		$data = array(	'title'		=>	'Tambah Gambar Kos: '.$kos->nama_kos,
						'kos' 		=>	$kos, 
						'gambar' 	=>	$gambar,
						'site' 		=> 	$site,
						'isi'		=>	'admin/kos/gambar');

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// tambah kos
	public function tambah()
	{
		// ambil data wilayah
		$wilayah = $this->wilayah_model->listing();
		$site = $this->konfigurasi_model->listing();

		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_kos','Nama Kos','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('kode_kos','Kode Kos','required|is_unique[kos.kode_kos]', 
			array(	'required'	=>	'%s Harus Di Isi',
					'is_unique'	=>	'%s Sudah ada, Buat kode kos baru'));


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
		$data = array(	'title'		=>	'Tambah Kos',
						'wilayah' 	=>	$wilayah, 
						'site' 		=>	$site, 
						'error' 	=>	 $this->upload->display_errors(),
						'isi'		=>	'admin/kos/tambah');

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
		// slug kos
		$slug_kos = url_title($this->input->post('slug_kos').'-'.$this->input->post('kode_kos'), 'dash', TRUE);
		$data = array(	'id_user'			=>$this->session->userdata('id_user'),
						'id_wilayah'		=>	$i->post('id_wilayah'),
						'kode_kos'			=>	$i->post('kode_kos'),
						'nama_kos'			=>	$i->post('nama_kos'),
						'slug_kos'			=>	$slug_kos,
						'telepon'			=>	$i->post('telepon'),
						'ukuran_kos'		=>	$i->post('ukuran_kos'),
						'kategori_kos'		=>	$i->post('kategori_kos'),
						'alamat_kos'		=>	$i->post('alamat_kos'),
						'fasilitas_kos'		=>implode('<br> ', $i->post('fasilitas_kos',TRUE)),
						'harga'				=>	$i->post('harga'),
						'stok'				=>	$i->post('stok'),
						'deskripsi'			=>	$i->post('deskripsi'),
						'gambar'			=>	$upload_gambar['upload_data']['file_name'],
						'tanggal_post'		=>	date('Y-m-d H:i:s')
					);
		$this->kos_model->tambah($data);
		$this->session->set_flashdata('sukses','Data telah ditambah');
		redirect(base_url('admin/kos'),'refresh');
		}
	}
		// end masuk database
		$data = array(	'title'		=>	'Tambah Kos',
						'wilayah' 	=>	$wilayah,
						'site' 		=>	$site, 
						'isi'		=>	'admin/kos/tambah');

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// edit kos
	public function edit($id_kos)
	{
		// ambil data kos yang akan di edit
		$kos = $this->kos_model->detail($id_kos);

		$site = $this->konfigurasi_model->listing();
		// ambil data wilayah
		$wilayah = $this->wilayah_model->listing();

		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_kos','Nama Kos','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('kode_kos','Kode Kos','required', 
			array(	'required'	=>	'%s Harus Di Isi'
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
		$data = array(	'title'		=>	'Edit Kos : '.$kos->nama_kos,
						'wilayah' 	=>	$wilayah, 
						'kos' 		=> 	$kos,
						'error' 	=>	 $this->upload->display_errors(),
						'site' 		=>	$site, 
						'isi'		=>	'admin/kos/edit');

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
		// slug kos
		$slug_kos = url_title($this->input->post('slug_kos').'-'.$this->input->post('kode_kos'), 'dash', TRUE);
		$data = array(	'id_kos'			=>	$id_kos,
						'id_user'			=>	$this->session->userdata('id_user'),
						'id_wilayah'		=>	$i->post('id_wilayah'),
						'kode_kos'			=>	$i->post('kode_kos'),
						'nama_kos'			=>	$i->post('nama_kos'),
						'slug_kos'			=>	$slug_kos,
						'telepon'			=>	$i->post('telepon'),
						'ukuran_kos'		=>	$i->post('ukuran_kos'),
						'kategori_kos'		=>	$i->post('kategori_kos'),
						'alamat_kos'		=>	$i->post('alamat_kos'),
						'fasilitas_kos'		=>implode('<br> ', $i->post('fasilitas_kos',TRUE)),
						'harga'				=>	$i->post('harga'),
						'stok'				=>	$i->post('stok'),
						'deskripsi'			=>	$i->post('deskripsi'),
						'gambar'			=>	$upload_gambar['upload_data']['file_name'],
					);
		$this->kos_model->edit($data);
		$this->session->set_flashdata('sukses','Data telah diedit');
		redirect(base_url('admin/kos'),'refresh');
		}} else{
		//edit kos tanpa ganti gambar 
		$i = $this->input;
		// slug kos
		$slug_kos = url_title($this->input->post('slug_kos').'-'.$this->input->post('kode_kos'), 'dash', TRUE);
		$data = array(	'id_kos'			=>	$id_kos,
						'id_user'			=>$this->session->userdata('id_user'),
						'id_wilayah'		=>	$i->post('id_wilayah'),
						'kode_kos'			=>	$i->post('kode_kos'),
						'nama_kos'			=>	$i->post('nama_kos'),
						'slug_kos'			=>	$slug_kos,
						'telepon'			=>	$i->post('telepon'),
						'ukuran_kos'		=>	$i->post('ukuran_kos'),
						'kategori_kos'		=>	$i->post('kategori_kos'),
						'alamat_kos'		=>	$i->post('alamat_kos'),
						'fasilitas_kos'		=>implode('<br> ', $i->post('fasilitas_kos',TRUE)),
						'harga'				=>	$i->post('harga'),
						'stok'				=>	$i->post('stok'),
						'deskripsi'			=>	$i->post('deskripsi'),
						// 'gambar'		=>	$upload_gambar['upload_data']['file_name'],
					);
		$this->kos_model->edit($data);
		$this->session->set_flashdata('sukses','Data telah diedit');
		redirect(base_url('admin/kos'),'refresh');
		}}
		// end masuk database
		$data = array(	'title'		=>	'Edit Kos :'.$kos->nama_kos,
						'wilayah' 	=>	$wilayah, 
						'kos' 		=>	$kos,
						'site' 		=>	$site, 
						'isi'		=>	'admin/kos/edit');

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// delete kos
	public function delete($id_kos)
	{

		// Proses Hapus gambar
		$kos = $this->kos_model->detail($id_kos);
		unlink('./assets/upload/image/'.$kos->gambar);
		unlink('./assets/upload/image/thumbs/'.$kos->gambar);
		// end proses hapus
		$data = array('id_kos'=>$id_kos);
		$this->kos_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/kos'),'refresh');
	}

	// delete gambar-gambar kos
	public function delete_gambar($id_kos,$id_gambar)
	{
		// Proses Hapus gambar
		$gambar = $this->kos_model->detail_gambar($id_gambar);
		unlink('./assets/upload/image/'.$gambar->gambar);
		unlink('./assets/upload/image/thumbs/'.$gambar->gambar);
		// end proses hapus
		$data = array('id_gambar'=>$id_gambar);
		$this->kos_model->delete_gambar($data);
		$this->session->set_flashdata('sukses','Data Gambar telah dihapus');
		redirect(base_url('admin/kos/gambar/'.$id_kos),'refresh');
	}

}

/* End of file Kos.php */
/* Location: ./application/controllers/admin/Kos.php */