<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	// ambil database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kos_model');
		$this->load->model('wilayah_model');
		$this->load->model('pelanggan_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('transaksi_model');
		// load helper
		$this->load->helper('string');
		// load simple pelanggan
		$this->simple_pelanggan->cek_login();
	}

	
	public function sukses()
	{

		$data = array(	'title'	=> 'Pemesanan Berhasil',
						'isi' 	=>	'pesan/sukses' 
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// checkout oemesanan
	public function checkout()
	{
		// cek jika pelanggan sudah login atau belum, jika belum registrasi terlebih dahulu

		 // kondisi login
		 if ($this->session->userdata('email'))
		 {
		 	$email 			= $this->session->userdata('email');
		 	$nama_pelanggan = $this->session->userdata('nama_pelanggan');
		 	$pelanggan 		= $this->pelanggan_model->sudah_login($email,$nama_pelanggan);	

		 	
		 	$pesan = $this->cart->contents();

		 	// validasi input
			$valid = $this->form_validation;


			$valid->set_rules('nama_pelanggan','Nama Lengkap','required', 
				array(	'required'	=>	'%s Harus Di Isi'));

			$valid->set_rules('email','E-mail','required|valid_email', 
				array(	'required'		=>	'%s Harus Di Isi',
						'valid_email'	=>	'%s Tidak Valid'
					));

			$valid->set_rules('telepon','Nomor Telepon','required', 
				array(	'required'	=>	'%s Harus Di Isi'));

			$valid->set_rules('alamat','Alamat','required', 
				array(	'required'	=>	'%s Harus Di Isi'));
			

		if ($valid->run()===FALSE) 
		{

		 $data = array (	'title'		=>	'Checkout Kos',
							'pesan'		=>	$pesan,
							'pelanggan'	=>	$pelanggan,
							'isi'		=>	'pesan/checkout'
						);

		 $this->load->view('layout/wrapper', $data, FALSE);
		 // masuk database
		} else {
		$i = $this->input;
		$data = array(	'id_kos'			=>	$i->post('id_kos'),
						'id_pelanggan'		=>	$pelanggan->id_pelanggan,
						'nama_pelanggan'	=>	$i->post('nama_pelanggan'),
						'email'				=>	$i->post('email'),
						'telepon'			=>	$i->post('telepon'),
						'alamat'			=>	$i->post('alamat'),
						'kode_transaksi'	=>	$i->post('kode_transaksi'),
						'tanggal_transaksi'	=>	$i->post('tanggal_transaksi'),
						'jumlah_transaksi'	=>	$i->post('jumlah_transaksi'),
						'status_bayar'		=>	'Belum',
						'tanggal_post'		=>	date('Y-m-d H:i:s')
					);
		// proses masuk ke header transaksi
		$this->header_transaksi_model->tambah($data);
		// proses masuk ke tabel transaksi
		foreach ($pesan as $pesan ) {
			$total_harga = $pesan['price']*$pesan['qty'];
			$data = array(	'id_pelanggan'		=>	$pelanggan->id_pelanggan,
							'kode_transaksi'	=>	$i->post('kode_transaksi'),
							'id_kos' 		=>	$pesan['id'],
							'harga' 			=>	$pesan['price'],
							'jumlah' 			=>	$pesan['qty'],
							'total_harga' 		=>	$total_harga,
							'tanggal_transaksi' => 	$i->post('tanggal_transaksi')	
					);
			$this->transaksi_model->tambah($data);
		}
		// end proses
		// hapus setelah masuk tabel transaksi
		$this->cart->destroy();
		// pengosongan pemesanan
		$this->session->set_flashdata('sukses','Checkout Berhasil');
		redirect(base_url('pesan/sukses'),'refresh');
		}
		 // end masuk database

		 }else{
		 	// kalau belum, harus registrasi dulu
		 	$this->session->set_flashdata('sukses','Silahkan login atau registrasi terlebih dahulu');
		 	redirect(base_url('registrasi'),'refresh');
		 }
	}

	public function add()
	{
		// ambil data dari form
		$id 			= $this->input->post('id');
		$qty 			= $this->input->post('qty');
		$price 			= $this->input->post('price');
		$name 			= $this->input->post('name');
		;
		
		// memasukan ke dalam data pesan
		$data = array (	'id'			=>	$id,
						'qty'			=>	$qty,
						'price'			=>	$price,
						'name'			=>	$name
					);
		$this->cart->insert($data);
		// redirect page
		// redirect($redirect_page,'refresh');
		 $data = array (	'title'		=>	"Pemesanan Kos",
							'isi'		=>	'pesan/add'
						);

		 $this->load->view('layout/wrapper', $data, FALSE);
	}

	// update pemesanan kos
	public function update($rowid)
	{
		// jika ada data rowid
		if($rowid)
		{
			$data = array (	'rowid'	=>	$rowid,
							'qty'	 =>	$this->input->post('qty')
			);

			$this->cart->update($data);
			$this->session->set_flashdata('sukses','Data telah di ubah');
			redirect(base_url('pesan/add'), 'refresh');

		} else {
			redirect(base_url('pesan/add','refresh'));
		}
	}

	// batal pesan dengan mengahpus data
	public function hapus()
	{
		$this->cart->destroy();
		redirect(base_url('daftarkos'),'refresh');
	}

	public function hapus_riwayat($id_header_transaksi)
	{
		$header_transaksi = $this->header_transaksi_model->detail($id_header_transaksi);

		$data = array(	'id_header_transaksi' =>	$id_header_transaksi);

		$this->header_transaksi_model->delete($data);
		$this->session->set_flashdata('sukses','Pemesanan Telah Dibatalkan');
		redirect(base_url('dasbor/riwayat/'.$id_header_transaksi),'refresh');
	}


}

/* End of file Pesan.php */
/* Location: ./application/controllers/Pesan.php */