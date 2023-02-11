<?php include_once "conexao.php" ?>
<?PHP

 
        // Concatena a pasta com o nome
		$destino = 'bdimagem / ' . $imagem;
		
		
		$sql = "Insert into imagen (imagens) Values ('$imagem')";
			
		mysqli_query ($conn, $sql) or die ("Não foi possível executar a inserção.");
				
		move_uploaded_file($temp, $destino);
		header("location: index_imagem.php");
	
?>