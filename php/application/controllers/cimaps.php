<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CImaps extends CI_Controller
{

	public function direction(){
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');
		$config['center'] = 'auto';
		$config['map_height'] = '525px';
		$config['map_width'] = '100%';
		$config['zoom'] = 'auto';
		$config['directions'] = TRUE;
		$config['directionsStart'] = 'auto';
		$config['directionsEnd'] = '14.567660292373106, 121.0142991195155';
		$config['directionsDivID'] = 'directionsDiv';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'direction';
		$this->load->view('template', $data);
	}

	public function location(){
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');

		$config['center'] = '14.567660292373105, 121.0142970085144';
		$config['zoom'] = '17';
		$config['map_height'] = '525px';
		$config['map_width'] = '100%';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['animation'] = 'BOUNCE';
		$marker['position'] = '14.567660292373106, 121.0142991195155';
		$marker['title'] = 'Click to see information';
		$marker['clickable'] = TRUE;
		$marker['infowindow_content'] = '<h3>Philippine Newlong Machines, Inc</h3><ul><p>Ground Floor Newlong Building, No. 3590 Davila Street</p><p>Makati City 1205</p><h5><a href="direction">Get directions from your location<a></h5></ul>';
		$this->googlemaps->add_marker($marker);
		
		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'location';
		$this->load->view('template', $data);
	}
	
	public function contact(){
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');

		$config['center'] = '14.567660292373105, 121.0142970085144';
		$config['zoom'] = '17';
		$config['map_height'] = '350px';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['animation'] = 'BOUNCE';
		$marker['position'] = '14.567660292373106, 121.0142991195155';
		$marker['title'] = 'Click to see information';
		$marker['clickable'] = TRUE;
		$marker['infowindow_content'] = '<h3>Philippine Newlong Machines, Inc</h3><ul><p>Ground Floor Newlong Building, No. 3590 Davila Street</p><p>Makati City 1205</p><h5><a href="direction">Get directions from your location<a></h5></ul>';
		$this->googlemaps->add_marker($marker);
		
		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'contact';
		$this->load->view('template', $data);
	}
}

/* End of file cindex.php */
/* Location: ./application/controllers/cindex.php */