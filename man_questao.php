<?php
	session_start();
	require('funcoes.php');
	//seguranca();
	$db = conectar();
	mysqli_select_db($db,'portal_de_provas');
        $cod_prova = $_REQUEST['cod_prova'];
	$questao = $_REQUEST['questao'];
	$alt_A = $_REQUEST['alt_A'];
	$alt_B = $_REQUEST['alt_B'];
	$alt_C = $_REQUEST['alt_C'];
	$alt_D = $_REQUEST['alt_D'];
	$alt_correta = $_REQUEST['alt_correta'];
	$qtd_questoes = 9 ;
	
	$sql = "insert into questoes (questao , alt_A, alt_B, alt_C, alt_D, alt_correta, cod_prova) values ('$questao', '$alt_A', '$alt_B', '$alt_C', '$alt_D', '$alt_correta', '$cod_prova')";
	$rs = mysqli_query($db, $sql);
	
	
	

	$_SESSION['i'] = $_SESSION['i']+1;
	
	$a= $_SESSION['i'];
	if($a <= $qtd_questoes){

	header("location:gravar_questao.php?cod_provas=$cod_prova");
	
	}else{
	header("location:confirma_quest.php?");	
	session_destroy();
	}
?>