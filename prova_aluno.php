<?php
	require_once 'funcoes.php';
	require_once 'conexao1.php';
	auth_alun();
	$db = conectar();
	$materia = $_REQUEST['materia'];
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
		 <link href="css/estilo_global.css" rel="stylesheet" type="text/css"/>
                 <script>
                      function sair(){
                        document.location="index.php";
                      }
                 </script>
	</head>
<body bgcolor="#E0F8F7">
	
	<table width="100%" height="100px" border="0" style="min-width:100px;">
		<tr>	
			<td>	
				<center><img src ="img/Logop.png " width="200"/></center> 
			</td>	
		</tr>
	</table>

		<table border="0"  width="100%">
			<tr height=650>
				<td background="nova.PNG" width="300" valign="top"></td>
				<td bgcolor="#FFFFFF" width="700" valign="top">	
<center>
				<?php                                   

//$sql = "select *, (select count(*) total from  questoes q where q.cod_prova = p.cod_provas) totq  from provas p where cod_materia = '$codigo'";
$sql = "select * from provas WHERE materia = '$materia' and tipo = 'o'";
$rsProva = mysqli_query($db, $sql);
while ($prova = mysqli_fetch_assoc($rsProva)) {
	
	//echo '<br><a href="prova.php?cod_prova='.$prova['cod_provas'].'&nquestao='.$prova['totq'].'&tpp='.$prova['tempo_prova'].'">'.$prova['titulo_prova'].'</a><br>';
	echo '<br><a href="prova.php?cod_prova='.$prova['cod_provas'].'&tpp='.$prova['tempo'].'&nquestao=0">'.$prova['titulo_prova'].'</a><br>';
}

?>
						<br><br><a href="student/tipo_prova.php"> <input type="button" value="Sair"/></a>
					</center>
				</td><br/>
               
				<td background="nova.PNG" width="300" valign="top"></td>
			</tr>
			
		</table>
		</body>
        </html>