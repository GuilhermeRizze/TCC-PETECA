<?php
    require_once "../conexao.php";

    $curso = $_GET['cod_curso'];
    $sql="SELECT cod_materia,materia FROM materia WHERE cod_curso = '$curso'";
    $result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../css/estilo2.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>
        <title>Prova Dissertativa</title>
    </head>
    <body>

        <div id= "cx1">	
			<img src ="../img/Logo TCC.png " width="100px" class="img_logo" align="right"/>
		</div>

        <div id= "cx3">

            <div class="cad_provas">
                <form action="back_cad_provas.php" method="POST">
                    <table border="0" cellspacing="0">
                        <tr>
                            <td colspan="2">Digite o título da prova: <input type="text" name="titulo" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">Escolha a matéria da prova: 
                                <select name="materia">
                                    <option value="" selected disabled> Selecione uma matéria </option>

                                    <?php while($rows=mysqli_fetch_array($result)){ ?>               
                                        <option value="<?php echo $rows['materia']; ?>"><?php echo $rows['materia']; ?></option> 
                                    <?php } ?>
                                </select>
                            
                            </td>
                        </tr>
                        <tr>
                            
                            <td colspan="2">Digite o tempo da prova (HH:MM): <input type="time" name="time" value="00:40" required></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"> Digite a quantidade de questões para os alunos responderem: <input type="number" name="quests" required>
                            </td>
                        </tr>
                    </table>
                    <center>
                        <input type="submit" value="Cadastrar">
                        <input type="button" value="Todas as provas" onclick="document.location='front_table_provas.php'">
                        <input type="button" value="Voltar" onclick="history.go(-1)">
                    </center>
                </form>
            </div>
        </div>
        <div id= "cx5"></div>
    </body>
</html>