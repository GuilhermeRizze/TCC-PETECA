<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="portal_de_provas"; // Database name
$tbl_name="materia"; // Table name

	// Connect to server and select databse.
	$con=mysqli_connect("localhost", "root", "")or die("cannot connect");
    mysqli_select_db($con,"portal_de_provas")or die("cannot select DB");


	
	$sql="SELECT materia FROM materia";

	$result=mysqli_query($con,$sql);
	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Disciplinas</title>
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

	<table width="20%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	
	<td width="24%" align="center" bgcolor="#E6E6E6"><strong>Matéria:</strong></td>
	</tr>

	<?php
	while($rows=mysqli_fetch_array($result)){
	?>
	<tr>

	<td align="center" bgcolor="#FFFFFF"><a href="prova_aluno.php?materia=<?php echo $rows['materia']; ?>"><?php echo $rows['materia']; ?></a><BR></td>
	
	</tr>
	<?php
	// Exit looping and close connection
	}
	mysqli_close($con);
	?>

	<tr>

	</tr>

	
	</table>
	
	</form>
	
	<center><a href="student/tipo_prova.php"><input type="button"value="Voltar "size="20" style="background-color: #01DFD7"></a></center>
	</body>
</html>