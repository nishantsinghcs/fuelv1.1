<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();	
		header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
		//echo "LOL";
	}
	
	

		
	
	


	
}