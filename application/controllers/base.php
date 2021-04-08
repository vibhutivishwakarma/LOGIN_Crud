<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	//-----homepage function----
	public function index()
	{
		
		$data['title'] = "Homepage";
		$data['content']= $this->load->view('base/pages/homepage/index', $data, true );
		return $this->load->view('base/pages/shared/layout_master', $data);
		
	}
}
