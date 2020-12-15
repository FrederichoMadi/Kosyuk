<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing
	public function listing()
	{
		$query= $this->db->get('konfigurasi');
		return $query->row();
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_konfigurasi',$data['id_konfigurasi']);
		$this->db->update('konfigurasi', $data);
	}

	// load menu wilayah kos
	public function nav_kos()
	{
		$this->db->select('kos.*,wilayah.nama_wilayah,wilayah.slug_wilayah');
		$this->db->from('kos');
		$this->db->join('wilayah', 'wilayah.id_wilayah = kos.id_wilayah', 'left');
		$this->db->group_by('kos.id_wilayah');
		$this->db->order_by('wilayah.urutan', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Konfigurasi_model.php */
/* Location: ./application/models/Konfigurasi_model.php */