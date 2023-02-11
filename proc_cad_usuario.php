<?php
session_start();
include_once("conexao.php");

$professor = filter_input(INPUT_POST, 'professor', FILTER_SANITIZE_STRING);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$roteiro= filter_input(INPUT_POST, 'roteiro', FILTER_SANITIZE_STRING);
$imagem = $_FILES['selecionaImagem']['name'];
$temp = $_FILES['selecionaImagem']['tmp_name'];

	
	$destino = 'bdimagem/' . $imagem;

//echo "Professor": $professor <br>";
//echo "Titulo": $titulo <br>";
//echo "Roteiro:" $roteiro <br>";

$result_usuario = "INSERT INTO usuarios ( professor, titulo, roteiro, created,arquivo) VALUES ( '$professor', '$titulo' , '$roteiro', NOW(),'$imagem')";
$resultado_usuario = mysqli_query($conn, $result_usuario);


move_uploaded_file($temp, $destino);
		

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: new]1.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: new]1.php");
}
