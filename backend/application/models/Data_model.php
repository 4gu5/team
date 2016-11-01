<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_list(){
		$query = $this->db->get('list');
		return $query->result_array();		
	}
}