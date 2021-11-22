<?php

require_once("config.php");

//CARREGA UM ÚNICO USUÁRIO DO BD
function idUsuario(){
	$root = new Usuario();
	$root->loadById(6);
	echo $root;
}


//CARREGA UMA LISTA DE USUÁRIOS
function listarUsuario(){
	//O "::" É USADO PARA CHAMAR UMA PUBLIC **"STATIC"**
	$lista = Usuario::Listar();
	echo json_encode($lista);	
}


//CARREGA UMA LISTA DE USUÁRIOS ATRAVÉS DO LOGIN
function buscarUsuario(){
	$search = Usuario::Buscar("ma");
	echo json_encode($search);	
}


//CARREGA O USUÁRIO USANDO O LOGIN E SENHA
function loginUsuario(){
	$usuario = new Usuario();
	$usuario->Login("gustavo", "gt#123");
	echo $usuario;
}

//idUsuario();
//listarUsuario();
//buscarUsuario();
loginUsuario();

?>