<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author:
* Description: Gallery controller class
*/
class Gallery extends CI_Controller
{
	private $img_path = './uploads/gallery/tmp';


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

	public function index()
	{
		$data['error']='';
		$data['title']='Admin Home';
		$data['headline']='';
		$data['name']=$this->session->userdata('name');

		$data['include']='admin/gallery_view';//view page
		$this->load->vars($data);
		//$this->load->view('admin/template');
		$this->load->view('admin/template');

	}

	public function img_upload()
	{
		// config for Upload libraries
		$config['upload_path'] = $this->img_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';

		$this->load->library('upload', $config);

		// Post data
		$fdata = $_FILES['userfile'];
		$files = array();
		if (is_array($fdata['name'])) {
			for ($i = 0; $i < count($fdata['name']); ++$i) {
				$files[] = array(
						'files'=>(array(
								'name' => $fdata['name'][$i],
								'tmp_name' => $fdata['tmp_name'][$i],
								'type'=>$fdata['type'][$i],
								'error'=>$fdata['error'][$i],
								'size'=>$fdata['size'][$i],
		
						))
				);
			}
		}else{
			$files[] = $fdata;
		}
		
		// Data to CI
		$i=1;
		$data = array();
		
		foreach($files as $file){
			$_FILES = $file;
			
			
			if ( ! $this->upload->do_upload('files'))
			{
				$data = array('code'=>1,'error' => $this->upload->display_errors());
				
				//$this->load->view('upload_form', $error);
				//echo json_encode($error);
				//print_r($error);
			}
			else
			{		
				$data[] = array('code'=>0,'upload_data' => $this->upload->data());
				//array_push($data , (array('upload_data' => (array($i => $this->upload->data())))));
			
				//$this->load->view('upload_success', $data);
				
				
			}
			$i++;
		}echo json_encode($data);
	}

}
/* End of file gallery.php */
/* Location: ./application/controllers/admin/gallery.php */

