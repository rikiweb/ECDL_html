<?php
   include('session.php');
   $subscriptions = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['exit'])) {
   if(session_destroy()) {
	  echo "<script>window.close();</script>";
   }
   }
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
	<label id="welcometext"><font size="+3">Benvenuto <?php echo $login_session; ?></font></label>
	<br><label>Utente riconosciuto con successo.&emsp;</label>
	<form action="" method="post"><button type="submit" name="exit">Sign Out</button></form>
	<form action="" method="post"><button type="submit" name="refresh">Aggiorna Dati</button></form>
													<label name="testout"><?php echo $_SESSION['login_user']; ?></label>
													<label name="testout"><?php echo $_SESSION['login_pass']; ?></label>
	<div class="t">Voglio iscrivermi ai seguenti esami </div>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['refresh'])) {
			$user = mysqli_real_escape_string($db,$_SESSION['login_user']);
			$pass = mysqli_real_escape_string($db,$_SESSION['login_pass']); 
			$sql = "SELECT course FROM ecdl WHERE user = '$user' and password = '$pass'";
			//echo $sql;
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$course = $row['course'];
			echo $course;
			$subscriptions = explode('-',$course);
			echo $subscriptions[0];
			echo $subscriptions[1];
			echo $subscriptions[2];
			echo $subscriptions[3];
			echo $subscriptions[4];
			echo $subscriptions[5];
			echo $subscriptions[6];
		}
	?>
	
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