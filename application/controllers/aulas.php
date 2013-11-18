<?php

class aulas extends CI_Controller {
	
	
	function __construct() {
		parent::__construct();
		$this->load->model('employee_model');
	}

	function index() {
		$data['employees'] = $this->employee_model->get_employees();
		//echo "<pre>";print_r($data);echo"</pre>";
		$this->load->view('index');
	}


	// function employee($employeeId) {
	// 	$data['employee'] = $this->employee_model->get_employees($employeeId);
	// 	$this->load->view('employee_show', $data);
	// }

	function insert() {

		if($_POST) {

			$data = array(
				'nombre' => $_POST['first_name'],
				'apellido' => $_POST['last_name'],
				'genero' => $_POST['genre'],
				'notificacion' => $_POST['notify']
			);
			//echo "<pre>";print_r($data);echo"</pre>";
			$this->employee_model->insert_employee($data);
			redirect(base_url().'employees/');
		} else {
			$this->load->view('employee_create');
		}
	}

	function vista() {

		
			$this->load->view('style');
	
	}




}