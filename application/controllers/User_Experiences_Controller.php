<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Experiences_Controller extends CI_Controller {

	public function index()
	{

		$this->load->view('header');
		$this->load->view('user_experiences');
		$this->load->view('footer'); 
		
	}

	public function add_user_experience()
	{
		
		$position = $this->input->post('position');
		$companyname = $this->input->post('companyname');
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		$description = $this->input->post('description');
		$userid = $this->input->post('userid');
			
		$data = array(
			
			'experience_position' => $position,
			'experience_companyname' => $companyname,
			'experience_startdate' => $startdate,
			'experience_enddate' => $enddate,
			'experience_description' => $description,
			'experience_userid' => $userid

		);
		$this->Expense_Model->add('experience',$data);
		//$this->index();
		redirect (base_url('user_experiences'));
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}

