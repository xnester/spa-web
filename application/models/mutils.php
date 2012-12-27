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
	private $table;
	
	
	
	
	function __construct()
	{
		parent::__construct();
	}	
	
	/*
	 * Initial database
	 */
	function initd($table)
	{
		$this->table = $table;
	}
	
	/*
	 * Select data from DB
	*/
	function select_db($id)
	{
		echo $this->table;
	}
	
	/*
	 * Insert data to DB
	 */
	function insert_db($data)
	{
		
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
