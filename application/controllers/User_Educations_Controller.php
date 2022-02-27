<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Educations_Controller extends CI_Controller {

	public function index()
	{

		$this->load->view('header');
		$this->load->view('user_educations');
		$this->load->view('footer'); 
		
	}

	public function add_user_education()
	{
		
		$name = $this->input->post('name');
		$achievement = $this->input->post('achievement');
		$major = $this->input->post('major');
		$acceptyear = $this->input->post('acceptyear');
		$country = $this->input->post('country');
		$userid = $this->input->post('userid');
			
		$data = array(
			
			'education_name' => $name,
			'education_achievement' => $achievement,
			'education_major' => $major,
			'education_acceptyear' => $acceptyear,
			'education_country' => $country,
			'education_userid' => $userid

		);
		$this->Expense_Model->add('education',$data);
		//$this->index();
		redirect (base_url('user_educations'));
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}

