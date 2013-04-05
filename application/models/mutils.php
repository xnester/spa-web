<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
 * Author: 
 * Description: Login model class
 */
class MUtils extends CI_Model
{
	/*
	 * Global Variable
	 */
	private $table_name;
	
	function __construct()
	{
		parent::__construct();
	}	
	
	/*
	 * Initial database
	 */
	function initd($table)
	{
		$this->table_name = $table;
	}
	
	/*
	 * Select data from DB
	*/
	function query_db($limit,$offset,$order,$dir='desc')
	{
		if( $this->table_name != "" )
		{
			$this->db->from($this->table_name);
			$this->db->order_by($order,$dir);
			//$this->db->where('status', 'Active');
			$this->db->limit($limit, $offset);
			$query=$this->db->get();
			return $query;
		}
		return false;
	}
	
	/*
	 * Insert data to DB
	 */
	function insert_db($data)
	{
		if( $this->table_name != "" )
		{
			$data['stamp']=date("Y-m-d H:i:s");
			$this->db->insert($this->table_name,$data);
			return true;
		}
		return false;
	}
	
	/*
	 * Update data on DB
	 */
	function update_db($id, $data)
	{
		
	}
	
	/*
	 * Delete data on DB
	 */
	function delete_db($id, $data)
	{
		
	}
}
/* End of file mutils.php */
/* Location: ./application/models/mutils.php */
