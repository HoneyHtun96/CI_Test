<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('bootcamp');   //'bootcamp' means call bootcamp.php
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}
