<?php
	require('funcoes.php');
	$db = conectar();
?>
<html>
	<head> 
		<title> Roteiro de Aprendizagem - Etec Astor de Mattos Carvalho </title> 
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF -8">
		 <link rel="stylesheet" href="css/estilo1.css" />
		 <link href="css/estilo_global.css" rel="stylesheet" type="text/css"/>
		
	</head>
	
	<table width="100%" height="100px" border="0"  style="min-width:100px;">
	<body bgcolor="#01DFD7" align="center"/>
	
					  <center><img src ="Logo TCC.png " width="300px"/></center> 
					  
					    
						
					
		</table>
		
		<table border="0"  width="1365">
			<tr height=200>
			
				<td bgcolor="#FFFFFF" width="400" valign="top"> 
			
                <center>
		
		<h2> Cadastrar questões:</h2>
			<p><form action="man_questao.php" method="post"/>
			<font size="5" face="Arial">
			Questão: <input type="text" name="questao"/><br /><br />
			Alternativas:<br/>
			 A:&nbsp;<input type="text" name="alt_A"/><br />
			 B:&nbsp;<input type="text" name="alt_B"/><br />
             C:&nbsp;<input type="text" name="alt_C"/><br />
			 D:&nbsp;<input type="text" name="alt_D"/><br />
			Alternativa Correta:<br /><br />
			<input type="radio" name="alt_correta" value="a"/>A
			<input type="radio" name="alt_correta" value="b"/>B
			<input type="radio" name="alt_correta" value="c"/>C
			<input type="radio" name="alt_correta" value="d"/>D<br /><br />
            <input type="hidden" name="cod_prova" value="<?php echo $_REQUEST['cod_provas'] ?>">
						
						
						
			<input type="submit" value="Próxima questão"  name="prox" style="background-color: #CCCCCC"/>&nbsp;&nbsp;
			
			
			
			<input type="button" value="Voltar" onclick="history.go(-1)" style="background-color: #CCCCCC"/>&nbsp;&nbsp;</center></font> 
			
			<br>
		
		</td>
				
			</tr>
			
		</table>

    </body>
</html>