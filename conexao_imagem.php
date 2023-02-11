<?php
include_once "conexao.php";
	$conexao = mysqli_connect ($localhost, $username, $password)or die ("Conexão não efetuada");
	mysqli_select_db("celke", $conexao)or die ("<br>Base de dados nao encontrada");

?>