	<?php
	require('funcoes.php');
	//seguranca();
	$db = conectar();

	$cont = 1;
?>		
<html>
	<head> 
		<title> Portal de Provas - Etec Astor de Mattos Carvalho </title> 
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF -8">
	</head>

	<body bgcolor="#80FFF2" onload="Up();"/>
	<table width="100%" height="100px" border="0"  style="min-width:100px;">				
					  <td>	
					  <center><img src ="Logo TCC.png "/></center> 
					  </td>	
		</table>
		
		<table border="0"  width="1410">
			<tr height=650>
				<td background="nova.PNG" width="300" valign="top" >
				</td>
				<td bgcolor="#FFFFFF" width="700" valign="top">
            <?php

		$cod_prova = $_REQUEST['cod_prova'];
		$tempoprova = $_REQUEST['tpp'];
        $nquestao = $_REQUEST['nquestao'];	
				
		mysqli_select_db($db,'portal_de_provas');
				  $sql =  $sql = "select *
                                          from questoes q inner join provas p on q.cod_prova= p.cod_provas
						          inner join materia m on p.materia = m.materia
    				          where p.cod_provas = $cod_prova limit $nquestao,1";
                             
				  $rs_questao = mysqli_query($db, $sql);
				  $questao = mysqli_fetch_assoc($rs_questao);
				  //$con = mysql_connect("localhost","root","");
           
		?>

		<form name="cron"> 

			<?php echo "Você possui <font color='red'>" . $tempoprova . " </font>minutos para realizar a prova, sendo necessário responder <font color='red'> TODAS </font> as questões";?>
			<script>

				var tempo_prova = " <?php echo $tempoprova; ?> ";
				// alert("a");
				// var tempo_finalizar = "00:00:05";

				// alert(tempo_prova);

				window.onload = function() {
				pantalla = document.getElementById("screen");
				start();
				}
				var isMarch = false; 
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

					// hh = hh;
					// hh = "0"+hh;
					pantalla.innerHTML = hh+":"+mm+":"+ss;


				
						
					if (pantalla.innerHTML.trim() == tempo_prova.trim()) {
						alert("O seu tempo de prova acabou, estamos te redirecionando.");
						document.getElementById('cron').submit();
						header(document.location='login_aluno.php');
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
			</div>

		</form>



		
<fieldset>	
<h3>
           <?php
                if (mysqli_num_rows($rs_questao)==0){
                      echo "Prova Finalizada!";
           ?>
                      <br><br><input type="button" value="Voltar" onclick="document.location='login_aluno.php'">
           <?php
                    }else{ 
           ?>
		<form action="corrige_prova.php" method="post" id="cron">
		
		<font size="4" face="Arial">
                <input type="hidden" name="cod_prova" value="<?php echo $questao['cod_prova']?>">
                
                <input type="hidden" name="alt_correta" value="<?php echo $questao['alt_correta']?>">
				<input type="hidden" name="tpp" value="<?php echo $tempoprova?>">


			<?php
				
                $sql = mysqli_query($db, "select * from questoes where cod_prova= '$cod_prova' order by rand() LIMIT 10");
			?>
			
			<?php
				while($questao = mysqli_fetch_array($sql)){
            ?>
			<p><?php echo $questao['questao']?></p></h3>

				<input type="hidden" name="cod_questao<?php echo $cont?>" value="<?php echo $questao['cod_questao']?>">
                <input type="hidden" name="nquestao<?php echo $cont?>" value="<?php echo $questao['questao']?>"> 
		<input type="radio" name="alt<?php echo $cont?>" value="a"><?php echo $questao['alt_A']?><br><br>
		<input type="radio" name="alt<?php echo $cont?>" value="b"><?php echo $questao['alt_B']?><br><br>
		<input type="radio" name="alt<?php echo $cont?>" value="c"><?php echo $questao['alt_C']?><br><br>
		<input type="radio" name="alt<?php echo $cont++?>" value="d"><?php echo $questao['alt_D']?><br><br>
		
		<?php  
         }
           ?>

		<center><input type="submit" value="ENVIAR"></center>
		</form>
            </td>
				<td background="nova.PNG" width="300" valign="top">

				</td>
			</tr>
			
		</table>
</body>

</html>	

		<?php } ?>