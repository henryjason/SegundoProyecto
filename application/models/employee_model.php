<?php

class Employee_model extends CI_Model {
	
	function get_employees() {
		//$query = $this->db->get('employee');
		$this->db
			->select()
			->from('employed')
			->order_by('nombre');
		$query = $this->db->get();
		return $query->result_array();
		//return $query->result();
	}


	function login($parametros) {

		$funcion = $parametros['categoria'];


		if($funcion=='Student'){
             $this->db
			->select()
			->from('student')
			->where('email', $parametros['email'])
			->where('password', $parametros['password'])
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
		}

		else if($funcion=='Profesor'){

             $this->db
			->select()
			->from('professor')
			->where('email', $parametros['email'])
			->where('password', $parametros['password'])
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();


		}else if($funcion=='admin'){

             $this->db
			->select()
			->from('administrador')
			->where('email', $parametros['email'])
			->where('password', $parametros['password'])
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
        }else{
        	return 0;
        }

		
		//return $query->result();
	}

function get_user($type) {

		if($type =='Student'){
             $this->db
			->select()
			->from('student')
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
		}

		else if($type=='Profesor'){

             $this->db
			->select()
			->from('professor')
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();


		}else if($type=='admin'){

             $this->db
			->select()
			->from('administrador')
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
        }else{
        	return 0;
        }

		
		//return $query->result();
	}

	


	function insert_student($pStudent){
		$this->db->insert('student', $pStudent);
		return $this->db->insert_id();
	}

	function insert_profesor($pProfesor){
		$this->db->insert('professor', $pProfesor);
		return $this->db->insert_id();
	}


	function insert_admin($pAdmin){
		$this->db->insert('administrador', $pAdmin);
		return $this->db->insert_id();
	}

	function update_employee($employee_id, $employee) {
		$this->db->where('id',$employee_id);
		$this->db->update('employee', $employee);
	}

	function delete_employee($id) {
		$this->db->where('id', $id);
		$this->db->delete('employee');
	}

}