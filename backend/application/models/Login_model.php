<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sql="select * from login where username='$username' and password='$password'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return true;
		}else{
			return false;
		}
	}
}