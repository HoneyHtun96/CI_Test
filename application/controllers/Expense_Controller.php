<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense_Controller extends CI_Controller {

	public function index()
	{
		$query = $this->db->get('categories'); ////'categories' means table name
		$result = $query->result();
		$data['categories'] = $result;

		$query = $this->db->get('expenses');
		$result = $query->result();
		$data['expenses'] = $result;

		$this->db->select('expenses.*,categories.name as category_name');
		$this->db->from('expenses');
		$this->db->join('categories', 'categories.id = expenses.categoryid');
		$query = $this->db->get();
		$result = $query->result();
		$data['myexpenses'] = $result;

		$this->load->view('header');   //'bootcamp' means call bootcamp.php
		$this->load->view('expense', $data);
		$this->load->view('footer');
	}


	public function add_expense()
	{
		$name = $this->input->post('name');
		$categoryid = $this->input->post('category_id');
		$amount = $this->input->post('amount');
		$date = $this->input->post('date');
		$remark = $this->input->post('remark');

		$expense = array(
			'name' => $name,
			'categoryid' => $categoryid,
			'amount' => $amount,
			'remark' => $remark,
			'date' => $date

		);
		//var_dump($expense);

		$this->Expense_Model->add('expenses',$expense); ////'expenses' means database name
		redirect(base_url('expense'));
	}


		public function delete_expense(){
			$id = $this->input->post('id');
			$data = array('id'=>$id);
			$this->Expense_Model->delete('expenses', $data);
			redirect (base_url('expense'));
		}

		

}
