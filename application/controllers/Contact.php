<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$site = $this->konfigurasi_model->listing();
		
		// valid input
		$valid = $this->form_validation;
		
		if($valid->run()===FALSE){

			$data = array(	'title'		=> 'Contact Us '.$site->namaweb,
							'site' 		=> 	$site,
							'isi'		=> 'contact/list'
					);
			$this->load->view('layout/wrapper', $data, FALSE);

		} else {
		$i = $this->input;
		$data	= array(	
							'id_pelanggan'	=>	$this->session->userdata('id_pelanggan'),
							'keluhan' 		=>	$i->post('keluhan') 
						);

		$this->kos_model->saran($data);
		$this->session->set_flashdata('sukses','Terima kasih atas saran anda ^-^');
		redirect(base_url('contact'),'refresh');
		}
	}



}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */