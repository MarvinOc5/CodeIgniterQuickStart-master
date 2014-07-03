<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CProducts extends CI_Controller
{
	
	public function products()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');
		$config['center'] = 'auto';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'products';
		$this->load->view('template', $data);
	}
	

}