<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense_List_Controller extends CI_Controller {

	public function index()
	{
		

		$this->load->view('header');   //'bootcamp' means call bootcamp.php
		$this->load->view('expenselist');
		$this->load->view('footer');
	}

	public function search_by_date(){
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$data = array(
			'start_date' => $start_date,
			'end_date' => $end_date
		);

		$myexpenses = $this->Expense_Model->search_expense_by_date($data);
		$data['myexpenses'] = $myexpenses;
		$this->load->view('header');
		$this->load->view('expenselist',$data);
		$this->load->view('footer');
		//var_dump($myexpenses);

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
