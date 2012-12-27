<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: 
 * Description: Home controller class
 */
class Front extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	/*
	 * Main function of class
	 */
	function index()
	{
		$this->load->model("mutils","MUtils");
		echo "test";
		$this->MUtils->initd("user");
		$this->MUtils->select_db(20);
	}
}
/* End of file front.php */
/* Location: ./application/controllers/front.php */