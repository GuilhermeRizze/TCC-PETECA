<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<title>ROTEIRO DE APRENDIZAGEM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>

			 <div id="header" class="container">
            <div id="banner">
				<h2><strong>PESQUISAR</strong> O ROTEIRO DE APRENDIZAGEM</h2>
				
					</div>
					</ul>
			</section>
		<meta charset="utf-8">
	
		

	</body>
	<head>
		<meta charset="utf-8">
		
	</head>
	<body>
		<form method="POST" action="resultadopesquisa.php">
			<label>Nome do Roteiro: </label>
			<input type="text" name="nome" placeholder="Digite o nome do Roteiro"  size="20" style="background-color: #FEFDFD"><br><br>
			
			<center><input name="SendPesqUser" type="submit" value="Pesquisar" style="background-color: #01DFD7"></center>
			<center><br><br> <a href="principal.php"><input type="button"value="Voltar"size="20" style="background-color: #01DFD7"></a> </br></br></center>
		</form><br><br>
		
		
	</body>
</html>