<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		
	}
	
	public function get_json()
	{
		$data['list']=$this->app_model->get_list();
		$this->load->view('get_json', $data);
	}

}