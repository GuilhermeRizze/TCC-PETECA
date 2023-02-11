<?php
    require_once "../conexao.php";

    if ($_GET) {
        $get = $_GET['id'];
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

        <title>Document</title>
    </head>
    <body align="center">
        <div id= "cx1">	
                <img src ="../img/Logo TCC.png " width="100px" class="img_logo" align="right"/>
            </div>
            <div id= "cx3" class="cad_provas">
                <table border="1" cellspacing ="0" cellpadding="5">
                    <tr>
                        <th> Aluno </th>
                    </tr>        
                    <?php
                        $sql1 = "select distinct h.id_usuario, u.nome from hist_resp_dissert h inner join usuario u on h.id_usuario = u.cod_usuario where h.id_prova = $get";
                        $query1 = mysqli_query($conn, $sql1);
                        while($dados = mysqli_fetch_array($query1)){
                            echo '
                            <tr>
                                <th>
                                    <a href="front_provas_alunos.php?id_usuario='.$dados['id_usuario'].'&id_provas='.$get.'">'.$dados['nome']. '</a>
                                </th>
                            </tr>';
                        } 
                    ?>
                </table><br/>

                <input type="button" value="Voltar" onclick="history.go(-1)">

            </div>
    </body>
</html>
