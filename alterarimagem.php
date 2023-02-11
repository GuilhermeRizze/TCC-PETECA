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
				<h2><strong>Roteiro</strong> De Aprendizagem</h2>
				<p>ETEC ASTOR DE MATTOS CARVALHO</p>
					
					</ul>
			</section>
		<?php
		
			$codigo = $_GET['codigo'];
			

			//deletar imagem do arquivo
			$DiretorioDaImagem = 'bdimagem\ ';
			$sql = "SELECT imagens FROM imagen WHERE codigo='$codigo'";
			$query = mysqli_query($conn, $sql);
			if(mysqli_num_rows($query))
			{
				$resultado = mysqli_fetch_row($query);
				$Diretorio = $resultado[0];
			unlink($DiretorioDaImagem.$Diretorio);
			}
			
			echo"
			
				<head>
				
				<meta http-equiv ='Content-Type' content ='text/html; charset=UTF-8'>
				</head>
			
				<form name = 'formImagem' action = 'alterarImagem2.php' method = 'post' enctype = 'multipart/form-data'> <!-- multipart/form-data serve para dizer ao browser o que fazer antes de enviar o formulário. Nesse caso, ele diz para não mexer em nada. Geralmente esse aqui é utilizado para fazer upload de arquivos, já que queremos que o arquivo chegue exatamente do mesmo jeito que foi mandado.--> 
		
				<input type = 'file' name = 'alterarImagem' value =  'Nova Imagem'>
				<input type = 'submit' name = 'enviarImagagem' value =  'Enviar'>
				<input type ='hidden' name = 'valorcodigo' value ='$codigo'/>
				</form>"
			
			
			
		?>
	</body>
</html>