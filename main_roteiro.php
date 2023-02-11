<?php
session_start();
include_once ("conexao_roteiro.php");
 
$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$titulo = filter_input (INPUT_POST, 'titulo', FILTER_SANITIZE_TITULO);
$texto = filter_input (INPUT_POST, 'texto', FILTER_SANITIZE_TEXTO);

//echo "nomedoprofessor:  $nomedoprofessor <br>";
//echo "titulodoroteiro:  $titulodoroteiro <br>";

$result_roteiro = "INSERT INTO roteiro (nome, titulo, texto, created) VALUES ('$nome','$titulo','$texto', NOW ())";
$resultado_roteiro = mysqli_query ($conn, $result_roteiro);
 
 