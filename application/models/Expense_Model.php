<?php
	/**
	 * 
	 */
	class Expense_Model extends CI_Model
	{		
		
		public function add($table,$data){
			//echo $data;
			$this->db->insert($table,$data);
		}

		public function delete($table,$data){
			$this->db->delete($table, $data);
		}

		public function search_expense_by_date($data){
			$start_date = $data['start_date'];
			$end_date = $data['end_date'];

			$this->db->select('expenses.*,categories.name as category_name');
			$this->db->from('expenses');
			$this->db->join('categories', 'categories.id = expenses.categoryid');
			$this->db->where('expenses.date>=',$start_date);
			$this->db->where('expenses.date<=',$end_date);
			$query= $this->db->get();
			return $query->result();

		}
		
	}
		
?>