<?php
	$con=mysqli_connect("localhost", "root", "","portal_de_provas")or die("cannot connect");

	$materia = $_REQUEST['materia'];
    $titulo_prova = $_REQUEST['titulo_prova'];
	$time = $_REQUEST['time'];
	
	$sql = "insert into provas (materia, titulo_prova, tempo, quant_quests, tipo) values ('$materia', '$titulo_prova', '$time', '0', 'o')";
        $rs = mysqli_query($con,$sql);

      header("location:table_provas.php");
   
       
?>				