<?php 
    require_once 'conexao1.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>

        <title>Document</title>
		<link rel="stylesheet" href="assets/css/main.css" />

    </head>
    <body><center>
        <div class="cad_provas">
        <table border="1" cellspacing ="0" cellpadding="5">
            <tr>
                <th> Título </th>
                <th> Matéria </th>
                <th> Tempo </th>
                <th> Link </th>

            </tr>        
            <?php
                $sql = mysqli_query($conn, "select * from provas where tipo = 'o'");
                
                while($dados = mysqli_fetch_array($sql)){
                    $_SESSION['prova'] = $dados['cod_provas'];  
            ?>
            <tr>
                <td><?php echo $dados["titulo_prova"]; ?></td>
                <td><?php echo $dados["materia"]; ?></td>
                <td><?php echo $dados["tempo"]; ?></td>
                <td><?php echo "<a href='gravar_questao.php?cod_provas=".$dados['cod_provas']."'> Inserir Questões </a>"; ?></td>                               
            </tr>
            <?php } ?>
        </table><br/>

        <a href="inicio_provas.php"><input type="button"value="Voltar"size="20" style="background-color: #CCCCCC"></a>
        </div>
    </body>
</html>