<?php require_once 'conexao.php'; ?>

<?PHP

$codigo = $_POST['valorcodigo'];
//echo $codigo;
$imagem = $_FILES['alterarImagem']['name'];
$temp = $_FILES['alterarImagem']['tmp_name'];
	
	
 
        // Concatena a pasta com o nome
		$destino = 'bdimagem / ' . $imagem;
		
		$atualizar = "UPDATE imagen SET imagens= '$imagem' WHERE codigo= '$codigo' ";
		
			
		mysqli_query ($conn, $atualizar) or die ("Não foi possível executar a inserção.");
				
		move_uploaded_file($temp, $destino);
		header("location: index_imagem.php");
	
?>