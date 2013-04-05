<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: 
 * Description: Contact controller class
 */
class Contact extends CI_Controller
{
	private $status;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MComments');
	}
	
	function addComment()
	{
		$data=array(
				'name'=>$this->security->xss_clean($this->input->post('name')),
				'email'=>$this->security->xss_clean($this->input->post('email')),
				'phone'=>$this->security->xss_clean($this->input->post('phone')),
				'title'=>$this->security->xss_clean($this->input->post('title')),
				'detail'=>$this->security->xss_clean($this->input->post('detail'))
		);
		if ($data['name'] != '' && $data['email'] != '' )
		{
			if( ! $this->MComments->insertComment($data) )
			{
				$this->status['code']='0';
				$this->status['error']='Error Insert to database';
				echo json_encode($this->status);	
					
			}else{
				
				$this->status['code']='1';
				$this->status['success']='Insert to database completed.';
				echo json_encode($this->status);
				//redirect('contact/','refresh');
			}
		} else {
			redirect('contact/','refresh');	
		}
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