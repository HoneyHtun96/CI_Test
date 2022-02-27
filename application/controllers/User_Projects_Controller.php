<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Projects_Controller extends CI_Controller {

	public function index()
	{

		$this->load->view('header');
		$this->load->view('user_projects');
		$this->load->view('footer'); 
		
	}

	public function add_user_project()
	{
		
		$name = $this->input->post('name');
		$cover = $this->input->post('cover');
		$description = $this->input->post('description');		
		$userid = $this->input->post('userid');
			
		$data = array(
			
			'project_name' => $name,
			'project_cover' => $cover,
			'project_description' => $description,
			'project_userid' => $userid
			

		);
		$this->Expense_Model->add('project',$data);
		//$this->index();
		redirect (base_url('user_projects'));
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}

