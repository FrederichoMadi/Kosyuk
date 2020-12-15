 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header_transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all header_transaksi
	public function listing ()
	{
		$this->db->select('*');
		$this->db->from('header_transaksi');
		$this->db->order_by('id_header_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	// listing all header_transaksi
	public function pelanggan($id_pelanggan)
	{
		$this->db->select('header_transaksi.*,SUM(transaksi.jumlah) AS total_pemesanan');
		$this->db->from('header_transaksi');
		$this->db->join('transaksi', 'transaksi.kode_transaksi = header_transaksi.kode_transaksi', 'left');
		$this->db->where('header_transaksi.id_pelanggan', $id_pelanggan);
		$this->db->group_by('header_transaksi.id_header_transaksi');
		$this->db->order_by('id_header_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail berdsasarkan kode transaksi 
	public function kode_transaksi($kode_transaksi)
	{
		$this->db->select('*');
		$this->db->from('header_transaksi');
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->order_by('id_header_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// edit all header_transaksi
	public function detail($id_header_transaksi)
	{
		$this->db->select('*');
		$this->db->from('header_transaksi');
		$this->db->where('id_header_transaksi', $id_header_transaksi);
		$this->db->order_by('id_header_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// header_transaksi sudah login
	public function sudah_login($email,$nama_header_transaksi)
	{
		$this->db->select('*');
		$this->db->from('header_transaksi');
		$this->db->where('email', $email);
		$this->db->where('nama_header_transaksi', $nama_header_transaksi);
		$this->db->order_by('id_header_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	
	// login header_transaksi
	public function login($email,$password)
	{
		$this->db->select('*');
		$this->db->from('header_transaksi');
		$this->db->where(array(	'email'	=>	$email,
								'password'	=>	$password));
		$this->db->order_by('id_header_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// tambah pengguna
	public function tambah($data)
	{
		$this->db->insert('header_transaksi',$data);
	}


	// ediy pengguna
	public function edit($data)
	{
		$this->db->where('id_header_transaksi',$data['id_header_transaksi']);
		$this->db->update('header_transaksi',$data);
	}

	// hapus pengguna
	public function delete($data)
	{
		$this->db->where('id_header_transaksi',$data['id_header_transaksi']);
		$this->db->delete('header_transaksi',$data);
	}

}

/* End of file header_transaksi_model.php */
/* Location: ./application/models/header_transaksi_model.php */