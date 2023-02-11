<?php
	require('funcoes.php');
	//seguranca();
	$db = conectar();
?>
<html>
	<head> 
		<title> Portal de Provas - Etec Astor de Mattos Carvalho </title> 
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF -8">
                 <script>
                      function sair(){
                        document.location="index.php";
                      }
		 </script>
		
	</head>
	
	<table width="100%" height="100px" border="0"  style="min-width:100px;">
	<body bgcolor="#87CEFF"/>
					
					  <td>	
					  <center><img src ="Logo TCC.png "/></center> 
					  
					    
					  </td>	
					</tr>
		</table>
<?php                                   
function mostrarProvas($codigo) {
	global $db;
	//$sql = "select *, (select count(*) total from  questoes q where q.cod_prova = p.cod_provas) totq  from provas p where cod_materia = '$codigo'";
	$sql = "select * from provas where cod_materia= $codigo";
	$rsProva = mysqli_query($db, $sql);
	while ($prova = mysqli_fetch_assoc($rsProva)) {
		//echo '<br><a href="prova.php?cod_prova='.$prova['cod_provas'].'&nquestao='.$prova['totq'].'&tpp='.$prova['tempo_prova'].'">'.$prova['titulo_prova'].'</a><br>';
		echo '<br><a href="prova.php?cod_prova='.$prova['cod_provas'].'&tpp='.$prova['tempo_prova'].'&nquestao=0">'.$prova['titulo_prova'].'</a><br>';
	}
}
?>
		<table border="0"  width="1410">
			<tr height=650>
				<td background="nova.PNG" width="300" valign="top" >
				</td>
				<td bgcolor="#FFFFFF" width="700" valign="top">	

		<center><div id="principal">
<br /><br />
  <p><h2><a href="visualiza_roteiro_aluno.php"> Visualizar Roteiros </h2></p></a>
		<p><h2> Materias</h2></p>
<font size="4" face="Arial">
		Artes
		<?php mostrarProvas(13); ?><br>
		Biologia
		<?php mostrarProvas(14); ?><br>
		Espanhol
		<?php mostrarProvas(15); ?><br>
		Etica
		<?php mostrarProvas(16); ?><br>
		Filosofia
		<?php mostrarProvas(17); ?><br>
		Fisica
		<?php mostrarProvas(18); ?><br>
		Geografia
		<?php mostrarProvas(19); ?><br>
		Historia
		<?php mostrarProvas(20); ?><br>
		Ingles
		<?php mostrarProvas(21); ?><br>
		Matematica
		<?php mostrarProvas(22); ?><br>
		Portugues
		<?php mostrarProvas(23); ?><br>
		Quimica
		<?php mostrarProvas(24); ?><br>
		Sociologia
		<?php mostrarProvas(25); ?><br>
		</div><br /><br />
                <input type="button" value="Sair" onclick="document.location='logoff.php'" /></center>
		</td><br/>
               
				<td background="nova.PNG" width="300" valign="top">
					
				  
				  
				</td>
			</tr>
			
		</table>
		<table width="100%" border="0" cellpadding="10" cellspacing="0" style="min-width:877px;">
					<tr class="rodape" bgcolor="#9A9A9A">
					<td width="500" align="left" height="60">ETEC ASTOR DE MATTOS CARVALHO  <br>Tel: (14) 3285-1210</td>
					<td width="500" align="center">ROD. LOURENCO LOZANO - BAIRRO RESTINGA  <br>CEP 17480-000 - Cabralia Paulista/SP</td>
					<td width="500" align="right">DESENVOLVIDO POR <br>Guilherme P. dos S. Azevedo<br> Gustavo Zaniboni Barreto</td>
					<td>&nbsp;</td>
					</tr>
		</table>
    </body>
</html>		