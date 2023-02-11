<?php include_once 'conexao1.php'; ?>

<html lang="pt-br">
	<head>
	<title>AVALIAÇÃO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content=" initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

			<section id="banner" >
				<h2><strong>RESULTADO</strong> DA PESQUISA</h2>
			
		
			</section>
				<form method="POST" action="titulo_prova.php">
			<label>Nome da Prova: </label>
			
			<input type="text" name="nome" placeholder="Digite o nome da Prova"  size="20" style="background-color: #FEFDFD"><br><br>

			<center><br><br> <a href="resultado_provas.php"><input type="button"value="PESQUISAR"size="20" style="background-color: #01DFD7"></a> </br></br></center>
			<center><br><br> <a href="inicio_provas.php"><input type="button"value="Voltar "size="20" style="background-color: #01DFD7"></a> </br></br></center>
		</form><br><br>	
					
			
		

<?php
	
			$post['titulo_prova'] = filter_input(INPUT_POST, 'provas', FILTER_SANITIZE_STRING);
			$result_provas = "SELECT * FROM provas WHERE titulo_prova= '$provas'";
			$resultado_provas = mysqli_query($conn, $result_provas);
			while($row_provas = mysqli_fetch_assoc($resultado_provas)){
				echo "cod_provas: " . $row_usuario['cod_provas'] . "<br>";
				echo "cod_usuario: " . $row_usuario['cod_usuario'] . "<br>";
				echo "cod_materia: " . $row_usuario['cod_materia'] . "<br>";
				echo "Titulo da Prova " . $row_usuario['titulo_prova'] . "<br>";
				echo "Quantidade de Questões" . $row_usuario['qtd_questoes'] . "<br>";
				echo "Tempo Prova:" . $row_usuario['tempo_prova'] . "<br>";
				echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
			}
		
		?>
	</body>
</html>