<?php
session_start();
 ?>
<!DOCTYPE html>
  <html lang="pt-br">
    <head>
	   <meta charset="utf-8">
	               <title> CRUD - Cadastrar </title>
	          </head>
           <body>
	   <h1>  Cadastrar Roteiro </h1>
	
	<?php
	   
	   if(isset($_SESSION['msg'])) {
	   echo $_SESSION ['msg'];
	   unset($_SESSION['msg']);
	    
	   
	   };
	   
	   ?>
	   
	<form method="POST" action="main_roteiro.php">
  <label> Nome do professor: </label>
	     <input type="text" name="nome" placeholder="Digite o nome completo"> <br> <br>
		 <label> Titulo do roteiro: </label>
	     <input type="text" name="titulo" placeholder="Digite o titulo"> <br> <br>
	     
		 <label> Texto: </label>
	     <input type="text" texto="texto" placeholder="Insira o texto"> <br> <br>
	
		 
		 <input type="submit" value="Cadastrar Roteiro">
	   

 	         </form>
	               </body>
	        </html>
	     