<?php 

class Projectmodel extends CI_Model{	
	
    private $u_primary_key='u_id';

	public function __construct(){
		
	    $this->load->database();
	}

		public function get_langname_from_lang($language_id) {
		
		$this->db->select('id');
		$this->db->from('languages');
		$this->db->where('language_code',$language_id);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			  foreach ($query->result() as $row){
			 return $row->id;
			}
		}
		else
		{
			return false;
		}
	}
	public function get_projects() {
		$this->db->select('*');
		$this->db->from('projects');
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}


	public function get_us_strings($project_id) {
		$this->db->select('string_id');
		$this->db->from('strings');
		$this->db->where('project_id',$project_id);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return false;
		}

	}

	public function unlocalised_strings($project_id) {
		// Sub Query
		$this->db->select('string_id')->from('string_suggestions');
		$this->db->where('project_id',$project_id);
		//$this->db->where('language_id',143);
		$subQuery =  $this->db->get_compiled_select();	 
		// Main Query
		$result=$this->db->select('count(*) as count')
		         ->from('strings')
		         ->where("string_id NOT IN ($subQuery)", NULL, FALSE)
		         ->get()
		         ->row();
		return $result->count;

	}
	
	public function unlocalised_strings_language_wise($project_id,$language_id) {
		// Sub Query
		$this->db->select('string_id')->from('string_suggestions');
		$ref = array('language_id' => $language_id, 'project_id' => $project_id, 'status' => 3);
		$this->db->where($ref);
		$subQuery =  $this->db->get_compiled_select();	 
		// Main Query
		$result=$this->db->select('count(*) as count')
		         ->from('strings')
		         ->where("string_id NOT IN ($subQuery)", NULL, FALSE)
		         ->where('project_id',$project_id)
		         ->get()
		         ->row();
		return $result->count;

	}
	




	
}