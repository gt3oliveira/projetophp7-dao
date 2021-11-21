<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * from tb_usuarios order by idusuario");

echo json_encode($usuarios);

?>