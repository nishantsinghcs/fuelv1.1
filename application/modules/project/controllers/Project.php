<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller
{	
	

	public function __construct()
	{
		parent::__construct();	
		header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->model(array('Projectmodel'));
	}
	
	public function index()
	{
		$this->load->helper('NS_helper');
		$data['project']=$this->Projectmodel->get_projects();
		foreach ($data['project'] as $key => $value) {
			$count[$key][]= $this->Projectmodel->unlocalised_strings($value->project_id);
			
		}
		$data['count']=$count;
		
		$data['languages']=getLanguages();

		$this->load->view('project_view',$data); // View	
	}
	public function lang($lang)
	{
		$this->load->helper('NS_helper');
		$data['project']=$this->Projectmodel->get_projects();
		$language_id=$this->Projectmodel->get_langname_from_lang($lang);
		foreach ($data['project'] as $key => $value) {
			$count[$key][]= $this->Projectmodel->unlocalised_strings_language_wise($value->project_id,$language_id);
			$uscount[$key][]=$this->Projectmodel->get_us_strings($value->project_id);
		}
		$data['uscount']=$uscount;
		$data['count']=$count;
		$data['lang']=$lang;
		$this->load->view('lang_index_view',$data); // View	
	}
	
	
}