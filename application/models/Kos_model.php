 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kos_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all kos
	public function listing()
	{
		$this->db->select('kos.*,users.nama,wilayah.nama_wilayah,wilayah.slug_wilayah, COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('kos');
		$this->db->join('users', 'users.id_user = kos.id_user', 'left');
		$this->db->join('wilayah', 'wilayah.id_wilayah = kos.id_wilayah', 'left');
		$this->db->join('gambar', 'gambar.id_kos = kos.id_kos', 'left');
		$this->db->group_by('kos.id_kos');
		$this->db->order_by('id_kos', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// home web
	public function home()
	{
		$this->db->select('kos.*,users.nama,wilayah.nama_wilayah,wilayah.slug_wilayah, COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('kos');
		$this->db->join('users', 'users.id_user = kos.id_user', 'left');
		$this->db->join('wilayah', 'wilayah.id_wilayah = kos.id_wilayah', 'left');
		$this->db->join('gambar', 'gambar.id_kos = kos.id_kos', 'left');
		$this->db->group_by('kos.id_kos');
		$this->db->order_by('id_kos', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function listing_wilayah()
	{
		$this->db->select('kos.*,users.nama,wilayah.nama_wilayah,wilayah.slug_wilayah, COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('kos');
		$this->db->join('users', 'users.id_user = kos.id_user', 'left');
		$this->db->join('wilayah', 'wilayah.id_wilayah = kos.id_wilayah', 'left');
		$this->db->join('gambar', 'gambar.id_kos = kos.id_kos', 'left');
		$this->db->group_by('kos.id_wilayah');
		$this->db->order_by('id_kos', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	public function total_kos()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('kos');
		$query = $this->db->get();
		return $query->row(); 
	}

	// wilayah kos
	public function wilayah($id_wilayah)
	{
		$this->db->select('kos.*,users.nama,wilayah.nama_wilayah,wilayah.slug_wilayah, COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('kos');
		$this->db->join('users', 'users.id_user = kos.id_user', 'left');
		$this->db->join('wilayah', 'wilayah.id_wilayah = kos.id_wilayah', 'left');
		$this->db->join('gambar', 'gambar.id_kos = kos.id_kos', 'left');
		$this->db->where('kos.id_wilayah', $id_wilayah);
		$this->db->where('kos.id_wilayah', $id_wilayah);
		$this->db->group_by('kos.id_kos');
		$this->db->order_by('id_kos', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function total_wilayah()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('kos');
		$this->db->where('id_wilayah', $id_wilayah);
		$query = $this->db->get();
		return $query->row(); 
	}

	// read kos
	public function read($slug_kos)
	{
		$this->db->select('kos.*,users.nama,wilayah.nama_wilayah,wilayah.slug_wilayah, COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('kos');
		$this->db->join('users', 'users.id_user = kos.id_user', 'left');
		$this->db->join('wilayah', 'wilayah.id_wilayah = kos.id_wilayah', 'left');
		$this->db->join('gambar', 'gambar.id_kos = kos.id_kos', 'left');
		$this->db->where('kos.slug_kos', $slug_kos);
		$this->db->group_by('kos.id_kos');
		$this->db->order_by('id_kos', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// search kos
	public function cari_kos($nama_kos)
	{
		$this->db->select('*');
		$this->db->from('kos');
		$this->db->like('nama_kos', $nama_kos);
		return $this->db->get()->result();
	}

	// edit all kos
	public function detail($id_kos)
	{
		$this->db->select('*');
		$this->db->from('kos');
		$this->db->where('id_kos', $id_kos);
		$this->db->order_by('id_kos', 'desc');
		$query = $this->db->get();
		return $query->row();
	}



	// Detail gambar 
	public function detail_gambar($id_gambar)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_gambar', $id_gambar);
		$this->db->order_by('id_gambar', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// gambar
	public function gambar($id_kos)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_kos', $id_kos);
		$this->db->order_by('id_gambar', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	// tambah pengguna
	public function tambah($data)
	{
		$this->db->insert('kos',$data);
	}

	// memberi saran
	public function saran($data)
	{
		$this->db->insert('saran',$data);
	}

	// tambah gambar
	public function tambah_gambar($data)
	{
		$this->db->insert('gambar',$data);
	}


	// ediy pengguna
	public function edit($data)
	{
		$this->db->where('id_kos',$data['id_kos']);
		$this->db->update('kos',$data);
	}

	// hapus pengguna
	public function delete($data)
	{
		$this->db->where('id_kos',$data['id_kos']);
		$this->db->delete('kos',$data);
	}

	// hapus gambar
	public function delete_gambar($data)
	{
		$this->db->where('id_gambar',$data['id_gambar']);
		$this->db->delete('gambar',$data);
	}


}

/* End of file kos_model.php */
/* Location: ./application/models/kos_model.php */