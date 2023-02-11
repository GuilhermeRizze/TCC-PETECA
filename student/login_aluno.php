<?php
	require_once '../funcoes.php';
	require_once '../conexao1.php';
	auth_alun();
	$db = conectar();
?>
<html>
	<head> 
	<title> Portal de Provas - Etec Astor de Mattos Carvalho </title> 
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF -8">
		 <meta name="viewport" content=", initial-scale=1" />
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		 <link rel="stylesheet" href="../css/estilo1.css" />
		 <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>
                 <script>
                      function sair(){
                        document.location="../index.php";
                      }
                 </script>
	</head>
	
	<body>
		<div id= "cx1">	
			<center><img src ="../img/logop.png " width="200px" height="200px"/></center> 
		</div>	
		<div id= "cx2">
		</div>
		<div id= "cx3">
        	<center>
			<p><font size="5" face="OpenType"> Seja bem-vindo Aluno!<br><BR>
			</center>
				<center>
				<input class="in" type="button" style="background-color: #FFFFFF" value="PROVAS" onclick="document.location='tipo_prova.php'">
				        
				<input type="button" value="ROTEIRO DE APRENDIZAGEM" onclick="document.location='../new]1_alu.php'">

				<input type="button" value="BAUTECA" onclick="document.location='../Bauteca/index_aluno.php'">

				<input type="button" value="FORUM" onclick="document.location='../FORUM/main_forum_al.php'">	<br><br><br>				

				<br><input type="button" value="Sair" style="background-color: #01DFD7" onclick="sair()" /></br>
					</center>

                
		</div>
				
		
    </body>
</html>		