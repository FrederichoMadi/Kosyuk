<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing semua data saran/keluhan
	public function listing()
	{
		$this->db->select('saran.*,pelanggan.*');
		$this->db->from('saran');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = saran.id_pelanggan', 'left');
		$this->db->group_by('saran.id_pelanggan');
		$this->db->order_by('saran.id_pelanggan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// tambah
	public function tambah($data)
	{
		$this->db->insert('saran', $data);
	}


}

/* End of file Saran_model.php */
/* Location: ./application/models/Saran_model.php */