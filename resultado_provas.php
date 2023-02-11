<?php require_once 'conexao1.php'; ?>

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
			</ul>
		
			
		<br><br>	
					</ul>
			</section>
<?php
session_start();
include_once("conexao1.php");
//$provas= $_GET['titulo_prova'];
		
			$titulo_prova = filter_input(INPUT_POST, 'provas', FILTER_SANITIZE_STRING);
			$result_provas = "SELECT * FROM provas WHERE titulo_prova= '$titulo_prova'";
			$resultado_provas = mysqli_query($conn, $result_provas);
			while($prova = mysqli_fetch_assoc($resultado_provas)){
				echo "cod_provas: " . $row_usuario['cod_provas'] . "<br>";
				echo "cod_usuario: " . $row_usuario['cod_usuario'] . "<br>";
				echo "cod_materia: " . $row_usuario['cod_materia'] . "<br>";
				echo "Titulo da Prova " . $row_usuario['titulo_prova'] . "<br>";
				echo "Tempo Prova:" . $row_usuario['tempo_prova'] . "<br>";
				echo "<a href='proc_apagar_prova.php?id=" . $row_usuario['cod_provas'] . "'>Apagar</a><br><hr>";
			}
		
		?>
	</body>
</html>