<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo_adm.css" rel="stylesheet" type="text/css"/>
        <title>Document</title>

    <style>   
        body {
            background-image: url(../img/fundo.jpg);
            background-size: 100%;
            overflow: hidden;           
        }    
    </style>

    </head>
    <body>

        <div class="box_cadastro_aluno">
            <form action="back_cad_alunos.php" method="POST" autocomplete="off">
                    
                    <table>
                        <tr>
                            <td colspan="2"><input type="text" name="nome" placeholder="Nome" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="login" placeholder="RM" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="password"  name="senha" placeholder="Senha" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="password"  name="senha2" placeholder="Confirmar senha" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <select name="tipo" required>
                                    <option value="a">Aluno</option>
                                    <option value="p">Professor</option>
                                </select>
                            </td>
                        </tr>

                        <tr align="center">
                            <td><input type="submit" value="Cadastrar"></td>
                            <td><input type="button" value="Voltar" onclick="document.location='home_page.php'"></td>
                        </tr>
    
                    </table>  
            </form>

        </div>

    </body>
</html>