
		<?php
			session_start();
			include_once("conexao.php");
			$id= $_REQUEST['id'];
			
			$DiretorioDaImagem = 'bdimagem\ ';
			$sql = "SELECT arquivo FROM usuarios WHERE id='$id'";
			$query = mysqli_query($conn, $sql);
			if(mysqli_num_rows($query))
			{
				$resultado = mysqli_fetch_row($query);
				$Diretorio = $resultado[0];
				 unlink($DiretorioDaImagem.$Diretorio);
			}
			
			
			
			if(!empty($id)){
	$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	header("Location: principal.php");
			}
			?>