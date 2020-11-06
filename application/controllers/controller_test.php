<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_test extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Data_model');
		$data['sale'] = $this->Data_model->get();
		$this->load->view('test/test_index', $data);
	}

	public function index2()
	{

		$this->load->view('test/test2_index');
	}


	public function post()
	{

		

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$a = $this->input->post('counter');
		$b = $_SERVER['HTTP_X_RANDOM'];

			$param = [
				"Counter" => $a,
				"X-RANDOM" => $b
			];
		header('X-PHP-Response-Code: 201', true, 201);		
		
		$log  = '['.date("Y-m-d".'T:'." h:i:sa").']'.' Success: '.$_SERVER['REQUEST_METHOD'].' '.json_encode($param).PHP_EOL;
		
		file_put_contents('./server.log.txt', $log, FILE_APPEND);
		echo json_encode($param);
	}
	}



}
