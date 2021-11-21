<?php

require_once("config.php");

$root = new Usuario();

$root->loadById(6);

echo $root;

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * from tb_usuarios order by idusuario");

echo json_encode($usuarios);
*/

?>