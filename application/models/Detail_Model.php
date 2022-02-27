<?php
	/**
	 * 
	 */
	class Detail_Model extends CI_Model
	{		

		public function funcname($id)
		{
			$this->db->select('*');
			$this->db->from('user a');
			$this->db->join('userdetail b', 'b.userdetail_userid = a.user_id','left');
			$this->db->join('skill c', 'c.skill_userid = a.user_id','left');
			$this->db->join('experience d', 'd.experience_userid = a.user_id','left');
			$this->db->join('education e', 'e.education_userid = a.user_id','left');
			$this->db->join('project f', 'f.project_userid = a.user_id','left');
			$this->db->join('language g', 'g.language_userid = a.user_id','left');
			$this->db->where('g.language_userid',$id);
			   //$this->db->order_by('c.track_title','asc');         
			    $query = $this->db->get(); 
			    if($query->num_rows() != 0)
			    {
			        return $query->result_array();
			    }
			    else
			    {
			        return false;
			    }
		}
	}
	
		
?>