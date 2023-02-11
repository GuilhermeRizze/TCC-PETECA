<?php
	session_start();
	require('funcoes.php');
	
	$db = conectar();
	$prova = $_REQUEST['cod_prova']; 
	$cod_usuario = $_SESSION['cod_usuario'];

    $resposta = array();
    $numero_questao = array();

    $indice = 1;
    while ($indice <= 10) {
      
	  $incremental = "alt". $indice;
	//   echo $incremental;
	//   echo $incremental2;
      $incremental2 = "cod_questao" . $indice;
      
      $resposta[$indice] = $_POST[$incremental];
      $cod_questao[$indice] = $_POST[$incremental2];

      $query = ("INSERT INTO hist_resp (cod_questao, resposta, cod_usuario) VALUES ('$cod_questao[$indice]', '$resposta[$indice]', '$cod_usuario')");
      $insert = mysqli_query($db, $query);

      $indice++;

    }
        
	header('location:conf_al.php');
		

?>
		