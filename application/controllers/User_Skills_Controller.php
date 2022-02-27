<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Skills_Controller extends CI_Controller {

	public function index()
	{

		$this->load->view('header');
		$this->load->view('user_skills');
		$this->load->view('footer'); 
		
	}

	public function add_user_skill()
	{
		
		$name = $this->input->post('name');
		$userid = $this->input->post('userid');
			
		$data = array(
			
			'skill_name' => $name,
			'skill_userid' => $userid

		);
		$this->Expense_Model->add('skill',$data);
		//$this->index();
		redirect (base_url('user_skills'));
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}

