<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

	//function for first task
	public function first()
	{
		$this->load->view('pages/stage1');
	}
	
}
