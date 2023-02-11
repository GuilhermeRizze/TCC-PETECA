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
<body>
<input type="hidden" name="cod_materia" value="<?php echo $_REQUEST['cod_materia'] ?>">
</body>
</html>
<?php
	$materia = $_REQUEST['cod_materia'];
	$sql="SELECT cod_bau, professor, titulo FROM bauteca WHERE cod_materia = '$materia'";

	$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Conteudos Inseridos</title>
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

		

	<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	
	<td width="34%" align="center" bgcolor="#E6E6E6"><strong>Professor:</strong></td>
	<td width="34%" align="center" bgcolor="#E6E6E6"><strong>Título:</strong></td>
	

	</tr>

	<?php
	while($rows=mysqli_fetch_array($result)){
	?>
	<tr>

	
	<td align="center" bgcolor="#FFFFFF"><a href="ver_conteudo_aluno.php?cod_bau=<?php echo $rows['cod_bau']; ?>"><?php echo $rows['professor']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><a href="ver_conteudo_aluno.php?cod_bau=<?php echo $rows['cod_bau']; ?>"><?php echo $rows['titulo']; ?></a><BR></td>
	
	</tr>
	<?php
	// Exit looping and close connection
	}
	mysqli_close($con);
	?>

	<tr>

	</tr>
	</table>
	<center><a href="index_aluno.php"><input type="button"value="Voltar "size="20" style="background-color: #01DFD7"></a></center>
	</body>
</html>