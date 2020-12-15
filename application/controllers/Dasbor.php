<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('transaksi_model');
		$this->load->model('rekening_model');
		$this->load->model('penyedia_model');
		$this->load->model('kos_model');
		// halaman di proteksi dengan simple pelangan di libraries
		$this->simple_pelanggan->cek_login();
	}


	public function riwayat()
	{
		// ambil data login id_pelanggan dari session
		$id_pelanggan = $this->session->userdata('id_pelanggan');
		$header_transaksi = $this->header_transaksi_model->pelanggan($id_pelanggan);

		$data = array(	'title'				=> 	'Riwayat Pemesanan',
						'header_transaksi'	=>	$header_transaksi,
						'isi'				=>	'dasbor/riwayat'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function detail($kode_transaksi)
	{
		// ambil data login id_pelanggan dari session
		$id_pelanggan = $this->session->userdata('id_pelanggan');
		$header_transaksi = $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$transaksi 	=  $this->transaksi_model->kode_transaksi($kode_transaksi);
		// pastikan pelanggan hanya bisa mengakses data transaksinya
		if($header_transaksi->id_pelanggan!= $id_pelanggan){
			$this->session->set_flashdata('warning','Anda Mencoba Mengakses Data Orang Lain');
			redirect('masuk');
		}

		$data = array(	'title'		=> 	'Riwayat Pemesanan',
						'header_transaksi'	=>	$header_transaksi,
						'transaksi' 		=>	$transaksi, 
						'isi'				=>	'dasbor/detail'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function profil()
	{
		// ambil data login id_pelanggan dari session
		$id_pelanggan = $this->session->userdata('id_pelanggan');
		$pelanggan = $this->pelanggan_model->detail($id_pelanggan);

		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_pelanggan','Nama Pengguna','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('telepon','Telepon/No HP','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('alamat','Alamat','required', 
			array(	'required'	=>	'%s Harus Di Isi'));
		

		if ($valid->run()===FALSE) 
		{
			//end validasi

		$data = array(	'title'		=> 	'Profil '.$pelanggan->nama_pelanggan,
						'pelanggan'	=>	$pelanggan, 
						'isi'		=>	'dasbor/profil'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
	} else {
		$i = $this->input;
		// kalau password lebih dari 6 karakter, maka password di ganti
		if(strlen($i->post('password')) >=6 ){
		$data = array(	'id_pelanggan'		=> $id_pelanggan,
						'nama_pelanggan'	=>	$i->post('nama_pelanggan'),
						'email'				=>	$i->post('email'),
						'password'			=>	$i->post('password'),
						'telepon'			=>	$i->post('telepon'),
						'alamat'			=>	$i->post('alamat'),
					);
		} else{
			// kalau password kurang dari 6 maka password tidak diganti
			$data = array(	'id_pelanggan'		=> $id_pelanggan,
						'nama_pelanggan'	=>	$i->post('nama_pelanggan'),
						'email'				=>	$i->post('email'),
						// 'password'			=>	$i->post('password'),
						'telepon'			=>	$i->post('telepon'),
						'alamat'			=>	$i->post('alamat'),
					);
		}
		// end data update
		$this->pelanggan_model->edit($data);
		$this->session->set_flashdata('sukses','Update Profil Berhasil');
		redirect(base_url('dasbor/profil'),'refresh');
		}

	}

	// konfirmasi pembayaran
	public function konfirmasi($kode_transaksi)
	{
		$header_transaksi = $this->header_transaksi_model->kode_transaksi($kode_transaksi);

		// ambil data dari penyedia kos
		$id_kos = $header_transaksi->id_kos;
		$pemilik = $this->penyedia_model->konfirmasi($id_kos);
		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('nama_bank','Nama BANK','required', 
			array(	'required'	=>	'%s Harus Di Isi'));

		$valid->set_rules('rekening_pembayaran','Rekening Pembayaran','required', array(	'required'	=>	'%s Harus Di Isi'
					));


		$valid->set_rules('rekening_pelanggan','Nama Pemilik Rekening','required', array(	'required'	=>	'%s Harus Di Isi'
					));

		$valid->set_rules('tanggal_bayar','Tanggal Pembayaran','required', array(	'required'	=>	'%s Harus Di Isi'
					));

		$valid->set_rules('jumlah_bayar','Jumlah Pembayaran','required', array(	'required'	=>	'%s Harus Di Isi'
					));


		if ($valid->run()) 
		{
			//cek jika gambar diganti
			if (!empty($_FILES['bukti_bayar']['name'])) {
				
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '5000';//dalam KB
			$config['max_width']  		= '2024';
			$config['max_height'] 		= '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('bukti_bayar')){
			//end validasi 

		$data = array(	'title'				=> 'Konfirmasi Pembayaran',
						'header_transaksi'	=>	$header_transaksi,
						'pemilik' 			=>	$pemilik,
						'error' 			=>	 $this->upload->display_errors(), 
						'isi' 				=>	'dasbor/konfirmasi' 
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
		
		$data = array(	'id_header_transaksi'	=>	$header_transaksi->id_header_transaksi,
						'status_bayar'			=>	'Konfirmasi',
						'jumlah_bayar'			=>	$i->post('jumlah_bayar'),
						'rekening_pembayaran'	=>	$i->post('rekening_pembayaran'),
						'rekening_pelanggan'	=>	$i->post('rekening_pelanggan'),
						'bukti_bayar'			=>	$upload_gambar['upload_data']['file_name'],
						'id_rekening'			=>	$i->post('id_rekening'),
						'tanggal_bayar'			=>	$i->post('tanggal_bayar'),
						'nama_bank'				=>	$i->post('nama_bank')
					);
		$this->header_transaksi_model->edit($data);
		$this->session->set_flashdata('sukses','Konfirmasi Pembayaran Berhasil Dilakukan');
		redirect(base_url('dasbor/riwayat'),'refresh');
		}} else{
		//edit kos tanpa ganti gambar 
		$i = $this->input;
		
		$data = array(	'id_header_transaksi'	=>	$header_transaksi->id_header_transaksi,
						'status_bayar'			=>	'Konfirmasi',
						'jumlah_bayar'			=>	$i->post('jumlah_bayar'),
						'rekening_pembayaran'	=>	$i->post('rekening_pembayaran'),
						'rekening_pelanggan'	=>	$i->post('rekening_pelanggan'),
						// 'bukti_bayar'			=>	$upload_gambar['upload_data']['file_name'],
						'id_rekening'			=>	$i->post('id_rekening'),
						'tanggal_bayar'			=>	$i->post('tanggal_bayar'),
						'nama_bank'				=>	$i->post('nama_bank')
					);
		$this->header_transaksi_model->edit($data);
		$this->session->set_flashdata('sukses','Konfirmasi Pembayaran Berhasil Dilakukan');
		redirect(base_url('dasbor/riwayat'),'refresh');
		}}
		// end masuk database
		$data = array(	'title'				=> 'Konfirmasi Pembayaran',
						'header_transaksi'	=>	$header_transaksi,
						'pemilik' 			=>	$pemilik, 
						'isi' 				=>	'dasbor/konfirmasi' 
					);

		$this->load->view('layout/wrapper', $data, FALSE);

	}
	

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/Dasbor.php */