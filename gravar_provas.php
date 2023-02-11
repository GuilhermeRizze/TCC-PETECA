<?php
require('funcoes.php');
	$con=mysqli_connect("localhost", "root", "","portal_de_provas")or die("cannot connect");
    //mysqli_select_db($con,"portal_de_provas")or die("cannot select DB");
	//require('funcoes.php');
	//seguranca();
?>

<html>
	<head> 
		<title> Portal de Provas - Etec Astor de Mattos Carvalho </title> 
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF -8">
		 <meta name="viewport" content=", initial-scale=1" />
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		 <link rel="stylesheet" href="../css/estilo1.css" />
		 <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>
		 <link rel="stylesheet" href="assets/css/main.css" />
                 
		
	</head>
	
	
	<body>
			
		
		
        	<table border="0"  width="1500">
			
				<td background="nova.PNG" width="0" valign="top" >
				</td>
				<td bgcolor="#E0F8F7" width="500" >
				<center><img src ="img/logop.png " width="200px" height="200px"/></center> 
				<br><BR><br><BR>
				<center><p><font size="6" face="OpenType"> Cadastrar nova prova: <br><BR> </center>
				<font size="4" face="Arial">
				<form action="man_provas.php" method="post">
                <input type="hidden" name="cod_curso"value="<?php echo $_REQUEST['cod_curso'] ?>">
			<?php
				
			
				
				if($_GET){
					$curso = $_GET['cod_curso'];
					$_SESSION['cod_cursoabc'] = $curso;
				}else{
					$curso = $_SESSION['cod_cursoabc'];
				}
				$sql="SELECT cod_materia,materia FROM materia WHERE cod_curso = '$curso'";
				$result=mysqli_query($con,$sql);
			?>
			
			<td colspan="2"><br>
			Escolha a matéria da prova: 
                            <select name="materia">
                                <option value="" selected disabled> Clique para selecionar uma matéria... </option>

                                <?php while($rows=mysqli_fetch_array($result)){ ?>               
                                    <option value="<?php echo $rows['materia']; ?>"><?php echo $rows['materia']; ?></option> 
                                <?php }mysqli_close($con); ?>
                            </select>
					
			<br><br><br><br>
			Titulo da Prova: <input type="text" name="titulo_prova" size="100"><br/><br/><br>
        	Digite o tempo da prova (HH:MM): <input type="time" name="time" value="00:40"required>
              	
				<center>
				<br>
				<input type="submit" name="salvar" value="Cadastrar" style="background-color: #CCCCCC">
                </font>
				<input type="button" value="Voltar" onclick="history.go(-1)" style="background-color: #CCCCCC" />
				</center>
		</td>
		</form>
		
		</table>

    </body>
</html>	