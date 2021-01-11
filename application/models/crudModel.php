<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model{

	public function register($data)
	{
		$this->db->insert('users',$data);
	}
	
	public function userInfo()
	{

		 $this->db->select('*');
		 $this->db->from('users');
		return $query = $this->db->get()
		->result();
	}
}
