<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <title>Login de Usuários</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <link href="css/estilo_global.css" rel="stylesheet" type="text/css"/>

        <style>   
            body {
                background-image: url(img/fundo.jpg);
                background-size: 100%;
                overflow: hidden;
            }    
        </style>
    </head>
    <body align ="center">

        <img src="img/Logo TCC.png" width="200" class="img_index">
        <div class="box_login">
           
            <form action="back_login.php" method="POST">
                    
                <table>
                    <tr>
                        <td colspan="2"><input type="text" name="login" placeholder="Login" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password"  name="senha" placeholder="Senha" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Entrar"></td>
                        <td><input type="button" value="Voltar" onclick="document.location='index.php'"></td>
                    </tr>    
                    <tr>
                        <td colspan="2" style="color: white;"><br/><br/>
                            <?php
                                if(isset($_SESSION['Erro'])){

                                    echo $_SESSION['Erro'] = '<font color="yellow">⚠</font> Login e/ou senha incorretos.';
                                    unset($_SESSION['Erro']);

                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>