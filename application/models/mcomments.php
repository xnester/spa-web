<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
 * Author: 
 * Description: Comments model class
 */
class MComments extends CI_Model
{
	private $table_name;
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('MUtils');
		
		$this->table_name ='contact_us';
		$this->MUtils->initd($this->table_name);
	}
	
	function insertComment($data)
	{
		if( $this->MUtils->insert_db($data) )
		{
			return true;
		}
		return false;
	}
	
	/* 
	 * Admin Page 
	 */
	function getAllComment($limit,$offset)
	{
		$query = $this->MUtils->query_db($limit,$offset,$order='stamp');
		
		if( !$query )
		{
			return false;
		}
		return $query;
		
	}
}
/* End of file mcomments.php */
/* Location: ./application/models/mcomments.php */