<?php 
    require_once '../conexao.php';

    if ($_GET) { 
        $id_usuario = $_GET['id_aluno'];
        $id_prova = $_GET['id_prova'];
    }

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
    </head>
    <body><center>

        <div id= "cx1">	
			<img src ="../img/Logo TCC.png " width="100px" class="img_logo" align="right"/>
		</div>

        <div id="cx3" class="cad_provas">

            <div class="cad_provas">
                <table border="0" cellspacing ="0" cellpadding="5">
                    <tr>
                        <th> Questão </th>
                        <th> Resposta </th>
                    </tr>        
                    <?php
                        $sql = mysqli_query($conn, "select u.nome, p.titulo_prova, q.questao, c.correcao, h.resposta from correcao c 
                        join usuario u on c.id_usuario = u.cod_usuario 
                        join provas_dissertativas p on c.id_prova = p.cod_provas 
                        join hist_resp_dissert h on c.id_resposta = h.cod_hist_resp 
                        join questoes_dissertativas q on c.id_questao = q.cod_questao_dissert 
                        where u.cod_usuario = $id_usuario and c.id_prova = $id_prova");
                        
                        while($dados = mysqli_fetch_array($sql)){

                            if ($dados["correcao"] == "true") {
                                
                                $cor = "#32CD32";
                            }else{
                                $cor = "#DC143C";
                            }
                    
                    ?>
                    <tr bgcolor="<?php echo $cor; ?>" style="color: white;">
                        <td><?php echo $dados["questao"]; ?></td>
                        <td><?php echo $dados["resposta"]; ?></td>

                    </tr>
                    <?php } ?>
                </table><br/>

                <input type="button" value="Voltar" onclick="history.go(-1)">
            </div>
    </body>
</html>