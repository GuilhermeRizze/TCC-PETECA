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
		<form action = "visualizar_todos_roteiros.php">
		<?php
		if(isset($_SESSION['msg'])){
		
			unset($_SESSION['msg']);
		}
		
		$id = $_REQUEST ['id'];
		
		
		$resultado = "SELECT * FROM usuarios WHERE id = '$id'";
		$result = mysqli_query($conn,$resultado);
		$rows = mysqli_fetch_assoc($result)
		?>
			<br>
			<h1>Professor :</h1>
			<p> &nbsp; &nbsp; <?php echo $rows['professor'] ; ?>  <br>
			
			<h1>Titulo :</h1>
			<p> &nbsp; &nbsp; <?php echo $rows['titulo'] ; ?>  <br>
			
			<h1>Roteiro :</h1>
			<p> &nbsp; &nbsp; <?php echo $rows['roteiro'] ; ?>  <br>
			
			<h1>Data de Criação :</h1>
			<p> &nbsp; &nbsp; <?php echo $rows['created'] ; ?>  <br>
			
			<h1>Data de Modificação :</h1>
			<p> &nbsp; &nbsp; <?php echo $rows['modified'] ; ?>  <br>

			
			<?php
					$DiretorioDaImagem = 'bdimagem/';
					?>
				<tr>
					<td><?php echo $rows['arquivo'];?></td>
					<td><img id='ImagemParaMostrar' src= '<?php echo $DiretorioDaImagem.$rows['arquivo']?>'></td>	
				</tr>
				
			<br><br>
		
				<center><br><br> <a href="proc_apagar_usuario.php?id=<?php echo $rows['id']?>"><input type="button"value="Apagar roteiro"size="20" style="background-color: #01DFD7"></a> </br></br></center>
		
	    		<center><br><br> <a href="index.php"><input type="button"value="Sair"size="20" style="background-color: #01DFD7"></a> </br></br></center> 
		<center><br><br> <a href="principal.php"><input type="button"value="Voltar Para Pagina Inicial"size="20" style="background-color: #01DFD7"></a> </br></br></center>
		</form>
	</body>
</html>
	