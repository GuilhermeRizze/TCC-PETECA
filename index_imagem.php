<?php require_once 'conexao.php'; ?>

<html lang="pt-br">
	<head>
	<title>ROTEIRO DE APRENDIZAGEM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content=", initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

			<section id="banner" >
				<h2><strong>ESCOLHER</strong> ARQUIVO</h2>
				<p>DO COMPUTADOR</p>
					
					</ul>
			</section>
		<br><br><form name = "formImagem" action = "IncluirImagem.php" method = "post" enctype = "multipart/form-data"> </br></br>
	

			<input type = "file" name = "selecionaImagem" value =  "Imagem">
			<center><input type = "submit" name = "enviarImagagem" value =  "Enviar" style="background-color: #E6E6E6"> 
	
		
		</form>
		<form name = "formImagem3" action = "buscatodasImagem2.php" method = "post" enctype = "multipart/form-data"> 

			<br><center><input type = "submit" name = "pegaImagagem" value =  "Visualizar todas as imagens" style="background-color:#D8D8D8"></center></br>
		<center><br> <a href="principal.php"><input type="button" value="Voltar Para Pagina Inicial"size="20" style="background-color: #D8D8D8"></a> </br></center>
		</form>

	</body>
</html>