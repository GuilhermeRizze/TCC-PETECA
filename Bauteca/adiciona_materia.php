<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="portal_de_provas"; // Database name
$tbl_name="materia"; // Table name

	// Connect to server and select databse.
	$con=mysqli_connect("localhost", "root", "")or die("cannot connect");
    mysqli_select_db($con,"portal_de_provas")or die("cannot select DB");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Disciplinas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content=", initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<section id="banner" >
				<h2><strong>Adiciona</strong> Matéria</h2>
				
					
			</section>
			<br> <br>
		<form method="POST" action="main_materia.php" >

			
			<label>Nome da Materia:  <style= "background-color: #151515"> </label>
			<input type="text" name="name_materia" placeholder="Digite o nome da materia" size="20" style="background-color: #FFFFFF"><br><br>
			
			<input type="hidden" name="cod_curso"value="<?php echo $_REQUEST['cod_curso'] ?>">
								
								
			</div></center><br>
			<center><input type="submit" value="Cadastrar" style="background-color: #01DFD7" /><br><br><a href="index.php"><input type="button"value="Voltar "size="20" style="background-color: #01DFD7"></a>
		</center>
		</form>
		
	</body>
</html>

		


