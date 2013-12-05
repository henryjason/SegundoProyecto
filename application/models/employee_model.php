<?php

class Employee_model extends CI_Model {
	


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


function get_user($type, $pLike) {

		if($type =='Student'){
             $this->db
			->select()
			->from('student')
			->limit(10, 0)
			->where("document_number LIKE '%$pLike%'")
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
		}

		else if($type=='Profesor'){

             $this->db
			->select()
			->from('professor')
			->limit(10, 0)
			->where("document_number LIKE '%$pLike%'")
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();


		}else if($type=='admin'){

             $this->db
			->select()
			->from('administrador')
			->limit(10, 0)
			->where("document_number LIKE '%$pLike%'")
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
        }else{
        	return 0;
        }

		
		//return $query->result();
	}


function eliminar_user($type, $pid) {

		if($type =='Student'){

			$query = $this->db->delete('student', array('document_number' => $pid));

			if($query){

				return 1;
			}else{
				return 0;
			}


		}

		else if($type=='Profesor'){

			$query = $this->db->delete('professor', array('document_number' => $pid));

			if($query){

				return 1;
			}else{
				return 0;
			}

		}else if($type=='admin'){

			$query = $this->db->delete('administrador', array('document_number' => $pid));

			if($query){

				return 1;
			}else{
				return 0;
			}

}
		
		//return $query->result();
	}

	
function registrar_user($type, $parametros) {

	$data = array(
				'document_number' => $parametros['ID'],
				'first_name' => $parametros['name'],
				'last_name' => $parametros['last_name'],
				'password' => $parametros['password'],
				'username' => $parametros['username'],
				'email' => $parametros['email'],
				'created_at' => date("d-m-Y h:i:s")

			);

		if($type =='Student'){

			$this->db->insert('student', $data);
		    return $this->db->insert_id();


		}

		else if($type=='Profesor'){

			$this->db->insert('professor', $data);
		return $this->db->insert_id();

		}else if($type=='admin'){

		$this->db->insert('administrador', $data);
		return $this->db->insert_id();

}else{return 0;}
		
		//return $query->result();
	}


    function actualizar_user($type, $parametros) {
       $data = array(
				'document_number' => $parametros['ID'],
				'first_name' => $parametros['name'],
				'last_name' => $parametros['last_name'],
				'password' => $parametros['password'],
				'username' => $parametros['username'],
				'email' => $parametros['email'],
				'updated_at' => date("d-m-Y h:i:s")

			);

       if($type =='Student'){

			
        $this->db->where('document_number', $parametros['ID']);
        return $this->db->update('student', $data);

		}

		else if($type=='Profesor'){

		 $this->db->where('document_number', $parametros['ID']);
        return $this->db->update('professor', $data);

		}else if($type=='admin'){

		 $this->db->where('document_number', $parametros['ID']);
        return $this->db->update('administrador', $data);

}else{return 0;}


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


	// gestion de cursos


	function registrar_curso($parametros) {

	$data = array(
				'code' => $parametros['code'],
				'name' => $parametros['name'],
				'description' => $parametros['description'],
				'created_at' => date("d-m-Y h:i:s")

			);

		

			$this->db->insert('course', $data);
		    return $this->db->insert_id();

		
		//return $query->result();
	}


	function get_course($pLike) {

		
             $this->db
			->select()
			->from('course')
			->limit(10, 0)
			->where("code LIKE '%$pLike%'")
			->order_by('code');

		$query = $this->db->get();
		return $query->result_array();
		

	}

	function eliminar_course($pid) {

			$query = $this->db->delete('course', array('code' => $pid));

			if($query){

				return 1;
			}else{
				return 0;
			}	
		
	}

function actualizar_course($parametros) {
     	$data = array(
				'code' => $parametros['code'],
				'name' => $parametros['name'],
				'description' => $parametros['description'],
				'updated_at' => date("d-m-Y h:i:s")

			);


			
        $this->db->where('code', $parametros['code']);
        return $this->db->update('course', $data);




    }


    // gestion de grupo


	function registrar_grupo($parametros) {

		$enabled = 0;

		if($parametros['enabled']=="true"){
          $enabled = 1;
		}

	$data = array(
				'course_id' => $parametros['course_id'],
				'quarter' => $parametros['quarter'],
				'professor_id' => $parametros['professor_id'],
				'enabled' => $enabled,
				'group_number' => $parametros['number_grupo'],
				'created_at' => date("d-m-Y h:i:s")

			);

		

			$this->db->insert('group', $data);
		    return $this->db->insert_id();

		
		//return $query->result();
	}


	function get_grupo($pLike) {

		
             $this->db
			->select()
			->from('group')
			->limit(10, 0)
			->where("course_id LIKE '%$pLike%'")
			->order_by('id');

		$query = $this->db->get();
		return $query->result_array();
		

	}

	function eliminar_grupo($pid) {

			$query = $this->db->delete('group', array('id' => $pid));

			if($query){

				return 1;
			}else{
				return 0;
			}	
		
	}

function actualizar_grupo($parametros) {

	$enabled = 0;

		if($parametros['enabled']=="true"){
          $enabled = 1;
		}

     	$data = array(
			    'course_id' => $parametros['course_id'],
				'quarter' => $parametros['quarter'],
				'professor_id' => $parametros['professor_id'],
				'enabled' => $enabled,
				'group_number' => $parametros['number_grupo'],
				'updated_at' => date("d-m-Y h:i:s")

			);


			
        $this->db->where('id', $parametros['id']);
        return $this->db->update('group', $data);




    }




// gestion de aulas


	function registrar_aula($parametros) {

		

	$data = array(
				'code' => $parametros['code'],
				'numero' => $parametros['numero'],
				'name' => $parametros['name'],
				'ubicacion' => $parametros['ubicacion'],
				'created_at' => date("d-m-Y h:i:s")

			);

		

			$this->db->insert('aula', $data);
		    return $this->db->insert_id();

		
		//return $query->result();
	}


	function get_aula($pLike) {

		
             $this->db
			->select()
			->from('aula')
			->limit(10, 0)
			->where("code LIKE '%$pLike%'")
			->order_by('id');

		$query = $this->db->get();
		return $query->result_array();
		

	}

	function eliminar_aula($pid) {

			$query = $this->db->delete('aula', array('code' => $pid));

			if($query){

				return 1;
			}else{
				return 0;
			}	
		
	}

function actualizar_aula($parametros) {

		
     	$data = array(
				'code' => $parametros['code'],
				'numero' => $parametros['numero'],
				'name' => $parametros['name'],
				'ubicacion' => $parametros['ubicacion'],
				'updated_at' => date("d-m-Y h:i:s")

			);


			
        $this->db->where('code', $parametros['code']);
        return $this->db->update('aula', $data);




    }


    function login_new($funcion, $parametros) {


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

}