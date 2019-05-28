<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function show($user_id)
	{
		$data['result'] = $this->user_model->get_users($user_id,'Rana');// using autoloadS
		
		$this->load->view('user_view', $data);
	}



	public function insert(){

		$username = "Salman";
		$password = "password";

		$this->user_model->create_users([

			'username' => $username,
			'password' => $password

		]);
	}


	public function update(){

		$id = 3;

		$username = "Salman22";
		$password = "password22";

		$this->user_model->update_users([

			'username' => $username,
			'password' => $password

		], $id);
	}

	public function delete(){

		$id = 3;

		$this->user_model->delete_users($id);
	}
}






