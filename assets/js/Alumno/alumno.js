
$( document ).ready(function() {
	$("#bienvenido").hide();
	$("#practicas").hide();
	 $("#cuadro2").hide();
	 $("#cuadro3").hide();

$( "#inicio" ).click(function() {
  $('#cuadro').hide();
  $("#bienvenido").hide();
  $("#cuadro").show();
  $("#practicas").hide();
  $("#cuadro2").hide();
  $("#cuadro3").hide();
});

$( "#inscrip" ).click(function() {
  $('#cuadro').hide();
  $("#bienvenido").show();
  $("#practicas").hide();
  $("#cuadro2").hide();
  $("#cuadro3").hide();
});

$( "#micursos" ).click(function() {
  $('#cuadro').hide();
  $("#bienvenido").hide();
  $("#practicas").show();
  $("#cuadro2").hide();
  $("#cuadro3").hide();
});

$( "#reglamento" ).click(function() {
  $('#cuadro').hide();
  $("#bienvenido").hide();
  $("#cuadro2").show();
  $("#practicas").hide();
  $("#cuadro3").hide();
});

$( "#recuerda" ).click(function() {
  $('#cuadro').hide();
  $("#bienvenido").hide();
  $("#cuadro2").hide();
  $("#practicas").hide();
  $("#cuadro3").show();
});
    
});