<?php require_once 'conexao.php'; ?>

<html lang="pt-br">
	<head>
	<title>Bauteca</title>
		<meta charset="utf-8" />
		<meta name="viewport" content=", initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

			<section id="banner" >
				<h2><strong>Aula Inserida</strong></h2>
							
					</ul>
			</section>

	
		<?php
		$conn = mysqli_connect("localhost", "root", "", "portal_de_provas")or die("cannot select DB"); 
			$bau = $_REQUEST['cod_bau'];
	$sql= "SELECT * FROM bauteca WHERE cod_bau = '$bau'";

	$result=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_array($result);



		  ?>
				<br><br>
					<h1>Codigo:</h1>
					<p> &nbsp; &nbsp;<?php echo $rows['cod_bau']; ?> <br>
					<h1>Professor:</h1>
					<p> &nbsp; &nbsp;<?php echo $rows['professor']; ?> <br>
					<h1>Título:</h1>
					<p> &nbsp; &nbsp;<?php echo $rows['titulo']; ?> <br>
					<h1>Texto:</h1>
					<p> &nbsp; &nbsp;<?php echo $rows['texto']; ?> <br>

					<?php 
					$arquivo1 = $rows['anexo1'];
					$arquivo2 = $rows['anexo2'];
					$arquivo3 = $rows['anexo3'];
					$arquivo4 = $rows['anexo4'];
					$arquivo5 = $rows['anexo5'];

					?>
				<div class="features">
						<div class="feature">
				        <i class="fa fa-folder-open-o"></i>
						<?php 
						echo"<a href=bauteca/".$arquivo1." download>".$arquivo1."<br><br> Clique aqui para baixar o Anexo 1 </a>";?></br><br><br>
						
				</div>		
						<div class="feature">
							<i class="fa fa-folder-open-o"></i>
							<?php 
						echo"<a href=bauteca/".$arquivo2." download>".$arquivo2."<br><br> Clique aqui para baixar o Anexo 2 </a>";?></br>
						</div>
						<div class="feature">
							<i class="fa fa-folder-open-o"></i>
							<?php 
						echo"<a href=bauteca/".$arquivo3." download>".$arquivo3."<br><br> Clique aqui para baixar o Anexo 3 </a>";?></br>
							</div>
					<div class="feature">
								<i class="fa fa-folder-open-o"></i>
								<?php 
						echo"<a href=bauteca/".$arquivo4." download>".$arquivo4."<br><br> Clique aqui para baixar o Anexo 4 </a>";?></br>
						    </div>
						    <div class="feature">
								<i class="fa fa-folder-open-o"></i>
								<?php 
						echo"<a href=bauteca/".$arquivo5." download>".$arquivo5."<br><br> Clique aqui para baixar o Anexo 5 </a>";?></br>
						    </div>
					</div>
					<center><a href="../student/login_aluno.php"><input type="button"value="Voltar "size="20" style="background-color: #01DFD7"></a></center>
					
					<br><br><br>
</body>
</html>