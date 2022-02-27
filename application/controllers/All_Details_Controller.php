<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_Details_Controller extends CI_Controller {

	public function index()
	{    

		$query = $this->db->get('user');
		$user_registers = $query->result();
		$data['user_registers'] = $user_registers;		
		$this->load->view('header');
		$this->load->view('detail',$data);
		$this->load->view('footer'); 

		// $this->db->select('*');
		// $this->db->from('user a');
		// $this->db->join('userdetail b', 'b.userdetail_userid = a.user_id','left');
		// $this->db->join('skill c', 'c.skill_userid = a.user_id','left');
		// $this->db->join('experience d', 'd.experience_userid = a.user_id','left');
		// $this->db->join('education e', 'e.education_userid = a.user_id','left');
		// $this->db->join('project f', 'f.project_userid = a.user_id','left');
		// $this->db->join('language g', 'g.language_userid = a.user_id','left');

		// //$this->Detail_Model->funcname();

		// $query = $this->db->get();
		// $all_detail = $query->result();
		// $data['all_detail'] = $all_detail;
		// $this->load->view('header');
		// $this->load->view('all_detail',$data);
		// $this->load->view('footer'); 
		
	}

	public function all_detail()
	{
		$id=$this->uri->segment(2);
		
		$this->db->select('*');
		$this->db->from('user a');
		$this->db->join('userdetail b', 'b.userdetail_userid = a.user_id','left');
		$this->db->join('skill c', 'c.skill_userid = a.user_id','left');
		$this->db->join('experience d', 'd.experience_userid = a.user_id','left');
		$this->db->join('education e', 'e.education_userid = a.user_id','left');
		$this->db->join('project f', 'f.project_userid = a.user_id','left');
		$this->db->join('language g', 'g.language_userid = a.user_id','left');
		$this->db->where('g.language_userid',$id);

		$query = $this->db->get();
		$all_detail = $query->result();
		$data['all_detail'] = $all_detail;
		$this->load->view('header');
		$this->load->view('all_detail',$data);
		$this->load->view('footer'); 

		//$this->Detail_Model->funcname();

		// $query = $this->db->get();
		// $all_detail = $query->result();
		// $data['all_detail'] = $all_detail;

	}


	public function hello()
	{
		$this->load->view('hello');
	}


}

