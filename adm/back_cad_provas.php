<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<?php

require_once "../conexao.php";

// $tipo = $_POST['tipo'];  
$titulo = addslashes($_POST['titulo']);
$time = $_POST['time'];
$materia = $_POST['materia'];
$quests = $_POST['quests'];

$verificar_titulo = ("SELECT titulo_prova FROM provas WHERE titulo_prova = '$titulo'");

$executar_verificacao = mysqli_query($conn, $verificar_titulo);

$array = mysqli_fetch_array($executar_verificacao);

$logarray = $array['titulo_prova'];

  if($logarray == $titulo){

    echo"<script>alert('Esse título já existe');window.location.href='front_cad_provas.php';</script>";
    die();

  }else{
    $query = ("INSERT INTO provas_dissertativas (titulo_prova, materia, tempo, quant_quests) VALUES ('$titulo','$materia', '$time', '$quests')");
    $insert = mysqli_query($conn, $query);
      
    if($insert){
      echo"<script>alert('Prova cadastrada com sucesso!');window.location.href='front_table_provas.php'</script>";
    }else{
      echo"<script>alert('Não foi possível cadastrar essa prova');window.location.href='front_cad_provas.php'</script>";
    }
}
?>
