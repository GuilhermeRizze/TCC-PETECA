<?php

    require_once '../conexao.php';    
    require_once '../funcoes.php';
    
    session_start();
    
    $cod_usuario = $_SESSION['cod_aluno'];
    $cod_prova = $_SESSION['cod_prova'];
    

    $sql = "select * from hist_resp_dissert where id_usuario = '$cod_usuario' and id_prova = '$cod_prova'";
    $query = mysqli_query($conn, $sql);
    // $array = mysqli_fetch_array($query);
    $rows = mysqli_num_rows($query);
    echo $rows . " linhas <br><br>";
    $resposta = array();
    $questao = array();

    

    if ($_POST) {
        $i = 1;
        while ($array = mysqli_fetch_array($query)) { 
            
            
            echo $i . "indice<br>";

            $resposta[$i] = $_POST['resposta'.$i]; 
            echo $resposta[$i] . " correcao!<br>";
            
            $questao[$i]  = $_POST['questao'.$i];
            echo $questao[$i] . " questao!<br>";
            
            $id_resposta = $array["cod_hist_resp"];
            echo $array['resposta'] . " resposta<br><br>";


            $insert_correcao = mysqli_query($conn, "insert into correcao (id_questao, id_usuario, id_prova, correcao, id_resposta) values ('$questao[$i]', '$cod_usuario', '$cod_prova', '$resposta[$i]', $id_resposta)");

            
            $i = $i+1;
            
        }

        header("location: home_page.php");

    }

?>