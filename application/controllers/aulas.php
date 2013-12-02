<?php

class aulas extends CI_Controller {
	
	
	function __construct() {
		parent::__construct();
		$this->load->model('employee_model');
	    

	}

	function index() {
		//$data['employees'] = $this->employee_model->get_employees();
		//echo "<pre>";print_r($data);echo"</pre>";
		$this->load->view('index');
	}


	// function employee($employeeId) {
	// 	$data['employee'] = $this->employee_model->get_employees($employeeId);
	// 	$this->load->view('employee_show', $data);
	// }

	function login() {
		
		

		if($_POST) {

	            //redirect(base_url().'aulas');
				$data['login'] = $this->employee_model->login($_POST);
				$this->load->view('index', $data); 
              // echo "<pre>";print_r($data);echo"</pre>";
                
		    }else{$this->load->view('login');}

	}

	


	function get_user($type) {

		$plike = $_POST['source1'];

                  
	           
			$data['user'] = $this->employee_model->get_user($type, $plike);
				 
			echo json_encode($data['user']) ;

              //echo "<pre>";print_r($data);echo"</pre>";
                

	}



	function eliminar_user($type) {

		$document_number = $_POST['source1'];

                  
	           
			$data = $this->employee_model->eliminar_user($type, $document_number);
				 
			echo "$data";

             //echo "<pre>";print_r($data);echo"</pre>";
                

	}


	function registrar_user($type) {

		if($_POST) {

	        $data = $this->employee_model->registrar_user($type, $_POST);
				 
			echo "$data";
                
		    }
			

             //echo "<pre>";print_r($data);echo"</pre>";
                

	}


function actualizar_user($type) {

		if($_POST) {

	        $data = $this->employee_model->actualizar_user($type, $_POST);
				 
			echo "$data";
                
		    }
			

             //echo "<pre>";print_r($data);echo"</pre>";
	}



    function function_login() {
		

		if($_POST) {

	
				print_r($this->employee_model->login($_POST) );
				 
                // redirect(base_url().'aulas');
                
		    }
	}



	function register() {
		
		$this->load->view('register');
	}

//lo masseguro es que lo elimino
	function function_register() {

		$funcion = $_POST['categoria'];
		

		if($_POST) {

			$data = array(
				'document_number' => $_POST['ID'],
				'first_name' => $_POST['name'],
				'last_name' => $_POST['last_name'],
				'password' => $_POST['password'],
				'username' => $_POST['username'],
				'email' => $_POST['email'],
				'created_at' => date("d-m-Y h:i:s")

			);


			//echo "<pre>";print_r($data);echo"</pre>";
			

			if($funcion == 'Student') {
				 $this->employee_model->insert_student($data);
                 redirect(base_url().'aulas');
                
		    }else if($funcion == 'Profesor'){
		         $this->employee_model->insert_profesor($data);
                 redirect(base_url().'aulas');	
		    }else if($funcion == 'admin'){
		         $this->employee_model->insert_admin($data);
                 redirect(base_url().'aulas');	
		    }else{
		    	echo "<script language='JavaScript'>
                   alert('Select un tipo de Usuario');
                </script>";

		    }


		} else {
			$this->load->view('index');
		}

	}

  
// gestion de cursos

	function registrar_curso() {

		if($_POST) {

	        $data = $this->employee_model->registrar_curso($_POST);
				 
			echo "$data";
                
		    }
			

             //echo "<pre>";print_r($data);echo"</pre>";
       }

	function get_curso() {

		$plike = $_POST['source1'];

                  
	           
			$data['curso'] = $this->employee_model->get_course($plike);
				 
			echo json_encode($data['curso']) ;

              //echo "<pre>";print_r($data);echo"</pre>";
     }

function eliminar_curso() {

		$id = $_POST['source1'];

                  
	           
			$data = $this->employee_model->eliminar_course($id);
				 
			echo "$data";

             //echo "<pre>";print_r($data);echo"</pre>";
                

	}

function actualizar_curso() {

		if($_POST) {

	        $data = $this->employee_model->actualizar_course($_POST);
				 
			echo "$data";
                
		    }
			

             //echo "<pre>";print_r($data);echo"</pre>";
	}


// gestion de Grupo

	function registrar_grupo() {

		if($_POST) {

	        $data = $this->employee_model->registrar_grupo($_POST);
				 
			echo "$data";
                
		    }
			

             //echo "<pre>";print_r($data);echo"</pre>";
       }

	function get_grupo() {

		$plike = $_POST['source1'];

                  
	           
			$data['grupo'] = $this->employee_model->get_grupo($plike);
				 
			echo json_encode($data['grupo']) ;

              //echo "<pre>";print_r($data);echo"</pre>";
     }

function eliminar_grupo() {

		$id = $_POST['source1'];

                  
	           
			$data = $this->employee_model->eliminar_course($id);
				 
			echo "$data";

             //echo "<pre>";print_r($data);echo"</pre>";
                

	}

function actualizar_grupo() {

		if($_POST) {

	        $data = $this->employee_model->actualizar_course($_POST);
				 
			echo "$data";
                
		    }
			

             //echo "<pre>";print_r($data);echo"</pre>";
	}

}