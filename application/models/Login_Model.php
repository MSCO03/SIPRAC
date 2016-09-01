<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function RevisionUser(){

		$fields = 'no_cuenta as nc, nom_alu as alu, ap_paterno as ap, ap_materno as am, email as em';
		$where = array(
			'no_cuenta' => $this->input->post('ncuenta', TRUE),
			'nom_alu' => $this->input->post('nombre', TRUE),
			'ap_paterno' => $this->input->post('apaterno', TRUE),
			'ap_materno' => $this->input->post('amaterno', TRUE)
			);
		$msg = "";
		$ncu = $this->input->post('ncuenta', TRUE);
        $result = $this->db->select($fields)->from('alumnos')->where($where)->get();
        $rescont = $this->db->select('*')->from('contra_alu')->where('no_cuenta', $ncu)->get();

        if($result->num_rows() == 1){	
        	if($rescont->num_rows() == 0){
        		$data = $result->result(); 
	        	foreach($data as $key => $value) {
	        		$dataB = $value;
	        	}
        		$msg = "<form id='data_reg' class='form-horizontal' role='form' method='post'>
					<div class='form-group pos'>
					<p class='col-md-12 texto'>Bienvenido <strong>".$dataB->alu." ".$dataB->ap."</strong>, por favor llena el siguiente formulario para completar tu registro en el sistema. Para acceder a él se te enviará la información correspondiente a la siguiente dirección de correo <strong style='color:red'>".$dataB->em."</strong> que podrás cambiar si así lo deseas posteriormente.
					</p>
					</div>
					<input type='hidden' id='nc' name='nc' value='".$dataB->nc."'>
					<input type='hidden' id=email name='email' value='".$dataB->em."'>
					<div class='form-group pos'>
					<div class='col-md-3'>
					<div class='row'>
					<label class='col-md-4 control-label texto'>Genero</label>
					<div class='col-md-8 entrada'>
					<select class='form-control' name='genero' id='genero'>
					<option value='M' selected>Masculino</option>
					<option value='F'>Femenino</option>
					</select>
					</div>
					</div>
					<div class='row'>
					<div id='er1' class='errores col-md-12'></div>
					</div>
					</div>
					<div class='col-md-3'>
					<div class='row'>
					<label class='col-md-4 control-label texto'>Fecha</label>
					<div class='col-md-8 entrada'>
					<input type='text' class='form-control input-append date' name='fn' id='fn' placeholder='Nacimiento' required>
					<script>
					$('#fn').datepicker({
					format: 'yyyy-mm-dd',
					language:'es'
					});
					</script>
					</div>
					</div>
					<div class='row'>
					<div id='er2' class='errores col-md-12'></div>
					</div>
					</div>
					<div class='col-md-3'>
					<div class='row'>
					<label class='col-md-4 control-label texto'>Carrera</label>
					<div class='col-md-8 entrada'>
					<select class='form-control' name='carrera' id='carrera'>
					<option value='1' selected>Ing. Civil</option>
					<option value='2'>Ing. Geomática</option>
					</select>
					</div>
					</div>
					<div class='row'>
					<div id='er3' class='errores col-md-12'></div>
					</div>
					</div>	
					<div class='col-md-3'>
					<div class='row'>
					<label class='col-md-4 control-label texto'>Año</label>
					<div class='col-md-8 entrada'>
					<input type='text' class='form-control' name='ingreso' id='ingreso' placeholder='Ingreso' required>
					<script>
					$('#ingreso').datepicker({
					format: 'yyyy',
					viewMode: 'years', 
					minViewMode: 'years'
					});
					</script>
					</div>
					</div>
					<div class='row'>
					<div id='er4' class='errores col-md-12'></div>
					</div>
					</div>
					</div>
					<div class='form-group pos'>
					<div class='col-md-3'>
					<div class='row'>
					<label class='col-md-4 control-label texto'>Teléfono</label>
					<div class='col-md-8 entrada'>
					<input type='text' class='form-control' name='celular' id='celular' placeholder='Celular'>
					</div>
					</div>
					<div class='row'>
					<div id='er5' class='errores col-md-12'></div>
					</div>
					</div>
					<div class='col-md-3'>
					<div class='row'>
					<label class='col-md-4 control-label texto'>Teléfono</label>
					<div class='col-md-8 entrada'>
					<input type='text' class='form-control' name='telefono' id='telefono' placeholder='Casa'>
					</div>
					</div>
					<div class='row'>
					<div id='er6' class='errores col-md-12'></div>
					</div>
					</div>
					<div class='col-md-3'>
					<div class='row'>
					<label class='col-md-4 control-label texto'>Correo</label>
					<div class='col-md-8 entrada'>
					<input type='correo' class='form-control' name='correoa' id='correoa' placeholder='Adicional'>
					</div>
					</div>
					<div class='row'>
					<div id='er7' class='errores col-md-12'></div>
					</div>
					</div>
					<div class='col-md-3'>
					<div class='row'>
					<label class='col-md-4 control-label texto'>Promedio</label>
					<div class='col-md-8 entrada'>
					<input type='tetx' class='form-control' name='pro' id='pro' placeholder='0.00'>
					</div>
					</div>
					<div class='row'>
					<div id='er8' class='errores col-md-12'></div>
					</div>
					</div>	
					</div>
					<div class='form-group pos'>
					<div class='col-md-6'>
					<div class='row'>
					<label class='col-md-6 control-label texto'>Avance de creditos totales</label>
					<div class='col-md-6 entrada'>
					<input type='text' class='form-control' name='act' id='act' placeholder='408'>
					</div>
					</div>
					<div class='row'>
					<div id='er9' class='errores col-md-12'></div>
					</div>
					</div>
					<div class='col-md-6'>
					<div class='row'>
					<label class='col-md-6 control-label texto'>Porcentaje de avance de creditos</label>
					<div class='col-md-6 entrada'>
					<input type='tetx' class='form-control' name='pac' id='pac' placeholder='00.00'>
					</div>
					</div>
					<div class='row'>
					<div id='er10' class='errores col-md-12'></div>
					</div>
					</div>
					</div>
					</form>
					<div class='form-group last'>
					<div class='pull-right'>
					<button type='submit' class='btn btn-labeled btn-info btn-sm' onclick='registroUser();'>
					<span class='btn-label'><i class='glyphicon glyphicon-send'></i></span>Enviar
					</button>
					<button type='reset' class='btn btn-labeled btn-success btn-sm' onclick='resetReg();'>
					<span class='btn-label'><i class='glyphicon glyphicon-erase'></i></span>Borrar
					</button>
					</div>
					</div>";
				return array('estatus' => '1', 'msg' => $msg, $dataB);
        	}
        	else if($rescont->num_rows() == 1){
        		$msg = "<p>Este usuario ya se encuentra registrado en el sistema, por favor corrobore sus datos o contacte a la DICyG</p><div class='bformdb'><button type='submit' class='btn btn-labeled btn-info btn-sm' onclick='aceptar();'><span class='btn-label'><i class='glyphicon glyphicon-ok'></i></span>Aceptar</button></div></div>";
        		return array('estatus' => '2', 'msg' => $msg);
        	}

        }
        else if($result->num_rows() == 0){
        	$msg = "<p>No se encontro un registro ligado a los datos que proporcionaste, por favor corrobora que tus datos sean correctos. Si despues de múltiples intentos no puedes registrarte entra a la opción de casos especiales.</p><p><span>Nota:</span> si tu número de cuenta es anterior al año 1990 es posible que no se encuentre en los registros de la división, de ser el caso entra a la opción de <a href='' data-toggle='modal' onclick='close_modal_re();'>Casos especiales</a></p><div class='bformdb'><button type='submit' class='btn btn-labeled btn-info btn-sm' onclick='aceptar();'><span class='btn-label'><i class='glyphicon glyphicon-ok'></i></span>Aceptar</button></div>";
        	return array('estatus' => '3', 'msg' => $msg);
        }
	}
}