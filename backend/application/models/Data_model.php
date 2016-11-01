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

	public function proses_input(){
		$data=array(
			'judul' => $this->input->post('todolist'),
			'description' => $this->input->post('description')
		);
		$this->db->insert('list', $data);
		if($this){
			return true;
		}else{
			return false;
		}		
	}

	public function proses_delete($id){
		if(is_numeric($id)){
			$this->db->delete('list', array('id_list'=>$id));
			return true;
		}else{
			return false;
		}	
	}
}