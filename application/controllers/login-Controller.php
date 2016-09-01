<?php
/**
 * 
 */
 class login_Controller extends CI_Controller
 {
 	function index()
	{
		//including validation library
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules($_POST['iuser'], 'Nombre', 'required');
		if ($this->form_validation->run() == FALSE) { 
         	echo json_encode(array("existe" => false));
         } 
         else { 
            echo json_encode(array("existe" => false));
         } 
         echo json_encode(array("existe" => false));
	}	

 } 
 ?>