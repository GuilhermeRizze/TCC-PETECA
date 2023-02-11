<?php
	
	//seguranca(); 
	
	$conn = mysqli_connect("localhost", "root", "", "portal_de_provas")or die("cannot select DB"); 
	
	$cod_curso = $_REQUEST['cod_curso'];
    $materia = $_REQUEST['name_materia'];

	$sql = "insert into materia (materia, cod_curso) values ('$materia', '$cod_curso')";
        mysqli_query ($conn,$sql) or die ("Não foi possível executar a inserção.");

$cod = $linha['cod_curso'];
     header("location:ver_disciplinas.php?cod_curso= $cod_curso");
   
       
?>	