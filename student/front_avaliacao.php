<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../css/estilo_global.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo2.css" rel="stylesheet" type="text/css"/>
        <style>
            #screen {
                color: red;
            }
        
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
    <body align="center">

        <div id= "cx1">	
            <img src ="../img/Logo TCC.png " width="100px" class="img_logo" align="right"/>
        </div>
            <div id= "cx3">
            <?php
                require_once '../conexao.php';
                require_once '../funcoes.php';


                auth_alun();
                $id_prova = $_SESSION['cod_prova'];  
                $id_usuario = $_SESSION['cod_usuario'];

                $sql2 = mysqli_query($conn, "select * from temporario where id_prova=$id_prova and id_usuario=$id_usuario;");
                $rows = mysqli_num_rows($sql2);
                $cont = 1;
                $cont2 = 1;


                $sqlCron = mysqli_query($conn, "select tempo from provas where cod_provas=$id_prova");
                $arrayCron = mysqli_fetch_array($sqlCron);
                
                // echo $arrayCron['tempo'] . " tempo <br>";
                $tempo_prova = $arrayCron['tempo']; 
                echo "Você possui <font color='red'>" . $tempo_prova . " </font>minutos para realizar a prova";

            ?>
                <script>

                        var tempo_prova = " <?php echo $tempo_prova; ?> ";
                        var tempo_finalizar = "00:00:05";

                        // alert(tempo_prova);

                    window.onload = function() {
                        pantalla = document.getElementById("screen");
                        start();
                    }
                    var isMarch = false; //variavel que controla start(true) e stop(false)
                    var acumularTime = 0; 
                    
                    function start () {
                        if (isMarch == false) { 
                            timeInicial = new Date();
                            control = setInterval(cronometro,10);
                            isMarch = true;
                        }
                    }

                    function reset () {
                        if (isMarch == true) {
                            clearInterval(control);
                            isMarch = false;
                        }
                        acumularTime = 0;
                        pantalla.innerHTML = "00:00:00";
                        resume();
                    }

                    function resume () {
                        if (isMarch == false) {
                            timeActu2 = new Date();
                            timeActu2 = timeActu2.getTime();
                            acumularResume = timeActu2-acumularTime;
                            
                            timeInicial.setTime(acumularResume);
                            control = setInterval(cronometro,10);
                            isMarch = true;
                        }     
                    }

                    function cronometro () { 
                        
                        timeActual = new Date();
                        acumularTime = timeActual - timeInicial; 
                        acumularTime2 = new Date();
                        acumularTime2.setTime(acumularTime); 
                        // cc = Math.round(acumularTime2.getMilliseconds()/10);
                        ss = acumularTime2.getSeconds();
                        mm = acumularTime2.getMinutes();
                        hh = acumularTime2.getHours()-21; //sapoha controla as hrs
                        // if (cc < 10) {cc = "0"+cc;}
                        if (ss < 10) {ss = "0"+ss;} 
                        if (mm < 10) {mm = "0"+mm;}
                        if (hh < 10) {hh = "0"+hh;}
                        // if (ss == 05) {alert("pause");}

                        pantalla.innerHTML = hh+":"+mm+":"+ss;
                        
                        
                        if ((pantalla.innerHTML.trim() == tempo_prova.trim()) || (pantalla.innerHTML.trim() == "00:01:00")) {
                            
                            if (pantalla.innerHTML.trim() == tempo_prova.trim()) {
                                alert("O seu tempo de prova acabou, estamos te redirecionando.");
                                document.getElementById('form').submit();
                            }
                            // pendencias a resolver ...
                        } 
                    }
                    

                </script>

    <div class="chronometer">
        <div id="screen">00:00:00</div>
        <!-- <div class="buttons"> -->
            <!-- <button class="emerald" onclick="start()">START &#9658;</button>
            <button class="emerald" onclick="stop()">STOP &#8718;</button> -->
            <!-- <button class="emerald" onclick="resume()" >RESUME &#8634;</button>
            <button class="emerald" onclick="reset()">RESET &#8635;</button> -->
        <!-- </div> -->
    </div><br/>
        
        <form action="back_avaliacao.php" method="POST" autocomplete="off" id="form">

            <div class="cad_provas">
                <table border="1" cellspacing ="0" cellpadding="5">
                    <tr>
                        <th> Número </th>
                        <th> Questão </th>
                        <th> Resposta </th>
            
                    </tr>        
                    <?php
                        $sql = mysqli_query($conn, "select * from temporario where id_prova=$id_prova and id_usuario=$id_usuario");
                        while($dados = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $dados["numero"]; ?></td>
                        <td><?php echo $dados["questao"]; ?></td>
                        <td bgcolor="white"><input type="text" name="resposta<?php echo $cont++ ?>"></td>


                        <input type="hidden" name="numero_questao<?php echo $cont2++ ?>" value="<?php echo $dados["numero"]; ?>">
                        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                        <input type="hidden" name="rows" value="<?php echo $rows; ?>">
                    </tr>
                    <?php } ?>
                </table><br/>
                <input type="submit" value="Concluir" id="concluir">
                <input type="button" value="Voltar" onclick="document.location='front_provas.php'">
            </div>
        </form>
    </body>
</html>