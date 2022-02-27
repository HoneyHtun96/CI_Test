<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Languages_Controller extends CI_Controller {

	public function index()
	{

		$this->load->view('header');
		$this->load->view('user_languages');
		$this->load->view('footer'); 
		
	}

	public function add_user_language()
	{
		
		$name = $this->input->post('name');				
		$userid = $this->input->post('userid');
			
		$data = array(
			
			'language_name' => $name,			
			'language_userid' => $userid
			

		);
		$this->Expense_Model->add('language',$data);
		//$this->index();
		redirect (base_url('user_languages'));
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}

