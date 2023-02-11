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
<body>
 <input type="hidden" name="cod_curso"value="<?php echo $_REQUEST['cod_curso'] ?>">
</body>
</html>
<?php
	$curso = $_REQUEST['cod_curso'];
	$sql="SELECT cod_materia,materia FROM materia WHERE cod_curso = '$curso'";

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
	
	<td width="24%" align="center" bgcolor="#01DFD7"><strong>Matéria:</strong></td>
	</tr>

	<?php
	while($rows=mysqli_fetch_array($result)){
	?>
	<tr>

	<td align="center" bgcolor="#FFFFFF"><a href="ver_conteudos.php?cod_materia=<?php echo $rows['cod_materia']; ?>"><?php echo $rows['materia']; ?></a><BR></td>
	
	</tr>
	<?php
	// Exit looping and close connection
	}
	mysqli_close($con);
	?>

	<tr>

	</tr>

	
	</table>
	
	<center><input type="submit" value="ADICIONAR MATÉRIA" style="background-color: #CCCCCC" onClick="location.href='adiciona_materia.php?cod_curso=<?php echo $_REQUEST['cod_curso'];?>'"></a>
	</font>
<a href="index.php"><input type="button"value="Voltar "size="20" style="background-color: #CCCCCC"></a></center></center>

	<br> <br>
	</form>
	</body>
</html>