<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ROTEIRO DE APRENDIZAGEM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content=", initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

			<section id="banner" >
				<h2><strong>Editar </strong> o Roteiro selecionado </h2>
				
					
					</ul>
			</section>

		<meta charset="utf-8">
		<title> Editar</title>		
	</head>
	<body>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome do Professor: </label>
				<input type="text" name="professor" placeholder="Digite o nome completo" size="20" style="background-color: #FFFFFF"value=<?php echo $row_usuario['professor'];?>><br><br>
			
			<label>Titulo: </label>
			<input type="text" name="titulo" placeholder="Digite o titulo do Roteiro" size="20" style="background-color: #FFFFFF" value="<?php echo $row_usuario['titulo']; ?>"><br
			
			<label>Roteiro: </label>
			<textarea rows="30" cols="150" name="roteiro" placeholder= "Digite seu roteiro" size="20" style="background-color: #FFFFFF" value= "<?php echo $row_usuario['roteiro']; ?>"> </textarea><br><br>
			
			<center><input type="submit" value="Editar" style="background-color: #01DFD7"></center>
		</form>
	</body>
</html>