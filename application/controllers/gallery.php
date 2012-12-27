<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: 
 * Description: Gallery controller class
 */
class Gallery extends CI_Controller
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
		
		
		$data['title']='Gallery';
		$data['headline']='';
		
		$data['h3']='Gallery';
		
		$data['include']='gallery_view';//view page
		$this->load->vars($data);
		$this->load->view('front_tpl');
		
	}
}
/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */