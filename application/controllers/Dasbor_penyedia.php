<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor_penyedia extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kos_model');
		$this->load->model('penyedia_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('transaksi_model');
		$this->load->model('rekening_model');
		$this->load->model('wilayah_model');
		// halaman di proteksi dengan simple pelangan di libraries
		$this->simple_penyedia->cek_login();
	}

	public function index()
	{
		$kos = $this->kos_model->listing();
		// $id_kos = $this->kos_model->id_kos();
		$id_penyedia = $this->session->userdata('id_penyedia');
		$pemilik = $this->penyedia_model->pemilik($id_penyedia);
		
		$data = array(	'title' 	=>	'Dasbor Penyedia Kos',
						'kos' 		=>	$kos,
						'pemilik'	=>	$pemilik, 
						'isi'		=>	'dasbor_penyedia/list'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// tambah gambar-gambar pada kos
	public function gambar($id_kos)
	{
		
		$kos = $this->kos_model->detail($id_kos);
		$gambar = $this->kos_model->gambar($id_kos);
		$site = $this->konfigurasi_model->listing();
		$id_penyedia = $this->session->userdata('id_penyedia');
		$pemilik = $this->penyedia_model->pemilik($id_penyedia);

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
						'pemilik' 	=>	$pemilik, 
						'kos' 		=>	$kos, 
						'gambar' 	=> 	$gambar,
						'error' 	=>	 $this->upload->display_errors(),
						'isi'		=>	'dasbor_penyedia/gambar');

		$this->load->view('layout/wrapper', $data, FALSE);
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
		redirect(base_url('dasbor_penyedia/gambar/'.$id_kos),'refresh');
		}
	}
		// end masuk database
		$data = array(	'title'		=>	'Tambah Gambar Kos: '.$kos->nama_kos,
						'pemilik' 	=>	$pemilik,
						'kos' 		=>	$kos, 
						'gambar' 	=>	$gambar,
						'site' 		=> 	$site,
						'isi'		=>	'dasbor_penyedia/gambar');

		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// data kos penyedia
	public function tambah_kos()
	{
		// ambil data rekening
		$rekening = $this->rekening_model->listing();

		// ambil data kos
		$kos = $this->kos_model->listing();

		// ambil data wilayah
		$wilayah = $this->wilayah_model->listing();

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
		$data = array(	'title'		=>	'Kos',
						'wilayah' 	=>	$wilayah,
						'rekening' 	=>	$rekening, 
						'error' 	=> 	$this->upload->display_errors(),
						'isi'		=>	'dasbor_penyedia/tambah_kos'
					);
		$this->load->view('layout/wrapper', $data, FALSE);

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
		$data = array(	
						'id_penyedia'		=>$this->session->userdata('id_penyedia'),
						'id_wilayah'		=>	$i->post('id_wilayah'),
						'kode_kos'			=>	$i->post('kode_kos'),
						'id_rekening'		=>	$i->post('id_rekening'),
						'no_rekening'			=>	$i->post('no_rekening'),
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
		redirect(base_url('dasbor_penyedia'),'refresh');
			}
		}
		// end masuk database
		$data = array(	'title'		=>	'Kos',
						'rekening' 	=>	$rekening,
						'wilayah' 	=>	$wilayah,
						'isi'		=>	'dasbor_penyedia/tambah_kos'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// edit kos
	public function edit($id_kos)
	{
		// ambil data kos yang akan di edit
		$kos = $this->kos_model->detail($id_kos);

		$site = $this->konfigurasi_model->listing();
		// ambil data wilayah
		$wilayah = $this->wilayah_model->listing();

		// ambil data rekening
		$rekening = $this->rekening_model->listing();

		// ambil data pemilik kos
		$id_penyedia = $this->session->userdata('id_penyedia');
		$pemilik = $this->penyedia_model->pemilik($id_penyedia);

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
						'pemilik' 	=>	$pemilik, 
						'wilayah' 	=>	$wilayah, 
						'kos' 		=> 	$kos,
						'rekening' 	=>	$rekening,
						'error' 	=>	 $this->upload->display_errors(),
						'site' 		=>	$site, 
						'isi'		=>	'dasbor_penyedia/edit');

		$this->load->view('layout/wrapper', $data, FALSE);
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
						'id_penyedia'			=>	$this->session->userdata('id_penyedia'),
						'id_wilayah'		=>	$i->post('id_wilayah'),
						'kode_kos'			=>	$i->post('kode_kos'),
						'id_rekening'		=>	$i->post('id_rekening'),
						'no_rekening'			=>	$i->post('no_rekening'),
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
		redirect(base_url('daasbor_penyedia'),'refresh');
		}} else{
		//edit kos tanpa ganti gambar 
		$i = $this->input;
		// slug kos
		$slug_kos = url_title($this->input->post('slug_kos').'-'.$this->input->post('kode_kos'), 'dash', TRUE);
		$data = array(	'id_kos'			=>	$id_kos,
						'id_penyedia'		=>$this->session->userdata('id_penyedia'),
						'id_wilayah'		=>	$i->post('id_wilayah'),
						'kode_kos'			=>	$i->post('kode_kos'),
						'id_rekening'		=>	$i->post('id_rekening'),
						'no_rekening'			=>	$i->post('no_rekening'),
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
		$this->session->set_flashdata('sukses','Data Kos anda telah diedit');
		redirect(base_url('dasbor_penyedia'),'refresh');
		}}
		// end masuk database
		$data = array(	'title'		=>	'Edit Kos : '.$kos->nama_kos,
						'pemilik' 	=>	$pemilik,
						'wilayah' 	=>	$wilayah, 
						'kos' 		=>	$kos,
						'rekening' 	=>	$rekening,
						'site' 		=>	$site, 
						'isi'		=>	'dasbor_penyedia/edit');

		$this->load->view('layout/wrapper', $data, FALSE);
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
		redirect(base_url('dasbor_penyedia/gambar/'.$id_kos),'refresh');
	}

	// data rekening
	public function rekening()
	{
		// ambil data rekening
		$id_penyedia = $this->session->userdata('id_penyedia');
		$pemilik = $this->penyedia_model->pemilik('id_penyedia');

		$data = array(	'title'		=>	'Data Rekening',
						'pemilik' 	=>	$pemilik,  
						'isi'		=>	'dasbor_penyedia/rekening');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// tampilan profil akun
	public function profil()
	{
		// ambil data login id_pelanggan dari session
		$id_penyedia = $this->session->userdata('id_penyedia');
		$pemilik_kos = $this->penyedia_model->detail($id_penyedia);
		$pemilik = $this->penyedia_model->pemilik($id_penyedia);

		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_pemilik','Nama Penyedia','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('telepon','Telepon/No HP','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('alamat','Alamat','required', 
			array(	'required'	=>	'%s Harus Di Isi'));
		

		if ($valid->run()===FALSE) 
		{
			//end validasi

		$data = array(	'title'		=> 	'Profil '.$pemilik->nama_pemilik,
						'pemilik_kos'	=>	$pemilik_kos,
						'pemilik' 		=>	$pemilik, 
						'isi'		=>	'dasbor_penyedia/profil'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
	} else {
		$i = $this->input;
		// kalau password lebih dari 6 karakter, maka password di ganti
		if(strlen($i->post('password_pemilik')) >=6 ){
		$data = array(	'id_penyedia'		=> 	$id_penyedia,
						'nama_pemilik'		=>	$i->post('nama_pemilik'),
						'email_pemilik'		=>	$i->post('email_pemilik'),
						'password_pemilik'		=>	$i->post('password_pemilik'),
						'telepon'			=>	$i->post('telepon'),
						'alamat'			=>	$i->post('alamat')
					);
		} else{
			// kalau password kurang dari 6 maka password tidak diganti
			$data = array(	'id_penyedia'	=> 	$id_penyedia,
						'nama_pemilik'		=>	$i->post('nama_pemilik'),
						'email_pemilik'		=>	$i->post('email_pemilik'),
						// 'password_pemilik'		=>	$i->post('password_pemilik'),
						'telepon'			=>	$i->post('telepon'),
						'alamat'			=>	$i->post('alamat')
					);
		}
		// end data update
		$this->penyedia_model->edit($data);
		$this->session->set_flashdata('sukses','Update Profil Berhasil');
		redirect(base_url('dasbor_penyedia/profil'),'refresh');
		}
	}


	

}

/* End of file Dasbor_penyedia.php */
/* Location: ./application/controllers/Dasbor_penyedia.php */