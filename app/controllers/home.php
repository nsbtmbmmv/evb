<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Home extends CI_Controller {
	
	public function index()
	{
		//$a = $this->load->view('home/body');
		//$data['tpl_body'] = $a;
		$data['tpl_header'] = FALSE;
		$data['tpl_body']   = 'home/body';
		$data['tpl_footer'] = FALSE;
		$this->load->view('tpl_front/index', $data);
	}
}
	
?>