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
				<h2><strong>RESULTADO</strong> DA PESQUISA</h2>
			
					
					</ul>
			</section>
<?php
session_start();
$nome= $_POST['nome'];
		
			
			$result_usuario = "SELECT * FROM usuarios WHERE titulo= '$nome'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "ID: " . $row_usuario['id'] . "<br>";
				echo "Professor: " . $row_usuario['professor'] . "<br>";
				echo "Titulo: " . $row_usuario['titulo'] . "<br>";
				echo "Roteiro " . $row_usuario['roteiro'] . "<br>";
				
				
		
					$DiretorioDaImagem = 'bdimagem\ ';
					?>
				<tr>
					<td><?php echo $row_usuario['arquivo'];?></td>
					<td><img id='ImagemParaMostrar' src= '<?php echo $DiretorioDaImagem.$row_usuario['arquivo']?>'></td>	
				</tr>
			<?php	
			}
		
		?>
		
		
		