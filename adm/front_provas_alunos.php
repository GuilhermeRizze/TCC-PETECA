<?php
    require_once '../conexao.php';
    require_once '../funcoes.php';

    // auth_prof();
    session_start();
    $id_usuario = $_SESSION['cod_usuario'];
    $cont = 1;

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

            tr{
                /* padding: 10px; */
            }

            tr:nth-child(even) {
                background: #E0F8F7;   
            }

             td, th{
                text-align: center;
                padding: 5px 7px;
            }
        
        </style>

    </head>
    <body>

        <div id= "cx1">	
			<img src ="../img/Logo TCC.png " width="100px" class="img_logo" align="right"/>
		</div>

        <div id="cx3" class="cad_provas">
        
            <?php
                $id_usuarios = $_GET['id_usuario'];
                $id_provas = $_GET['id_provas'];
                $_SESSION['cod_prova'] = $id_provas;
                $_SESSION['cod_aluno'] = $id_usuarios;
            ?>
            <center>
            <form action="back_corrigido.php" method="post">
                <table border="1" cellspacing ="0" cellpadding="5">
                    <tr>
                        <th> Questões </th>
                        <th> Respostas </th>
                        <th colspan="2"> Correção </th>
                    </tr>        
                    <?php
                        // $sql = mysqli_query($conexao, "select * from hist_resp_dissert where id_prova = $id_prova;");
                        $sql = mysqli_query($conn, "select * from hist_resp_dissert h 
                        join provas_dissertativas p on h.id_prova = p.cod_provas 
                        join questoes_dissertativas q on h.id_questao = q.cod_questao_dissert 
                        join usuario u on h.id_usuario = u.cod_usuario where h.id_usuario=$id_usuarios and h.id_prova=$id_provas;");
                        while($dados = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $dados["questao"]; ?></td>
                        <td><?php echo $dados["resposta"]; ?></td>
                        <th> <input type="radio" name="resposta<?php echo $cont; ?>" value="true"> ✓ </th>
                        <th> <input type="radio" name="resposta<?php echo $cont; ?>" value="false"> ✖ </th>
                        <input type="hidden" name="questao<?php echo $cont++; ?>" value="<?php echo $dados['id_questao']?>">
                    </tr>
                    <?php } ?>
                </table><br/>
                <input type="submit" value="Pronto">
                <input type="button" value="Voltar" onclick="history.go(-1)">

            </form>

        </center>

        
    </body>
</html>