$( document ).ready(function() {
	a = 0
	$("#menu").hide()	
    $( "#practicas" ).load("./source/vistas/practicas.php");

    //iniciar sesion administrador
    $("#bmenu").click(function() {
    	if(a == 0){
    		$('#menu').show();
    		a++
    	}else{
    		$('#menu').hide()
    		a--
    	}
        
    })
    
});

function sube(){
		$('#space').toggleClass('giro');
		$("#pb").slideToggle();
		return false;
}

function sube2(){
		$('#space2').toggleClass('giro');
		$("#pb2").slideToggle();
		return false;
}

function sube3(){
		$('#space3').toggleClass('giro');
		$("#pb3").slideToggle();
		return false;
}

function sube4(){
		$('.space').toggleClass('giro');
		$("#pb4").slideToggle();
		return false;
}

function close_modal_is(){
	$('#isesion').modal('hide');
	$('#contrasenia').modal('show');	
}

function close_modal_re(){
	$('#registrate').modal('hide');
	$('#cespeciales').modal('show');	
}