<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	
	<title>ROTEIRO DE APRENDIZAGEM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>

			 <div id="header" class="container">
            <div id="banner">
				<h2><strong>CADASTRAR</strong> o Roteiro</h2>
		
					</div>
					</ul>
			</section>
	<head>
		<meta charset="utf-8">
		<title> Cadastrar</title>		
		
	<body>
	
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_usuario.php" enctype = "multipart/form-data">
			<label>Nome do Professor:  <style= "background-color: #151515"> </label>
			<input type="text" name="professor" placeholder="Digite o nome completo" size="20" style="background-color: #FFFFFF"><br><br>
			
			<label>Título do Roteiro: </label>
			<input type="text" name="titulo"  placeholder="Digite o título" size="20" style="background-color: #FFFFFF"><br><br>
			
			<label>Roteiro: </label>
			<textarea rows="30" cols="150" name="roteiro" placeholder="Digite seu roteiro" size="10" style="background-color: #FFFFFF"> </textarea> <br><br>
			

					<center>

						<div class="feature">

				       <center> <i class="fa fa-plus-circle"></i>	
						
							<p><input type = "file" name = "selecionaImagem" value =  "Imagem"><br>Clique aqui para fazer upload de uma imagem.</p></center>
						</div>
						

		<br><br><input type="submit" value="Cadastrar" style="background-color: #01DFD7" /></br></br>
		<a href="principal.php"><input type="button"value="Voltar"size="20" style="background-color: #01DFD7"></a> 

		</center>
			
		</form>
	</body>
</html>