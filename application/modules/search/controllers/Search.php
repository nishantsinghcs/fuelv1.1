<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller
{	
	

	public function __construct()
	{
		parent::__construct();	
		header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->model(array('Searchmodel'));
	}
	
	public function index()
	{
		$this->load->helper('NS_helper');
		if (isset($_GET['q'])) {		
		$term=$_GET['q'];
		if (!isset($_GET['lang'])) {
			$language_code='hi';	
		}
		else{
			if ($_GET['lang']=='') {
				$language_code='hi';
			}
			else{
		$language_code=$_GET['lang'];
			}
		}
		if(!$term==''){
		$data['term']= $this->Searchmodel->search_term($term);
		$string_id=$data['term'][0]['string_id'];
		$language_id=$this->Searchmodel->get_code_from_lang($language_code);
		$data['language_id']=$language_id;
		$data['language_name']=$this->Searchmodel->get_langname_from_lang($language_code);
		$data['term_meaning']= $this->Searchmodel->term_meaning($string_id,$language_id);
		if (!$data['term_meaning']==false) {
			$this->load->view('searh_result',$data); // View	
		}
		else{
			echo "<pre><code>Returned nothing, redirect to 404</code></pre>";
		}
		
		}
		else{
			echo "<pre><code>You have searched for nothing! Redirect to 404</code></pre>";
		}
		}
		else{
			echo "<pre><code>You should not be here! Redirect to 404</code></pre>";
		}	
	}
	
	
}