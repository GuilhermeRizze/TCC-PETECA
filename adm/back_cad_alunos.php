<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<?php

require_once "../conexao.php";
 
$nome = addslashes($_POST['nome']);
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$senha_confirm = MD5($_POST['senha2']);
$tipo = $_POST['tipo'];

$verificar_usuario = ("SELECT login FROM usuario WHERE login = '$login'");

$executar_verificacao = mysqli_query($conn, $verificar_usuario);

$array = mysqli_fetch_array($executar_verificacao);

$logarray = $array['login'];

  if($senha <> $senha_confirm){
    echo"<script>alert('As senhas são diferentes');window.location.href='front_cad_alunos.php';</script>";
  }else{  

    if($login == "" || $login == null || $senha == "" || $senha == null){
      echo"<script>alert('Todos os campos devem ser preenchidos');window.location.href='front_cad_alunos.php';</script>";
   
      }else{
        if($logarray == $login){
   
          echo"<script>alert('Esse login já existe');window.location.href='front_cad_alunos.php';</script>";
          die();
   
        }else{
          $query = ("INSERT INTO usuario (login, senha, nome, designacao) VALUES ('$login','$senha', '$nome', '$tipo')");
          $insert = mysqli_query($conn, $query);
           
          if($insert){
            echo"<script>alert('Usuário cadastrado com sucesso!');window.location.href='front_cad_alunos.php'</script>";
          }else{
            echo"<script>alert('Não foi possível cadastrar esse usuário');window.location.href='front_cad_alunos.php'</script>";
          }
      }
    }
  }
?>
