<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('header');   //'bootcamp' means call bootcamp.php
		$this->load->view('blank');
		$this->load->view('footer');
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}
