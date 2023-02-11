<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
	$db_name="portal_de_provas"; // Database name
	$tbl_name="forum_question"; // Table name

	// Connect to server and select databse.
	$con=mysqli_connect("localhost", "root", "")or die("cannot connect");
mysqli_select_db($con,"portal_de_provas")or die("cannot select DB");

	$sql="SELECT * FROM forum_question";
	// OREDER BY id DESC is order result by descending

	$result=mysqli_query($con,$sql);
	?>

<!DOCTYPE html>
<html>
	<head>
		<title> Fórum </title>

		<meta charset="utf-8" />
		<meta name="viewport" content=", initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<section id="banner" >
				<h2><strong>Fórum</strong> </h2>
				
					
					</ul>
			</section>

	<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	
	<td width="33%" align="center" bgcolor="#E6E6E6"><strong>Tópico</strong></td>
	<td width="33%" align="center" bgcolor="#E6E6E6"><strong>Detalhes</strong></td>
	<td width="33%" align="center" bgcolor="#E6E6E6"><strong>Tempo</strong></td>
	</tr>

	<?php

	 

	// Start looping table row
	while($rows=mysqli_fetch_array($result)){
	?>
	<tr>
	

	<td align="center" bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['detail']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['datetime']; ?></a><BR></td>
	</tr>

	<?php
	// Exit looping and close connection
	}
	mysqli_close($con);
	?>

	
	</table>

	<center><br><br><tr>
	<a href="create_topic.php"><input type="button"value="Criar novo tópico "size="20" style="background-color: #CCCCCC"></a>
	<a href="../adm/login_professor.php"><input type="button"value="Voltar "size="20" style="background-color: #CCCCCC"></a>
	</tr></center>
	</body>
</html>