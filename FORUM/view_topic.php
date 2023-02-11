<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="portal_de_provas"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select databse.
$con=mysqli_connect("localhost", "root", "","portal_de_provas")or die("cannot connect");
//mysqli_select_db($con,"portal_de_provas")or die("cannot select DB");

// get value of id that sent from address bar
$id=$_REQUEST['id'];

$sql="SELECT * FROM forum_question WHERE id='$id'";
$result=mysqli_query($con,$sql);

$rows=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
	<html>
	<head>
			<title>Discussão </title>

		<meta charset="utf-8" />
		<meta name="viewport" content=", initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<section id="banner" >

				<h2><strong>Discussões</strong> </h2>
				
					
					</ul>
		</section>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#E0F8F7">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#FFFFFF"><strong>Topico:<?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><strong>Detalhes:</strong><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><strong>Autor :</strong><?php echo $rows['name']; ?> </td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><strong>Email :</strong><?php echo $rows['email'];?> </td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><strong>Tempo : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>


<?php
 $sql2="SELECT * FROM forum_answer WHERE id='$id'";
$result2=mysqli_query($con,$sql2);

while($rods=mysqli_fetch_array($result2)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#E0F8F7">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="18%" bgcolor="#FFFFFF"><strong>Nome:</strong></td>
<td width="5%" bgcolor="#FFFFFF">:</td>
<td width="77%" bgcolor="#FFFFFF"><?php echo $rods['name']; ?></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><strong>Email:</strong></td>
<td bgcolor="#FFFFFF">:</td>
<td bgcolor="#FFFFFF"><?php echo $rods['email']; ?></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><strong>Duvida</strong></td>
<td bgcolor="#FFFFFF">:</td>
<td bgcolor="#FFFFFF"><?php echo $rods['answer']; ?></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><strong>Data/Horario</strong></td>
<td bgcolor="#FFFFFF">:</td>
<td bgcolor="#FFFFFF"><?php echo $rods['datatime']; ?></td>
</tr>
</table></td>
</tr>
</table>

 

<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysqli_query($con,$sql3);

$rows=mysqli_fetch_array($result3);
$view=$rows['view'];

 

// if have no counter value set counter = 1
if(empty($view)){

		$view=1;
		$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
		$result4=mysqli_query($con,$sql4);
		}

		 

		// count more value
		$addview=$view+1;
		$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
		$result5=mysqli_query($con,$sql5);

		mysqli_close($con);
		?>


		
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#E0F8F7">
		<tr>
		<form name="form1" method="post" action="add_answer.php">
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		<tr>
		<td width="18%"><strong>Nome</strong></td>
		<td width="3%">:</td>
		<td width="79%"><input name="name" type="text" id="name" size="45" required ></td>
		</tr>
		<tr>
		<td><strong>Email</strong></td>
		<td>:</td>
		<td><input name="email" type="text" id="email" size="45" required ></td>
		</tr>
		<tr>
		<td valign="top"><strong>Resposta</strong></td>
		<td valign="top">:</td>
		<td><textarea name="answer" cols="45" rows="3" id="answer" required ></textarea></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input name="id" type="hidden" value="<?php echo $id; ?>" ></td>
		<td><input type="submit" name="Submit" value="Enviar"> <input type="reset" name="Submit2" value="Cancelar" ><a href="main_forum.php">
		<input type="button" value="Voltar "size="20" ></a></td>
		
		</tr>
		</table>
		</td>
		</form>
		</tr>
		</table>
	</body>
</html>