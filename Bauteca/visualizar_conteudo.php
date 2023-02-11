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
<input type="hidden" name="cod_bau" value="<?php echo $_REQUEST['cod_bau'] ?>">
</body>
</html>
<?php
	$cod_bau = $_REQUEST['cod_bau'];
	$sql="SELECT * FROM bauteca WHERE cod_bau = '$cod_bau'";

	$result=mysqli_query($con,$sql);
	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Vizualizar Bau</title>
	</head>
	<body>

	

	<?php
	while($rows=mysqli_fetch_array($result)){
	?>
	<tr>

	
	<td align="center" bgcolor="#FFFFFF"><a href="vizualizar_conteudo.php?cod_bauteca=<?php echo $rows['cod_bau']; ?>"><?php echo $rows['professor']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><a href="vizualizar_conteudo.php?cod_bauteca=<?php echo $rows['cod_bau']; ?>"><?php echo $rows['titulo']; ?></a><BR></td>
	
	</tr>
	<?php
	// Exit looping and close connection
	}
	mysqli_close($con);
	?>

	<tr>

	</tr>
	</table>
	</body>
</html>