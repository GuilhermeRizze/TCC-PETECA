<?php
    require_once "../conexao.php";

    if ($_GET) {
        $get = $_GET['id'];   
    }else{
        $get = $_POST['teste'];
        $questao = $_POST['questao'];
        
        $sql1 = "select * from questoes_dissertativas where id_prova = $get";
        $query1 = mysqli_query($conn, $sql1);
        $rows = mysqli_num_rows($query1);
        $numero = $rows + 1;
        
        $sql2 = "insert into questoes_dissertativas (id_prova, questao, numero) values ('$get','$questao', '$numero');";
        $query2 = mysqli_query($conn, $sql2);

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../css/estilo2.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>
        <title>Document</title>

        <style>
        
            table{
                background-color: #A9F5F2;
                box-shadow: 0 0 1em gray;
                margin: 10px auto;   
                width: 80%;
            }

            tr{
                /* padding: 10px; */
            }

            tr:nth-child(even) {
                background: #E0F8F7;   
            }

            .cad_questoes td, .cad_questoes th{
                text-align: center;
                padding: 5px 7px;
            }
        
        </style>

    </head>
    <body align="center">

        <div id= "cx1">	
			<img src ="../img/Logo TCC.png " width="100px" class="img_logo" align="right"/>
		</div>

        <div id="cx3" class="cad_provas">
            <form action="front_cad_questoes.php" method="post">     
                <input type="text" name="questao" required>
                <input type="hidden" name="teste" value="<?php echo $get?>"><br/><br/>
                <input type="submit" value="Enviar">
                <input type="button" value="Voltar" onclick="document.location='front_table_provas.php'">
            </form><br/>
            <div class="cad_questoes">
                <table border="0" cellspacing ="0" cellpadding="20">
                    <tr>
                        <th> Numero </th>
                        <th> Questao </th>
                    </tr>        
                    <?php
                        $a = mysqli_query($conn, "select * from questoes_dissertativas where id_prova = $get;");
                        while($dados = mysqli_fetch_array($a)){
                    ?>
                    <tr>
                        <td><?php echo $dados["numero"]; ?></td>             
                        <td><?php echo $dados["questao"]; ?></td>             
                    </tr>
                    <?php } ?>
                </table>
            </div>



