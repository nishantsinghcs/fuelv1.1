<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

if(!function_exists('getLanguages'))
{
 	function getLanguages()
	{	$ci =& get_instance();
		$ci->db->select('*');
		$ci->db->from('languages');
		$ci->db->where('status',1);
		$query = $ci->db->get();
		if($ci->db->affected_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

}


if(!function_exists('relatedterms'))
{
 	function relatedterms($msgid)
	{	$ci =& get_instance();
		$ci->db->like('msgid',$msgid);
		$ci->db->select('*');
		$ci->db->from('strings');		
		$query = $ci->db->get();
		if($ci->db->affected_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

}
if(!function_exists('getProjectfromid'))
{
 	function getProjectfromid($id)
	{	$ci =& get_instance();
		$ci->db->select('project_name');
		$ci->db->from('projects');
		$ci->db->where('project_id',$id);
		$query = $ci->db->get();
		if($ci->db->affected_rows()>0)
		{
			foreach ($query->result() as $row){
			 return $row->project_name;
			}
		}
		else
		{
			return false;
		}
	}

}


if(!function_exists('getProjectidfromname'))
{
 	function getProjectidfromname($name)
	{	$ci =& get_instance();
		$ci->db->select('project_id');
		$ci->db->from('projects');
		$ci->db->where('project_name',$name);
		$query = $ci->db->get();
		if($ci->db->affected_rows()>0)
		{
			foreach ($query->result() as $row){
			 return $row->project_id;
			}
		}
		else
		{
			return false;
		}
	}

}


if(!function_exists('getLocTermfromid'))
{
 	function getLocTermfromid($id,$lang,$status)
	{	$ci =& get_instance();
		$ci->db->select('*');
		$ci->db->from('string_suggestions');
		$ref = array('string_id' => $id,'language_id' => $lang, 'status' => $status);
		$ci->db->where($ref);
		$query = $ci->db->get();
		if($ci->db->affected_rows()>0)
		{
			//foreach ($query->result() as $row){
			// return $row->suggestion;
			//}
			return $query->result();
		}
		else
		{
			return false;
		}
	}

}












if(!function_exists('getDir'))
{
 	function getDir($dir)
	{
		return array_slice(scandir($dir), 2);	
	}

}

if(!function_exists('TotalStrings'))
{
 	function TotalStrings($dir)
	{
		$file_content_string=file_get_contents($dir);
		return substr_count($file_content_string,"msgid");	
	}

}

if(!function_exists('TotalStringsinDirectory'))
{
 	function TotalStringsinDirectory($dir)
	{		$num=0;
			if(is_dir($dir)) {
				if($dh = opendir($dir)){
					while($file = readdir($dh)){
						if($file != '.' && $file != '..'){
							if(is_dir($dir . $file)){
										$file_content_string=file_get_contents($dir.'/'.$file);
										$num= $num+substr_count($file_content_string,"msgid");	
								// since it is a directory we recurse it.
								recurseDir($dir . $file . '/');
							}else{
									$file_content_string=file_get_contents($dir.'/'.$file);
									$num= $num+substr_count($file_content_string,"msgid");  
					 		}
						}
			 		}
				}
	 		closedir($dh);         
	     	}
	     return $num;	
	}
}

if(!function_exists('UnlocalisedStrings'))
{
 	function UnlocalisedStrings($dir)
	{
		$file_content_string=file_get_contents($dir);
		return substr_count($file_content_string,'msgstr ""');	
	}

}

if(!function_exists('UnlocalisedStringsinDirectory'))
{
 	function UnlocalisedStringsinDirectory($dir)
	{		$num=0;
			if(is_dir($dir)) {
				if($dh = opendir($dir)){
					while($file = readdir($dh)){
						if($file != '.' && $file != '..'){
							if(is_dir($dir . $file)){
										$file_content_string=file_get_contents($dir.'/'.$file);
										$num= $num+substr_count($file_content_string,'msgstr ""');	
								// since it is a directory we recurse it.
								recurseDir($dir . $file . '/');
							}else{
									$file_content_string=file_get_contents($dir.'/'.$file);
									$num= $num+substr_count($file_content_string,'msgstr ""');  
					 		}
						}
			 		}
				}
	 		closedir($dh);         
	     	}
	     return $num;	
	}
}

if(!function_exists('FileLastModified'))
{
 	function FileLastModified($dir)
	{
		return date ("F d Y H:i:s.", filemtime($dir));
		 	
	}

}




