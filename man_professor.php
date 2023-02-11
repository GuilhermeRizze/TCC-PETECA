<?php
	require('funcoes.php');
	//seguranca(); 
	$db = conectar();
	mysqli_select_db($db,'portal_de_provas');
	$nome = $_REQUEST['nome'];
	$login = $_REQUEST['login'];
	$senha = md5($_REQUEST['senha']);
	$senha_conf = md5($_REQUEST['senha_conf']);
	$desig = "p";
	if ($senha == $senha_conf){
		$sql = "insert into usuario (nome, login, senha, designacao) values ('$nome', '$login', '$senha', '$desig')";
		$res = mysqli_query($db, $sql);
		header("location:index.php");
	}else{
		echo "As senhas não correspondem!!";
		echo'<br><a href="index.php"> Voltar </a>';
	}
?>