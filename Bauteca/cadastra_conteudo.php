<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="portal_de_provas"; // Database name


	// Connect to server and select databse.
	$con=mysqli_connect("localhost", "root", "")or die("cannot connect");
mysqli_select_db($con,"portal_de_provas")or die("cannot select DB");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
<body>

<form method="POST" action="proc_cad_conteudo.php" enctype="multipart/form-data">

			<input type="hidden" name="cod_materia" value="<?php echo $_REQUEST['cod_materia'] ?>">
			<label>Nome do Professor:  <style= "background-color: #151515"> </label>
			<input type="text" name="professor" placeholder="Digite o nome completo" size="20" style="background-color: #FFFFFF"><br><br>
			
			<label>Título: </label>
			<input type="text" name="titulo"  placeholder="Digite o título" size="20" style="background-color: #FFFFFF"><br><br>
			
			<label>Texto: </label>
			<textarea rows="5" cols="15" name="texto" placeholder="Digite seu texto" size="1" style="background-color: #FFFFFF"> </textarea> <br><br>
			
			<center><h3>Clique abaixo para inserir os arquivos do computador.</h3></center>
			<center><div class="feature">
								
								<input type = "file" name = "anexo1"><br><br>
						        
								<input type = "file" name = "anexo2"><br><br>
								
								<input type = "file" name = "anexo3"><br><br>
								
								<input type = "file" name = "anexo4"><br><br>
								
								<input type = "file" name = "anexo5"><br><br>
								
								
			</div></center><br>
			<center><input type="submit" value="Cadastrar" style="background-color: #01DFD7" /></center>

</body>
</html>


