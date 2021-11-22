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

	echo "== LISTA DE USUÁRIO == <br><br>";
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
	$usuario->Login("gustavo", "g#123");

	echo $usuario;
}


//INSERINDO UM USUÁRIO NO BD
function inserirUsuario(){
	$usuario = new Usuario("MATHEUS", "mt#123");
	$usuario->Inserir();

	echo "== USUÁRIO ADICIONADO COM SUCESSO! == <br><br>";
	echo $usuario;
}


//ALTERANDO DADOS DO USUÁRIO NO BD
function alterarUsuario(){
	$usuario = new Usuario();
	$usuario->loadById(2);
	$usuario->Alterar("GUSTAVO", "gt#123");

	echo "== USUÁRIO ALTERADO COM SUCESSO! == <br><br>";
	echo $usuario;
}

//idUsuario();
listarUsuario();
//buscarUsuario();
//loginUsuario();
//inserirUsuario();
//alterarUsuario();

?>