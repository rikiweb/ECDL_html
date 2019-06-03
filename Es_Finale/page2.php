<?php
   include('session.php');
?>

<html>
<head>
	<title> Registrati </title>
	
	<link rel="stylesheet" type="text/css" href="Stile/style.css">
	
	<script>
		
		
		function proceed(){
			close();
		}
	
	</script>
</head>

<body class="b">
	<h1>Benvenuto <?php echo $login_session; ?></h1>
	<label>Utente riconosciuto con successo.</label><label><a href = "logout.php">Sign Out</a></label>
	<div class="t">Voglio iscrivermi ai seguenti esami </div>
	<div class="exams">
		<input type="checkbox" name="e1" value="e1"> Base<br>
		<input type="checkbox" name="e2" value="e2"> Gestione Files<br>
		<input type="checkbox" name="e3" value="e3"> Word<br>
		<input type="checkbox" name="e4" value="e4"> Excel<br>
		<input type="checkbox" name="e5" value="e5"> Power Point<br>
		<input type="checkbox" name="e6" value="e6"> Access<br>
		<input type="checkbox" name="e7" value="e7"> Internet<br>
	</div>
	
	<div class="infoCont">
		<label id="in">
			NB: il costo di ogni singolo esame e' pari a 16.70$. <br>
			Il costo della Skill Card e' pari a 56.27$
		</label>
	</div>
	
	<br>
	<br>
	
	
	<input type="text" id="totExam" readonly value="0.00"><label id="i2"> TOTALE ESAMI </label> <br>
	<label id="i3">
		acquista la Skill Card oppure specifica il numero della Skill in tuo possesso <br>
	</label>
	<div class="buySkill"> 
		<br>
		<label class="i4"> NOME </label> <label id="i5"> COGNOME </label>   <br>
		<input id="name" class="info" type="text"> 
		<input id="surmane" class="info" type="text"> <br>
		<label class="i4">CODICE FISCALE</label> <label id="i6">   DATA DI NASCITA </label> <br>
		<input id="codFisc" class="info" type="text"> 
		<input id="date" class="info" type="text"> <br>
		<div class="i7"> COSTO SKILL CARD <input type="text" id="skillPrice" value="0.00" readonly> </div>
		<br>
	</div>
	
	<div class="setSkill">
		<br> <br>
		NUMERO SKILL CARD <br>
		<input id="idSkill" type="text">
		<br>
	</div>
	
	<br>
	<div class="d1">
		<input id="totPrice" type="text" readonly> TOTALE COMPLESSIVO
	</div>
	<br>
	<br>
	
	<button id="proceed" onclick="proceed()"> PROCEDI </button>	

	
</body>
<html>