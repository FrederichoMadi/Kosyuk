 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all wilayah
	public function listing ()
	{
		$this->db->select('*');
		$this->db->from('wilayah');
		$this->db->order_by('id_wilayah', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// edit all wilayah
	public function detail($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('wilayah');
		$this->db->where('id_wilayah', $id_wilayah);
		$this->db->order_by('id_wilayah', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// detail per wilayah
	public function read($slug_wilayah)
	{
		$this->db->select('*');
		$this->db->from('wilayah');
		$this->db->where('slug_wilayah', $slug_wilayah);
		$this->db->order_by('id_wilayah', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// login wilayah
	// public function login($wilayahname,$password)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('wilayah');
	// 	$this->db->where(array(	'wilayahname'	=>	$wilayahname,
	// 							'password'	=>	$password));
	// 	$this->db->order_by('id_wilayah', 'desc');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// tambah pengguna
	public function tambah($data)
	{
		$this->db->insert('wilayah',$data);
	}


	// ediy pengguna
	public function edit($data)
	{
		$this->db->where('id_wilayah',$data['id_wilayah']);
		$this->db->update('wilayah',$data);
	}

	// hapus pengguna
	public function delete($data)
	{
		$this->db->where('id_wilayah',$data['id_wilayah']);
		$this->db->delete('wilayah',$data);
	}

}

/* End of file wilayah_model.php */
/* Location: ./application/models/wilayah_model.php */