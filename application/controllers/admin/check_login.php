<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: 
 * Description: Check_login controller class
 */
class Check_login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Check login
		//$this->check_isvalidated();
	}
	private function check_isvalidated()
	{
		if(!$this->session->userdata('validated'))
		{
			redirect('admin/login');
		}
	}
	public function do_logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}


/* End of file check_login.php */
/* Location: ./application/controllers/check_login.php */