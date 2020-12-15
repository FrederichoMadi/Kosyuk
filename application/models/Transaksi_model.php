 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all transaksi
	public function listing ()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// listing all transaksi berdasarkan headernya
	public function kode_transaksi ($kode_transaksi)
	{
		$this->db->select('transaksi.*,kos.nama_kos,kos.kode_kos');
		$this->db->join('kos', 'kos.id_kos = transaksi.id_kos', 'left');
		$this->db->from('transaksi');
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// edit all transaksi
	public function detail($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// detail per transaksi
	public function read($slug_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('slug_transaksi', $slug_transaksi);
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// login transaksi
	// public function login($transaksiname,$password)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('transaksi');
	// 	$this->db->where(array(	'transaksiname'	=>	$transaksiname,
	// 							'password'	=>	$password));
	// 	$this->db->order_by('id_transaksi', 'desc');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// tambah pengguna
	public function tambah($data)
	{
		$this->db->insert('transaksi',$data);
	}


	// ediy pengguna
	public function edit($data)
	{
		$this->db->where('id_transaksi',$data['id_transaksi']);
		$this->db->update('transaksi',$data);
	}

	// hapus pengguna
	public function delete($data)
	{
		$this->db->where('id_transaksi',$data['id_transaksi']);
		$this->db->delete('transaksi',$data);
	}

}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */