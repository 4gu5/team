<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$login=$this->login_model->get_login();
		if($login)
		{
			 echo json_encode(array("sukses" => true));
		}else{
			 echo json_encode(array("gagal" => true));
		}

	}
}