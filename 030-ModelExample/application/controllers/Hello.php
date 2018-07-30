<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("test_model");
	}
	
	public function index(){
		echo "<h1>Hello</h1>";
		echo json_encode($this->test_model->get_all());
	}
}
