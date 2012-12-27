<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: 
 * Description: Contact controller class
 */
class Contact extends CI_Controller
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
		$this->MUtils->initd("user");
		
		
		$data['title']='Contact Us';
		$data['headline']='';
		
		$data['h3']='Contact Us';
		
		$data['include']='contact_view';//view page
		$this->load->vars($data);
		$this->load->view('front_tpl');
		
	}
}
/* End of file contact.php */
/* Location: ./application/controllers/contact.php */