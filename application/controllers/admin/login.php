<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author:
 * Description: Login controller class
 */
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	function index()
	{
		if($this->session->userdata('validated'))
		{
			redirect('admin/manage');
		}else{
			
		$data['title']='Admin Login';
		$data['headline']='';
		
		$data['include']='admin/login_view';//view page
		$this->load->vars($data);
		//$this->load->view('admin/template');
		$this->load->view('front_tpl');
		}
	}
	function process()
	{
		$data=array(
			'user' => $this->security->xss_clean($this->input->post('user')),
			//encrypt password with MD5
			'passwd' => md5($this->security->xss_clean($this->input->post('passwd')))
		);
		$result=$this->login_model->validate($data);
		if($result)
		{
			// for response to ajax 
			echo '1';
		}
	}
	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */