<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<?php

    require_once "../conexao.php";
    // require_once "../funcoes.php";
    session_start();
    $id_prova = $_SESSION['cod_prova'];  


    $resposta = array();
    $numero_questao = array();

    $id_usuario = $_POST['id_usuario'];
    $rows = $_POST['rows'];

    $indice = 1;
    while ($indice <= $rows) {
      
      $incremental = "resposta" . $indice;
      $incremental2 = "numero_questao" . $indice;
      $indice2 = $indice-1;
      $resposta[$indice2]= $_POST[$incremental];
      $numero_questao[$indice2] = $_POST[$incremental2];

      $query = ("INSERT INTO hist_resp_dissert (id_questao, id_usuario, id_prova, resposta) VALUES ('$numero_questao[$indice2]', '$id_usuario', '$id_prova', '$resposta[$indice2]')");
      $insert = mysqli_query($conn, $query);

      $indice++;

    }
      
    if($insert){
      $id_prova = $_SESSION['cod_prova'];
      $delete = ("delete from temporario where id_usuario='$id_usuario' and id_prova='$id_prova'");
      $query_delete = mysqli_query($conn, $delete);
      unset($_SESSION['cod_prova']);

      echo"<script>alert('Questões enviadas com sucesso!');window.location.href='login_aluno.php'</script>";
    }else{
      echo"<script>alert('Falha no envio');window.location.href='front_avaliacao.php'</script>";
    }
   

?>
