<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<?php

  session_start();

  require_once "conexao1.php";
  $login = $_POST['login'];
  $senha = MD5($_POST['senha']);

  $msg = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
  $select_user = mysqli_query($conn, $msg);


  if (mysqli_num_rows($select_user) > 0){
  
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    while ($percorrer = mysqli_fetch_array($select_user)) {
      $tipo = $percorrer['designacao'];

      if ($tipo == "p") {
        $_SESSION['cod_usuario'] = $percorrer['cod_usuario'];
        $_SESSION['nome'] = $percorrer['nome'];
        $_SESSION['tipo'] = $tipo;
        header("location:adm/login_professor.php");
        
      } elseif ($tipo == "a") {
        $_SESSION['cod_usuario'] = $percorrer['cod_usuario'];
        $_SESSION['nome'] = $percorrer['nome'];
        $_SESSION['tipo'] = $tipo;
        header("location:student/login_aluno.php");
      }
    }

  }else{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);

    // echo"<script>alert('Login e/ou senha incorretos. \\nTambém é possível que o usuário não esteja cadastrado.'); window.location.href='front_login.php';</script>";
    
    echo"<script> window.location.href='front_login.php';</script>";
    
    $_SESSION['Erro'] = 'Erro';


  }
?>