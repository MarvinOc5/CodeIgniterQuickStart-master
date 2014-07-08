<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CIndex extends CI_Controller
{
	
	public function index() 
	{	
		if($this->_submit_login()===FALSE) 
		{	
			$data['base'] = $this->config->item('base_url');
			$data['title']= 'The Philippine New Long Corporation';
			$this->load->view('index',$data);
			return;
			return $this->index();
		}
		else 
		{
			if($this->input->post('username')) 
			{
				$username = $this->input->post('username');
				$password = do_hash($this->input->post('password'));
					if ($row = $this->usermodel->verifyuser($username,$password)) 
					{
						$data['userdetail'] = $row->result();
						foreach($data['userdetail'] as $UserItem) 
						{
							$_SESSION['userid'] = $UserItem->userid;
							$_SESSION['userlevel'] = $UserItem->userlevel;
							$_SESSION['username'] = $UserItem->username;
						}
							if ($_SESSION['userid'] > 0) 
							{
								$this->session->set_userdata('userid', $UserItem->userid);
								$this->session->set_userdata('userlevel', $UserItem->userlevel);
								$this->session->set_userdata('user_name', $UserItem->firstname.' '.$UserItem->lastname);
								$this->_redirect();
							}
					}
					else 
					{
						$this->session->set_flashdata('error','Account unknown, consult the Administrator!');	
						redirect('cindex/index','refresh');
					}
			}
		}
	}
	function _redirect()
	{
		// Is there a redirect to handle?
		if( ! isset($_POST['redirect']))
		{
			redirect("/cindex/home", "location");
			return;
		}
	
		// Basic check to make sure we aren't redirecting to the login page
		// current_url would be your login controller
		if($_POST['redirect'] === current_url())
		{
			redirect("/cindex/home", "location");
			return;
		}
	
		redirect($_POST['redirect'], "location");
	}
	
	public function about()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');
		$config['center'] = 'auto';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'about';
		$this->load->view('template', $data);
	}
	
	public function faq()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');
		$config['center'] = 'auto';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'faq';
		$this->load->view('template', $data);
	}

}

/* End of file cindex.php */
/* Location: ./application/controllers/cindex.php */
