<?php
   include("config.php");
   session_start();
   $error = "";
   $error1 = "";
   $check = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
		// username and password sent from form
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
		  
		$sql = "SELECT user FROM ecdl WHERE user = '$myusername' and password = '$mypassword'";
		echo $sql;
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$nascondi = "";
		$link = "<script language='javascript'>document.getElementById('logdiv').style.display='none';</script>";
		  
		  
		//$active = $row['active'];
		 
		$count = mysqli_num_rows($result);
		  
		// If result matched $myusername and $mypassword, table row must be 1 row
			
		if($count == 1) {
			//session_register($myusername);
			$_SESSION['login_user'] = $myusername;
			$_SESSION['login_pass'] = $mypassword;
			echo $_SESSION['login_user'];
			echo $_SESSION['login_pass'];
			echo $link;
			echo "<script language='javascript'>alert('Login avvenuto!')</script>";
			echo "<script language='javascript'>document.getElementById('loginform').style.display = 'none';</script>";
			echo "<script language='javascript'>document.getElementById('registerform').style.display = 'none';</script>";
			
		} else {
			$error = "Login non valido, controlla nome utente e password o registrati.";
		}
	}
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin'])) {
		$regusername = mysqli_real_escape_string($db,$_POST['username1']);
		$regpassword = mysqli_real_escape_string($db,$_POST['password1']);
		$regcheck = mysqli_real_escape_string($db,$_POST['rePassword1']);
		  
		if($regpassword == $regcheck){
			$sql = "INSERT INTO ecdl (user, password, course) VALUES ('$regusername','$regpassword','0-0-0-0-0-0-0')";
			echo $sql;
			
			if(mysqli_query($db,$sql)) {
			$nascondi = "";
			$link = "<script language='javascript'>document.getElementById('signdiv').style.display='none'</script>";
			//$active = $row['active'];
			//echo $link;
			echo "<script language='javascript'>alert('Registrato correttamente! Ora puoi loggarti')</script>";
			} else {
			$error1 = "Sembra esserci un problema nell'aggiungere l'utente, controllala connessione con il database.";
			}
		} else {
			$error1 = "Controlla i campi, le password non sembrano corrispondere.";
		}
	}
	
?>

<html>
<head>

	<title> ECDL </title>
	<link rel="stylesheet" type="text/css" href="Stile/style.css">

	<script language="javascript">
		var myWindow;
	
			function openWin(){
				myWindow = window.open("page2.php", "width=620,height=560");
				moveWin();
			}
		
			function moveWin() {
				myWindow.moveTo(500, 250);
				myWindow.focus();
			}
		
			function mostra() {
			document.getElementById("logdiv").style.display=”block”;
			}

			function nascondi() {
			document.getElementById("logdiv").style.display=”none”;
			}

	</script>
	
</head>

<body>
	<div class="login" name="logdiv">
	<form id ="loginform" action = "" method = "post">
		LOGIN <br>
		<label>User </label><input type="text" name ="username"> <br>
		<label>Password </label><input type="password" name ="password"> <br>
		<button type="submit" name="login" value="Login"> Login </button>
	</form>
	<label style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></label>
	</div>
	
	<div class="ecdlLabel">
		<font color="blue"> ECDL </font>
	</div>
	
	<div class="signin" name="signdiv">
	<form id="registerform" action = "" method = "post">
		SIGNIN <br>
		User <input type="text" name ="username1" > <br>
		Password <input type="password" name ="password1"> <br>
		Repeat-Password <input type="password" name ="rePassword1"> <br>
		<button type="submit" name="signin" value="Signin"> Signin </button>
	</form>
	<label style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error1; ?></label>
	</div>	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="page2.php" method="post" target="_blank">
	<button type="submit" name="openexams" id="newExam"> Registrati per un esame </button>
	</form>
	<br>
	<br>
	<br>
	<br>
	
	<div class="contenitore">
		<p>
			<span style="font-size:25">Lorem ipsum dolor sit amet </span> <br>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Egestas tellus rutrum tellus pellentesque eu tincidunt. 
			Mi tempus imperdiet nulla malesuada pellentesque elit. Arcu bibendum at varius vel pharetra. Dolor sit amet consectetur adipiscing elit. 
			Pellentesque elit ullamcorper dignissim cras tincidunt. Nibh cras pulvinar mattis nunc sed blandit libero. Tortor at risus viverra adipiscing at. 
			Cras adipiscing enim eu turpis egestas. Congue mauris rhoncus aenean vel elit. Consectetur adipiscing elit 
			pellentesque habitant morbi tristique senectus. Hendrerit gravida rutrum quisque non tellus.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Egestas tellus rutrum tellus pellentesque eu tincidunt. 
			Mi tempus imperdiet nulla malesuada pellentesque elit. Arcu bibendum at varius vel pharetra. Dolor sit amet consectetur adipiscing elit. 
			Pellentesque elit ullamcorper dignissim cras tincidunt. Nibh cras pulvinar mattis nunc sed blandit libero. Tortor at risus viverra adipiscing at. 
			Cras adipiscing enim eu turpis egestas. Congue mauris rhoncus aenean vel elit. Consectetur adipiscing elit 
			pellentesque habitant morbi tristique senectus. Hendrerit gravida rutrum quisque non tellus.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Egestas tellus rutrum tellus pellentesque eu tincidunt. 
			Mi tempus imperdiet nulla malesuada pellentesque elit. Arcu bibendum at varius vel pharetra. Dolor sit amet consectetur adipiscing elit. 
			Pellentesque elit ullamcorper dignissim cras tincidunt. Nibh cras pulvinar mattis nunc sed blandit libero. Tortor at risus viverra adipiscing at. 
			Cras adipiscing enim eu turpis egestas. Congue mauris rhoncus aenean vel elit. Consectetur adipiscing elit 
			pellentesque habitant morbi tristique senectus. Hendrerit gravida rutrum quisque non tellus.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Egestas tellus rutrum tellus pellentesque eu tincidunt. 
			Mi tempus imperdiet nulla malesuada pellentesque elit. Arcu bibendum at varius vel pharetra. Dolor sit amet consectetur adipiscing elit. 
			Pellentesque elit ullamcorper dignissim cras tincidunt. Nibh cras pulvinar mattis nunc sed blandit libero. Tortor at risus viverra adipiscing at. 
			Cras adipiscing enim eu turpis egestas. Congue mauris rhoncus aenean vel elit. Consectetur adipiscing elit 
			pellentesque habitant morbi tristique senectus. Hendrerit gravida rutrum quisque non tellus.
		</p>
		
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Egestas tellus rutrum tellus pellentesque eu tincidunt. 
			Mi tempus imperdiet nulla malesuada pellentesque elit. Arcu bibendum at varius vel pharetra. Dolor sit amet consectetur adipiscing elit. 
			Pellentesque elit ullamcorper dignissim cras tincidunt. Nibh cras pulvinar mattis nunc sed blandit libero. Tortor at risus viverra adipiscing at. 
			Cras adipiscing enim eu turpis egestas. Congue mauris rhoncus aenean vel elit. Consectetur adipiscing elit 
			pellentesque habitant morbi tristique senectus. Hendrerit gravida rutrum quisque non tellus.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Egestas tellus rutrum tellus pellentesque eu tincidunt. 
			Mi tempus imperdiet nulla malesuada pellentesque elit. Arcu bibendum at varius vel pharetra. Dolor sit amet consectetur adipiscing elit. 
			Pellentesque elit ullamcorper dignissim cras tincidunt. Nibh cras pulvinar mattis nunc sed blandit libero. Tortor at risus viverra adipiscing at. 
			Cras adipiscing enim eu turpis egestas. Congue mauris rhoncus aenean vel elit. Consectetur adipiscing elit 
			pellentesque habitant morbi tristique senectus. Hendrerit gravida rutrum quisque non tellus.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Egestas tellus rutrum tellus pellentesque eu tincidunt. 
			Mi tempus imperdiet nulla malesuada pellentesque elit. Arcu bibendum at varius vel pharetra. Dolor sit amet consectetur adipiscing elit. 
			Pellentesque elit ullamcorper dignissim cras tincidunt. Nibh cras pulvinar mattis nunc sed blandit libero. Tortor at risus viverra adipiscing at. 
			Cras adipiscing enim eu turpis egestas. Congue mauris rhoncus aenean vel elit. Consectetur adipiscing elit 
			pellentesque habitant morbi tristique senectus. Hendrerit gravida rutrum quisque non tellus.
		</p>
	
	
	</div>
	
	

</body>
</html>