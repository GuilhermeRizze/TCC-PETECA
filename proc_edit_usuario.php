<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$professor = filter_input(INPUT_POST, 'professor', FILTER_SANITIZE_STRING);
$titulo = filter_input(INPUT_POST, 'titulo',FILTER_SANITIZE_STRING);
$roteiro = filter_input(INPUT_POST, 'roteiro', FILTER_SANITIZE_STRING);
echo "Professor: $professor <br>";
echo "Titulo: $titulo <br>";
echo "Roteiro: $roteiro <br>";
echo "ID: $id <br>";
mysqli_select_db($conn ,"celke")or die ("<br>Base de dados nao encontrada");
$result_usuario = "UPDATE usuarios SET  professor='$professor', titulo='$titulo', roteiro= '$roteiro',  modified=NOW() WHERE id='$id'";
 mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Editado com êxito</p>";
	header("Location: new]1_pro.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Não editado com sucesso</p>";
	header("Location: new]1_pro.php?id=$id");
}
?>
