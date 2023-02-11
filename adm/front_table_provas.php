<?php 
    require_once '../conexao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo2.css" rel="stylesheet" type="text/css"/>

        <title>Document</title>

        <style>
        
            table{
                background-color: #A9F5F2;
                box-shadow: 0 0 1em gray;
                margin: 10px auto;   
                width: 80%;
            }

            tr:nth-child(even) {
                background: #E0F8F7;   
            }

            td{
                text-align: center;
            }
        
        </style>


    </head>
    <body><center>

        <div id= "cx1">	
                <img src ="../img/Logo TCC.png " width="100px" class="img_logo" align="right"/>
        </div>
            <div id= "cx3">
                <div class="cad_provas">
                    <table border="0" cellspacing ="0" cellpadding="0">
                        <tr>
                            <th> Título </th>
                            <th> Matéria </th>
                            <th> Tempo </th>
                            <th> Quantidade Questoes </th>
                            <th> Link </th>
                            <th> Correção </th>
                        </tr>        
                        <?php
                            $sql = mysqli_query($conn, "select * from provas_dissertativas");
                            
                            while($dados = mysqli_fetch_array($sql)){
                                $_SESSION['prova'] = $dados['cod_provas'];  
                        ?>
                        <tr>
                            <td><?php echo $dados["titulo_prova"]; ?></td>
                            <td><?php echo $dados["materia"]; ?></td>
                            <td><?php echo $dados["tempo"]; ?></td>
                            <td><?php echo $dados["quant_quests"]; ?> </td>
                            <td><?php echo "<a href='front_cad_questoes.php?id=".$dados['cod_provas']."'> Inserir Questões </a>"; ?></td>                
                            <td><?php echo "<a href='front_corrige_provas.php?id=".$dados['cod_provas']."'> Corrigir Prova </a>"; ?></td>                
                        </tr>
                        <?php } ?>
                    </table><br/>
                    <input type="button" value="Voltar" onclick="document.location='home_page.php'">
                </div>
            </div>
    </body>
</html>