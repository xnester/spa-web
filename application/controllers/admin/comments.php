<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: 
 * Description: Comments controller class
 */
class Comments extends CI_Controller
{
	private $per_page;
	
	function __construct()
	{
		parent::__construct();
		// Check login
		$this->check_isvalidated();
		
		$this->load->model('MComments');
		
		//Pagination
		$this->load->library('pagination');
		
		//$this->db->where('status', 'Active');
		//$this->db->count_all('domains');
		$this->db->from('contact_us');
		$all= $this->db->count_all_results();
		
		$config['base_url'] = base_url().'admin/comments/page/';
		$config['total_rows'] = $all;
		$config['per_page'] = $this->per_page;
		$config['num_links'] = 10;
		//$config['use_page_numbers'] = TRUE;
		$this->pagination->initialize($config);
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
	
	function page($offset=0)
	{
		$this->load->library('table');
		$data['offset']=$offset;
		
		$this->per_page = 10;
				
		$query = $this->MComments->getAllComment($this->per_page ,$offset);
		
		$table_tmpl = array ( 'table_open' => '<table class="table table-striped">' );
		$this->table->set_template($table_tmpl);
		$this->table->set_empty("&nbsp;");
		$this->table->set_heading('#','Title','Name','EMail','Phone','Stamp');
				
		$table_row = array();
		$i=1+$offset;
		
		foreach ($query->result() as $comments)
		{
			$table_row = NULL;
			$table_row[] = $i;
			$table_row[] = htmlspecialchars($comments->title);
			$table_row[] = htmlspecialchars($comments->name);
			$table_row[] = htmlspecialchars($comments->email);
			$table_row[] = htmlspecialchars($comments->phone);
			$table_row[] = htmlspecialchars($comments->stamp);
			$this->table->add_row($table_row);
			$i++;
		}
		
		$comment_table = $this->table->generate();
		return $comment_table;
	}
	
	public function index(){
		$data['title']='Admin Home';
		$data['headline']='';
		$data['name']=$this->session->userdata('name');
		
		$data['data_table'] = $this->page();
		
		$data['include']='admin/comments_view';//view page
		$this->load->vars($data);
		//$this->load->view('admin/template');
		$this->load->view('admin/template');
	}
	
}
/* End of file comments.php */
/* Location: ./application/controllers/admin/comments.php */

