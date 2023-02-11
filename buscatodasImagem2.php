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
				<h2><strong>IMAGENS</strong> INSERIDAS</h2>
				<p>DO COMPUTADOR</p>
					
					</ul>
			</section>

	<center><table border= "1">
				<tr>
					<th>Codigo</th>
					<th>imagem</th>
					<th>Comandos</th>
					
				</tr>
				<?php
					
					$DiretorioDaImagem = 'bdimagem\ ';
					$sql = "SELECT codigo, imagens FROM imagen";
					$query = mysqli_query($conn, $sql);
					//$i=0;
					while($resultado = Mysqli_fetch_array($query)){
					?>
				<tr>
					<td><?php echo $resultado["codigo"];?></td>
					<td><img id='ImagemParaMostrar' src= '<?php echo $DiretorioDaImagem.$resultado["imagens"]?>'></td>	
     				<td><a href ="alterarimagem.php?codigo=<?php echo $resultado["codigo"]; ?>">
					<img  src ="\Aula_imagens\imagens\novo_16x16.png " />Editar</a> | 
				    <a href ="excluirimagem.php?codigo=<?php echo $resultado["codigo"]; ?>">
					<img  src ="\Aula_imagens\imagens\lixo_16x16.png " />Excluir</a></td>
				</tr>
				
				<?php  }
	
					?>
					
</table></center><br><br>
<center><br><br> <a href="index_imagem.php"><input type="button"value="Inserir mais arquivos"size="20"></a> </br></br></center>

 <center><br><br> <a href="principal.php"><input type="button"value="Voltar Para Pagina Inicial"size="20"></a> </br></br></center>


</body>
</html>