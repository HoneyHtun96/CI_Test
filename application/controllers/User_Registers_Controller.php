<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Registers_Controller extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('user');
		$user_registers = $query->result();
		$data['user_registers'] = $user_registers;
		
		$this->load->view('header');
		$this->load->view('user_registers',$data);
		$this->load->view('footer'); 
		
	}

	public function add_user_register()
	{
		$photo = $this->input->post('photo');
		$name = $this->input->post('name');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		echo $photo,$name,$gender,$email,$password;
		$data = array(
			'user_profile' => $photo,
			'user_name' => $name,   // 'name' means database table name
			'user_gender' =>$gender,
			'user_email' =>$email,
			'user_password' =>$password

		);
		$this->Expense_Model->add('user',$data);
		//$this->index();
		redirect (base_url('user_registers'));
	}

	public function delete_user_register(){
		$id = $this->input->post('id');
		$data = array('id'=>$id);
		$this->Expense_Model->delete('user', $data);
		redirect (base_url('user_registers'));
	}


	public function hello()
	{
		$this->load->view('hello');
	}


}

