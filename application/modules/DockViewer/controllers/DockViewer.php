<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DockViewer extends CI_Controller
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
		$dir    = 'projects';
		$this->load->helper('NS_helper');
		$data['getDir']=getDir($dir);
		$data['predir']=$dir;
		$this->load->view('List_projects',$data); // View		
	}
	public function LanguageList($dirname)
	{
		$dir    = 'projects/'.$dirname;
		$data['predir']=$dir;
		$this->load->helper('NS_helper');
		$data['getDir']=getDir($dir);
		$files=$data['getDir'];
			foreach ($files as $key => $value) {
				$data['TotalStringsinDirectory'][$key]=TotalStringsinDirectory($dir.'/'.$value);
				$data['UnlocalisedStringsinDirectory'][$key]=UnlocalisedStringsinDirectory($dir.'/'.$value);
				//var_dump($data['TotalStringsinDirectory']);
				//$data['UnlocalisedStrings'][$key]=UnlocalisedStrings($dir.'/'.$value);
				$data['FileLastModified'][$key]=FileLastModified($dir.'/'.$value);
			}
		$this->load->view('List_languages',$data); // View		
	}
	public function FileList()
	{
		$dir    = $_GET['filepathForm'];
		$this->load->helper('NS_helper');
		$data['predir']=$dir;
		$data['getDir']=getDir($dir);
		$files=$data['getDir'];
			foreach ($files as $key => $value) {
				$data['TotalStrings'][$key]=TotalStrings($dir.'/'.$value);
				$data['UnlocalisedStrings'][$key]=UnlocalisedStrings($dir.'/'.$value);
				$data['FileLastModified'][$key]=FileLastModified($dir.'/'.$value);
			}
		$this->load->view('ShowFiles',$data); // View		
	}

	public function File()
	{
		$dir    = $_GET['filepathForm'];
		$this->load->helper('NS_helper');
		$data['predir']=$dir;
		$data['filename']=$_GET['filename'];
		$data['file_content']=htmlentities(file_get_contents($dir));
		$this->load->view('FileViewer',$data); // View		
	}
	
}