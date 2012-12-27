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
	}
	
	/*
	 * Main function of class
	 */
	function index()
	{
		$this->load->model("mutils","MUtils");
		$this->MUtils->initd("user");
		
		
		$data['title']='Home';
		$data['headline']='';
		
		$data['h3']='Home';
		
		$data['include']='home_view';//view page
		$this->load->vars($data);
		$this->load->view('front_tpl');
		
	}
}
/* End of file promotion.php */
/* Location: ./application/controllers/promotion.php */