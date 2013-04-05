<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: 
 * Description: Home controller class
 */
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Check login
		$this->check_isvalidated();
	}
	public function index(){
		$data['title']='Admin Home';
		$data['headline']='';
		$data['name']=$this->session->userdata('name');
		
		$data['include']='admin/home_view';//view page
		$this->load->vars($data);
		//$this->load->view('admin/template');
		$this->load->view('admin/template');
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


/* End of file home.php */
/* Location: ./application/controllers/home.php */