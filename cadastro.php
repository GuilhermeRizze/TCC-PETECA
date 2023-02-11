<?php
	session_start();
	
?>
<html>
	<head> 
		<title> Portal de Provas - Etec Astor de Mattos Carvalho </title> 
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF -8">
		
	</head>
	
	<table width="100%" height="100px" border="0"  style="min-width:100px;">
	<body bgcolor="#FF8247"/>
					
					  <td>	
					  <center><img src ="Logo TCC.png "/></center> 
					  
					    
					  </td>	
					</tr>
		</table>
		
		<table border="0"  width="1410">
			<tr height=650>
				<td background="nova.PNG" width="300" valign="top" >
				</td>
				<td bgcolor="#FFFFFF" width="700" valign="top"><br /><br /><br /><br />
		<center><h1> Cadastro de usuário </h1>
		<form action="man_usuario.php" method="post">
		<font size="4" face="Arial">Nome: <input type="text" name="nome" size="30"><br/><br/>
		Login: <input type="text" name="login" size="30"><br/><br/>
		Senha: <input type="password" name="senha" size="30"><br/><br/>
		Confirmar senha: <input type="password" name="senha_conf" size="30"><br/><br/>
		<input type="radio" name="ident" value="p"/>Professor
		<input type="radio" name="ident" value="a"/>Aluno<br />
		<p><input type="submit" name="criar" value="Criar">  
		<input type="button" name="voltar" value="Voltar" onclick="document.location='portal_de_provas.php'" > </p>
		</form></center></font>
	<td background="nova.PNG" width="300" valign="top">
					
				  
				  
				</td>
			</tr>
			
		</table>
		<table width="100%" border="0" cellpadding="10" cellspacing="0" style="min-width:877px;">
					<tr class="rodape" bgcolor="#9A9A9A">
					<td width="500" align="left" height="60">ETEC ASTOR DE MATTOS CARVALHO  <br>Tel: (14) 3285-1210</td>
					<td width="500" align="center">ROD. LOURENÇO LOZANO - BAIRRO RESTINGA  <br>CEP 17480-000 - Cabrália Paulista/SP</td>
					<td width="500" align="right">DESENVOLVIDO POR <br>Guilherme P. dos S. Azevedo<br> Gustavo Zaniboni Barreto</td>
					<td>&nbsp;</td>
					</tr>
		</table>
    </body>
</html>