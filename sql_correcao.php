<html>
	<head> 
		<title> Portal de Provas - Etec Astor de Mattos Carvalho </title> 
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF -8">
		 <link rel="stylesheet" href="css/estilo1.css" />
		 <link href="css/estilo_global.css" rel="stylesheet" type="text/css"/>
	</head>
	
	<table width="100%" height="100px" border="0"  style="min-width:100px;">
	<body bgcolor="#01DFD7"/>
					
					  <td>	
					  <center><img src ="Logo TCC.png " width="300px"/></center> 
					  
					    
					  </td>	
					</tr>
		</table>

		
		<center><table border="0"  width="1340">
			<tr height=450>
				<td background="nova.PNG" width="300" valign="top" >
				</td>
				<td bgcolor="#FFFFFF" width="700" valign="top"><br><br>      
                <table border="0" width="500px" size="20" style="background-color: #FFFFFF">
                <td> Nome: </td>
                <td> Título: </td>
                <td> Acertos: </td>
						<?php
							require('funcoes.php');
							$db = conectar();
							$sql = "SELECT u.nome as nome, p.titulo_prova as prova, SUM( q.alt_correta = h.resposta ) as corretas
									FROM hist_resp h
									INNER JOIN questoes q ON ( h.cod_questao = q.cod_questao ) 
									INNER JOIN usuario u ON ( h.cod_usuario = u.cod_usuario ) 
									INNER JOIN provas p ON ( q.cod_prova = p.cod_provas ) 
									GROUP BY u.nome, p.titulo_prova";
                                                
							$rs = mysqli_query($db, $sql);
							
                                                        while($correcao = mysqli_fetch_assoc($rs)){

						?>
							<tr>
							  <td><?php echo $correcao['nome'] ?></td>
							  <td><?php echo $correcao['prova'] ?></td>
                                                          <td><?php echo $correcao['corretas'] ?></td>
							</tr>
						<?php
							}
						?>
						  </table>                

                                

                                </td>
				<td background="nova.PNG" width="300" valign="top">

				</td>
			</tr>
			
		</table>
		
		<a href="inicio_provas.php"><input type="button"value="Voltar "size="20" style="background-color: #CCCCCC"></a>
		</center>
    </body>
</html>