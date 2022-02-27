<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('todo');
		$result = $query->result();
		$data['tasks'] = $result;
		$this->load->view('home',$data);
		//var_dump($result);
		//$this->load->view('home');   //'bootcamp' means call bootcamp.php
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}
