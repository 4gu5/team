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
				"deskripsi" => $value['description'],
				"id_list" => $value['id_list'],
			);
		}
		echo json_encode($data);
	}

	public function input_list()
	{
		$input=$this->data_model->proses_input();
		if($input)
		{
			 echo json_encode(array("sukses" => true));
		}else{
			 echo json_encode(array("gagal" => true));
		}
	}

	public function delete_list($id)
	{
		$delete=$this->data_model->proses_delete($id);
		if($delete)
		{
			 echo json_encode(array("sukses" => true));
		}else{
			 echo json_encode(array("gagal" => true));
		}
	}
}
