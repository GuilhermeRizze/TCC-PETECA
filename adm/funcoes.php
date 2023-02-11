<script>

    function(){

    }

</script>


<?php

    function auth_prof(){
        session_start();

        if (($_SESSION['tipo'] == 'a') || ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))) {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['tipo']);
        header("location:../index.php");
        }
    }

    function auth_alun(){
        session_start();

        if (($_SESSION['tipo'] == 'p') || ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))) {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['tipo']);
        header("location:../index.php");
        }
    }

?>
<?php
	
	function conectar(){
		
	$db = mysqli_connect('127.0.0.1', 'root', '')or die ("Conexão não efetuada");
	mysqli_select_db($db,"portal_de_provas");
	return $db;
	}
?>