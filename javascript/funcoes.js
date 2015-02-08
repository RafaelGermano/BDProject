// JavaScript Document

window.onload = function(){
	esconderPainelCadastrar();
}

function buscar(){
	esconderPainelCadastrar();	
	mostrarPainelBuscar();
}

function cadastrar(){
	esconderPainelBuscar();
	mostrarPainelCadastrar();
}

function esconderPainelBuscar(){
	$('.buscarPainel').fadeOut();
}

function mostrarPainelBuscar(){
	$('.buscarPainel').fadeIn("slow");
}

function esconderPainelCadastrar(){
	$('.cadastrarPainel').fadeOut();
}

function mostrarPainelCadastrar(){
	$('.cadastrarPainel').fadeIn("slow");
}




