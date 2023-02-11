<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="celke"; // Database name
$tbl_name="usuarios"; // Table name

	// Connect to server and select databse.
	$con=mysqli_connect("localhost", "root", "")or die("cannot connect");
mysqli_select_db($con,"celke")or die("cannot select DB");

	$sql="SELECT * FROM usuarios";
	// OREDER BY id DESC is order result by descending

	$resultado=mysqli_query($con,$sql);
	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Roteiro Aluno</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>
	<div id="header" class="container">
            <div id="banner">
				<h2><strong>PESQUISAR</strong> O ROTEIRO DE APRENDIZAGEM</h2>
				
					</div>
					</ul>
			</section>
		<meta charset="utf-8">
	
		

	</body>
	</body>

	<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	<td width="25%" align="center" bgcolor="#E6E6E6"><strong>Professor</strong></td>
	<td width="34%" align="center" bgcolor="#E6E6E6"><strong>Titulo</strong></td>
	<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Data de Criacao</strong></td>

	</tr>

	<?php

	// Start looping table row
	while($rows = mysqli_fetch_array($resultado)){
	?>
	<tr>

	<td bgcolor="#FFFFFF"><a href="new]1_pro.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['professor']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><a href="new]1_pro.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['titulo']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><a href="new]1_pro.php?id=<?php echo $rows['id'];?>"><?php echo $rows['created']; ?></a><BR></td>
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