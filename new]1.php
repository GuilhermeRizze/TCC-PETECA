<?php
session_start();
include_once("conexao.php");

?>
<html lang="pt-br">
	<head>
	<title>ROTEIRO DE APRENDIZAGEM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>

			 <section id="banner" >
				<h2><strong>Vizualizar</strong> Roteiro de Aprendizagem</h2>
				
			</section>
	<head>
		<meta charset="utf-8">

		
	</head>
	<body>

		<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	<td width="25%" align="center" bgcolor="#E6E6E6"><strong>Professor:</strong></td>
	<td width="34%" align="center" bgcolor="#E6E6E6"><strong>Titulo:</strong></td>
	<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Criação:</strong></td>

	</tr>

	<?php

	// Start looping table row
	$resultado = "Select * from usuarios";
	$result = mysqli_query($conn,$resultado);
	while($rows = mysqli_fetch_array($result)){
	?>
	<tr>

	<td align="center" bgcolor="#FFFFFF"><a href="new]1_pro.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['professor']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><a href="new]1_pro.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['titulo']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><a href="new]1_pro.php?id=<?php echo $rows['id'];?>"><?php echo $rows['created']; ?></a><BR></td>
	</tr>
	<?php
	// Exit looping and close connection
	}
	mysqli_close($conn);
	?>

	<tr>

	</tr>
	</table>
	<center><a href="principal.php"><input type="button"value="Voltar "size="20" style="background-color: #CCCCCC"></a></center>
	<br><br><br>
	</body>
</html>