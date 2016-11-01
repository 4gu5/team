<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('data_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function get_list()
	{
		$list=$this->data_model->get_list();
		foreach ($list as $key => $value) {
			$data[]=array(
				"judul" => $value['judul'],
				"deskripsi" => $value['description']
			);
		}
		echo json_encode($data);
	}
}
