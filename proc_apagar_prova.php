<?php
session_start();
include_once("conexao1.php");
$id = filter_input(INPUT_GET, 'cod_provas', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_provas = "DELETE FROM provas WHERE cod_provas='$id'";
	$result_quest = "DELETE FROM questoes WHERE cod_provas='$id'";
	$resultado_provas = mysqli_query($conn, $result_provas);
	$resultado_questoes = mysqli_query($conn, $result_quest);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Prova apagada com sucesso</p>";
		header("Location: pesquisar_provas.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: testephp.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar uma prova</p>";
	header("Location: testephp.php");
}


// Se não funcionar, tentar usar input para requerer o codigo passado pelo link, e depois usar Request
