<?php
	require('funcoes.php');
	//seguranca(); 

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
			<p><font size="5" face="OpenType"> Seja bem-vindo Professor!<br><BR>
			</center>
				<center>
				<input class="in" type="button" style="background-color: #FFFFFF" value="PROVAS" onclick="document.location='../inicio_provas.php'">
				        
				<input type="button" value="ROTEIRO DE APRENDIZAGEM" onclick="document.location='../principal.php'">

				<input type="button" value="BAUTECA" onclick="document.location='../Bauteca'">

				<input type="button" value="FORUM" onclick="document.location='../FORUM/main_forum.php'">

				<input type="button" value="CADASTRAR USUÁRIO" onclick="document.location='front_cad_alunos.php'">				
				
				
				 <br>				

				<br><input type="button" value="Sair" style="background-color: #01DFD7" onclick="sair()" /></br>
					</center>

                
		</div>
				
		
    </body>
</html>				