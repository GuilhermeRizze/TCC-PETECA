<?php require_once 'conexao.php'; ?>
<html>
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
				<h2><strong>VISUALIZAR</strong> O ROTEIRO DE APRENDIZAGEM</h2>
				
					</div>
					</ul>
			</section>
	<head>
		<meta charset="utf-8">

		
	</head>
	<body>
		<?php
		
			$codigo= $_GET['codigo'];
			
			$DiretorioDaImagem = 'bdimagem\ ';
			$sql = "SELECT imagens FROM imagen WHERE codigo='$codigo'";
			$query = mysqli_query($conn, $sql);
			if(mysqli_num_rows($query))
			{
				$resultado = mysqli_fetch_row($query);
				$Diretorio = $resultado[0];
				 unlink($DiretorioDaImagem.$Diretorio);
			}
			
			
			
			$delete = "Delete from imagen where codigo = '$codigo'";
			mysqli_query ($conn, $delete);
			
			


			
             echo "<br><br><center><a hreg='excluirimagem.php'>Dados excluidos com sucesso!!</center> <br><br>";
			
			
		?>
<center><br><br> <a href="principal.php"><input type="button"value="Voltar Para Pagina Inicial"size="20"></a> </br></br></center>
	</body>
</html>