<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Details_Controller extends CI_Controller {

	public function index()
	{

		$this->load->view('header');
		$this->load->view('user_details');
		$this->load->view('footer'); 
		
	}

	public function add_user_detail()
	{
		$jobtitle = $this->input->post('jobtitle');
		$dob = $this->input->post('dob');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$description = $this->input->post('description');
		$userid = $this->input->post('userid');
		//echo $jobtitle;
		$data = array(
			'userdetail_jobtitle' => $jobtitle,
			'userdetail_dob' => $dob,   // 'name' means database table name
			'userdetail_phone' =>$phone,
			'userdetail_address' =>$address,
			'userdetail_description' =>$description,
			'userdetail_userid' => $userid

		);
		$this->Expense_Model->add('userdetail',$data);
		//$this->index();
		redirect (base_url('user_details'));
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}

