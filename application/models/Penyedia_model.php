 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyedia_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all penyedia
	public function listing ()
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		$this->db->order_by('id_penyedia', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// login penyedia
	public function login($email_pemilik,$password_pemilik)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		$this->db->where('email_pemilik', $email_pemilik);
		$this->db->where('password_pemilik', $password_pemilik);
		$this->db->order_by('id_penyedia', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// sudah login penyedia
	public function sudah_login($email_pemilik,$nama_pemilik)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		$this->db->where('email_pemilik', $email_pemilik);
		$this->db->where('nama_pemilik', $nama_pemilik);
		$this->db->order_by('id_penyedia', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// detail penyedia
	public function detail($id_penyedia)
	{
		$this->db->select('*');
		$this->db->from('penyedia');
		$this->db->where('id_penyedia', $id_penyedia);
		$this->db->order_by('id_penyedia', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// konfirmasi pembayaran
	public function konfirmasi($id_kos)
	{
		$this->db->select('kos.*,penyedia.*,rekening.*');
		$this->db->from('kos');
		$this->db->join('penyedia', 'penyedia.id_penyedia = kos.id_penyedia', 'left');
		$this->db->join('rekening', 'rekening.id_rekening = kos.id_rekening', 'left');
		$this->db->where('kos.id_kos', $id_kos);
		$query = $this->db->get();
		return $query->row();
	}

	// pemilik kos
	public function pemilik($id_penyedia)
	{
		$this->db->select('penyedia.*,kos.*,wilayah.*, COUNT(gambar.id_gambar) AS total_gambar, rekening.nama_bank');
		$this->db->from('penyedia');
		$this->db->join('kos', 'kos.id_penyedia = penyedia.id_penyedia', 'left');
		$this->db->join('wilayah', 'wilayah.id_wilayah = kos.id_wilayah', 'left');
		$this->db->join('gambar', 'gambar.id_kos = kos.id_kos', 'left');
		$this->db->join('rekening', 'rekening.id_rekening = penyedia.id_rekening', 'left');
		// $this->db->where(array(	'id_penyedia'	=>	$id_penyedia,
		// 						'id_kos'		=>	$id_kos));
		$this->db->where('penyedia.id_penyedia', $id_penyedia);
		$this->db->order_by('penyedia.id_penyedia', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function id_penyedia($id_kos)
	{
		$this->db->select('kos.id_penyedia,penyedia.*');
		$this->db->from('kos');
		$this->db->join('penyedia', 'penyedia.id_penyedia = kos.id_penyedia', 'left');
		$this->db->order_by('kos.id_penyedia', 'desc');
		$this->db->where('kos.id_kos', $id_kos);
		$query = $this->db->get();
		return $query->row();
	}

	// tambah pengguna
	public function tambah($data)
	{
		$this->db->insert('penyedia',$data);
	}


	// ediy pengguna
	public function edit($data)
	{
		$this->db->where('id_penyedia',$data['id_penyedia']);
		$this->db->update('penyedia',$data);
	}

	// hapus pengguna
	public function delete($data)
	{
		$this->db->where('id_penyedia',$data['id_penyedia']);
		$this->db->delete('penyedia',$data);
	}

}

/* End of file penyedia_model.php */
/* Location: ./application/models/penyedia_model.php */