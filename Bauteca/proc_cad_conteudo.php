<?php 

$conn = mysqli_connect("localhost","root","","portal_de_provas")or die("cannot select DB"); 


$professor = $_REQUEST['professor'];
$materia = $_REQUEST['cod_materia'];
$titulo = $_REQUEST['titulo'];
$texto = $_REQUEST['texto'];
$anexo1 = $_FILES['anexo1']['name'];
$anexo2 = $_FILES['anexo2']['name'];
$anexo3 = $_FILES['anexo3']['name'];
$anexo4 = $_FILES['anexo4']['name'];
$anexo5 = $_FILES['anexo5']['name'];



$temp1 = $_FILES['anexo1']['tmp_name'];
$temp2 = $_FILES['anexo2']['tmp_name'];
$temp3 = $_FILES['anexo3']['tmp_name'];
$temp4 = $_FILES['anexo4']['tmp_name'];
$temp5 = $_FILES['anexo5']['tmp_name'];

		$destino1 = 'bauteca/'.$anexo1;
		$destino2 = 'bauteca/'.$anexo2;
		$destino3 = 'bauteca/'.$anexo3;
		$destino4 = 'bauteca/'.$anexo4;
		$destino5 = 'bauteca/'.$anexo5;
		
		
		$insere = "Insert into bauteca (professor,cod_materia,titulo, texto, anexo1, anexo2, anexo3, anexo4, anexo5) values ('$professor','$materia', '$titulo','$texto','$anexo1','$anexo2','$anexo3','$anexo4','$anexo5')";
			

			mysqli_query ($conn,$insere) or die ("Não foi possível executar a inserção.");
			
				
		move_uploaded_file($temp1, $destino1);
		move_uploaded_file($temp2, $destino2);
		move_uploaded_file($temp3, $destino3);
		move_uploaded_file($temp4, $destino4);
		move_uploaded_file($temp5, $destino5);
		
		
		header("location:ver_conteudos.php?cod_materia= $materia");
	
?>