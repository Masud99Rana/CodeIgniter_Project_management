<?php

class Task_model extends CI_Model {

	public function get_task($task_id){

		$this->db->where('id', $task_id);
		$query = $this->db->get('tasks');

		return $query->row();
		// This will return an array of object

	}

	public function create_task($data){

		$insert_query = $this->db->insert('tasks', $data);
		return $insert_query;

	}

	public function get_task_project_id($task_id){

		$this->db->where('id', $task_id);
		$query = $this->db->get('tasks');

		return $query->row()->project_id;

	}


	public function get_project_name($project_id){

		$this->db->where('id', $project_id);
		$query = $this->db->get('projects');

		return $query->row()->project_name;

	}


	public function get_task_project_data($task_id){

		$this->db->where('id', $task_id);
		$query = $this->db->get('tasks');

		return $query->row();
	}

	public function edit_task($task_id, $data){

		$this->db->where('id', $task_id);
		$this->db->update('tasks', $data);

		return true;
	}

}