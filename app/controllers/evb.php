<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Evb extends CI_Controller {
	
	public function index()
	{
		$data['tpl_body'] = "Hello, James.";
		$this->load->view('tpl_front/index', $data);
	}
}
	
?>