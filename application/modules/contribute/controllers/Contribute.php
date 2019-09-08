<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contribute extends CI_Controller
{	
	

	public function __construct()
	{
		parent::__construct();	
		header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->model(array('Contributemodel'));
	}
	
	public function index()
	{
		$this->load->helper('NS_helper');
		$data['project']=$this->Contributemodel->get_projects();
		foreach ($data['project'] as $key => $value) {
			$count[$key][]= $this->Contributemodel->unlocalised_strings($value->project_id);
			
		}
		$data['count']=$count;
		
		$data['languages']=getLanguages();

		$this->load->view('project_view',$data); // View	
	}
	public function project($projname)
	{
		$this->load->helper('NS_helper');
		$project_id=getProjectidfromname($projname);
		$data['strings']=$this->Contributemodel->get_strings($project_id);
		$data['projname']=$projname;
		//var_dump($data['strings']);
		$this->load->view('project_workload',$data); // View	
	}
	
	
}