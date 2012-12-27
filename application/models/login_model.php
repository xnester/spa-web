<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
 * Author: 
 * Description: Login model class
 */
class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function validate($data)
	{
		$this->db->from('user');
		$this->db->where('user', $data['user']);
		$this->db->where('password',$data['passwd']);
		
		$query=$this->db->get();
		//$row = $query->row();
		//return $row;
		if ($query->num_rows() == 1) {
			$row = $query->row();
			$user_data = array(
				'id' => $row->id,
				'user' => $row->user,
				'name'=>$row->name,
				'validated' => true
			);
			$this->session->set_userdata($user_data);
			return true;
		}
		
		return false;
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */