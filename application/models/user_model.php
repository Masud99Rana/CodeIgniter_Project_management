<?php

class User_model extends CI_Model {



	public function create_user(){
		
		$options = ['cost' => 12];

		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

			'first_name' => $this->input->post('first_name'),
			'last_name'  => $this->input->post('last_name'),
			'email' 	 => $this->input->post('email'),
			'username' 	 => $this->input->post('username'),
			'password'   => $encripted_pass
		);

		$insert_data = $this->db->insert('users', $data);
		
		return $insert_data;

	}


	public function login_user($username, $password){
		
		$this->db->where('username', $username);
		// $this->db->where('password', $password);
		$result = $this->db->get('users');


		$db_password = $result->row(5)->password;

		if(password_verify($password, $db_password)){
			//it'a a native php function
			//			
			return $result->row(0)->id;
		}else {
			return false;
		}

	}  




	
	

	// public function get_users($user_id,$username){

	// 	$this->db->where([
	// 		'id' => $user_id,
	// 		'username' => $username
	// 		]);

	// 	$query = $this->db->get('users');
	// 	// get return array of object
	// 	return $query->result(); //autoload reg
	// }



	// public function update_users($data, $id){
	// 	$this->db->where(['id' => $id]);
	// 	$this->db->update('users', $data);
	// }


	// public function delete_users($id){


	// 	$this->db->where(['id'=> $id]);
	// 	$this->db->delete('users');
	// }

}

?>