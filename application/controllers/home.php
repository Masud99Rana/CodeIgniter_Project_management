<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
		// 
		// echo "This is Masud from home Controller";
	}


	public function me(){

		echo "Hello, Masud from home Controller";
	}
}
