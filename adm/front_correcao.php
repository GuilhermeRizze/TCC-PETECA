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


        <title>Document</title>
    </head>
    <body><center>

        <div id= "cx1">	
			<img src ="../img/Logo TCC.png " width="100px" class="img_logo" align="right"/>
		</div>

        <div id= "cx3">
            <div class="cad_provas">
                <table border="0" cellspacing ="0" cellpadding="5">
                    <tr>
                        <th> Aluno </th>
                        <th> Prova </th>
                        <th> Vizualizar </th>
                    </tr>

                    <?php
                        // $sql = mysqli_query($conexao, "select * from correcao");
                        // $sql = mysqli_query($conexao, "select distinct p.titulo_prova, u.nome, u.cod_usuario from correcao c join usuario u on c.id_usuario = u.cod_usuario join provas p on c.id_prova = p.cod_provas");
                        $join = "select distinct c.id_prova, p.titulo_prova, u.nome, u.cod_usuario from correcao c join usuario u on c.id_usuario = u.cod_usuario join provas_dissertativas p on c.id_prova = p.cod_provas";
                        $sql = mysqli_query($conn, $join);
                        $rows = mysqli_num_rows($sql);
                        // echo $rows;

                        while($dados = mysqli_fetch_array($sql)){
                    ?>

                    <tr>
                        <td><?php echo $dados["nome"]; ?></td>
                        <td><?php echo $dados["titulo_prova"]; ?></td>
                        <td><?php echo "<a href='front_rg.php?id_aluno=".$dados['cod_usuario']."&id_prova=".$dados['id_prova']."'> Ver </a>"; ?></td>
                    </tr>
                    <?php } ?>
                </table>
                <input type="button" value="Voltar" onclick="history.go(-1)">
            </div>
    </body>
</html>