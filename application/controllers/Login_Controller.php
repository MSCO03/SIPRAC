<?php

class Login_Controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->load->model('User_model', "user_m");
	}

	public function hola()
	{
		$this->form_validation->set_rules('iuser','iuser', 'trim|required|max_length[10]|min_length[1]|alpha');
		$this->form_validation->set_rules('ipass','ipass', 'trim|required|max_length[20]|min_length[1]|integer');
		/*$this->form_validation->set_rules('apaterno','Apellido Paterno', 'trim|max_length[20]|alpha');
		$this->form_validation->set_rules('amaterno','Apellido Materno', 'trim|max_length[20]|alpha');
		*/
		if ($this->form_validation->run() == true){
			$data = array("existe" => true,"hola"=>'hola');//$this->user_m->RevisionUser();
		}
		else{
			$errors = $this->form_validation->error_array();
			$data = array("existe"=>false,	'estatus' => '0', 'msg' => $errors);
		}
		//echo json_encode($data);
		echo json_encode($data);
	}
}
?>