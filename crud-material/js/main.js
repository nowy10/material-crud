$(document).ready(function(){

	$(".bg,.modal-registro, .modal-editar, .modal-eliminar").hide();

	$(".cerrar").click(function(){
		$(".bg,.modal-registro, .modal-editar, .modal-eliminar").hide();
	});

	$("#registro").click(function(){
		$(".bg, .modal-registro").show();
	});

	$(".editar").click(function(){
		$(".bg, .modal-editar").show();
	});

	$(".eliminar").click(function(){
		$(".bg, .modal-eliminar").show();
	});

	
	
});