<?php
    require_once '../conexao.php';
    require_once '../funcoes.php';

    auth_alun();
    // session_start();
    $id_usuario = $_SESSION['cod_usuario'];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>
        <title>Document</title>
    </head>
    <body>
       
        <?php

            $id_prova = $_GET['id'];
            $quant_quests = $_GET['quant_quests'];
            $_SESSION['cod_prova'] = $id_prova;


            $sql = mysqli_query($conn, "select * from questoes_dissertativas where id_prova = $id_prova order by rand() limit $quant_quests;");
            
            $sql2 = mysqli_query($conn, "select * from temporario where id_prova=$id_prova and id_usuario=$id_usuario;");
            $rows = mysqli_num_rows($sql2);
            // echo $rows;

            if ($rows < 1){
                while($dados = mysqli_fetch_array($sql)){
                
                    $questao = $dados['questao'];
                    $numero = $dados['numero'];

                    $inserindo = "insert into temporario (id_usuario, id_prova, numero, questao) values ($id_usuario, $id_prova, '$numero', '$questao');";                    
                    $query = mysqli_query($conn, $inserindo);


                    
            
                }
                header('location:front_avaliacao.php');
            } else {
                header('location:front_avaliacao.php');
            }
        ?>

        
    </body>
</html>