<!Doctype html>
<html>
	<head>
		<title>teste</title>
		
		<meta charset="utf-8" />
		<meta name="viewport" content=", initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
	
	
	<section id="banner" >
				<h2><strong>Criar</strong> Novo tópico</h2>
				
	</section>
			
			
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#E0F8F7">
	<tr>
	<form id="form1" name="form1" method="post" action="add_topic.php">
	<td>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
	<tr>
	<td colspan="3" bgcolor="#E6E6E6"> </td>
	</tr>
	<tr>
	<td width="14%"><strong>Tópico</strong></td>
	<td width="2%">:</td>
	<td width="84%"><input name="topic" type="text" id="topic" size="50" required /></td>
	</tr>
	<tr>
	<td valign="top"><strong>Detalhes</strong></td>
	<td valign="top">:</td>
	<td><textarea name="detail" cols="50" rows="3" id="detail" required ></textarea></td>
	</tr>
	<tr>
	<td><strong>Nome</strong></td>
	<td>:</td>
	<td><input name="name" type="text" id="name" size="50" required /></td>
	</tr>
	<tr>
	<td><strong>Email</strong></td>
	<td>:</td>
	<td><input name="email" type="text" id="email" size="50" required /></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><input type="submit" name="Submit" value="Enviar" /> <input type="reset" name="Submit2" value="Cancelar" /><a href="main_forum.php"><input type="button"value="Voltar "size="20" style="background-color: #"></a> </td>

	</tr>
	</table>
	</td>
	</form>
	</tr>
	</table>
	</body>
</html>