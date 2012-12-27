<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: 
 * Description: Help controller class
 */
class Help extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Check login
		$this->check_isvalidated();
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
	
	
	public function index(){
		$data['title']='Help Page';
		$data['headline']='';
		$data['name']=$this->session->userdata('name');
	
		$data['include']='admin/help_view';//view page
		$this->load->vars($data);
		//$this->load->view('admin/template');
		$this->load->view('admin/template');
	}
}
/* End of file help.php */
/* Location: ./application/controllers/help.php */