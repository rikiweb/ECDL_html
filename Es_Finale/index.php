<?php
   include("config.php");
   session_start();
   $error = "";
   $error1 = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user FROM ecdl WHERE user = '$myusername' and password = '$mypassword'";
      echo $sql;
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register($myusername);
         $_SESSION['login_user'] = $myusername;
         
         //header("location: page2.php");
		 //echo "<script>openWin()</script>";
		 //echo "<script type='text/javascript'>openWin();</script>";
		 /* esempio */
		//echo '<a href="#" onclick="window.open(\'page2.php\')">Dettagli</a>';
		//echo "<script language=javascript'>document.getElementById('logdiv').style.display=”block”;</script>";
		} else {
         $error = "Your Login Name or Password is invalid. Register please.";
      }
	  if($count == 0) {
		  $error1 = "Compile all box for registration success.";
		} else {
         
      }
   }
?>

<!DOCTYPE html>
<html>
<head>

	<title> ECDL </title>
	<link rel="stylesheet" type="text/css" href="Stile/style.css">

	<script language="javascript">
		var myWindow;
	
			function openWin(){
				myWindow = window.open("page2.php", "", "width=620, height=560");
				moveWin();
			}
		
			function moveWin() {
				myWindow.moveTo(500, 250);
				myWindow.focus();
			}
		
			function mostra(id) {
			document.getElementById(id).style.display=”block”;
			}

			function nascondi(id) {
			document.getElementById(id).style.display=”none”;
			}

	</script>
	
</head>

<body>
	<div class="login" id="logdiv">
	<form action = "" method = "post">
		LOGIN <br>
		<label>User </label><input type="text" name ="username"> <br>
		<label>Password </label><input type="password" name ="password"> <br>
		<button type="submit" value="Login"> Login </button>
	</form>
	<label style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></label>
	</div>
	
	<div class="ecdlLabel">
		<font color="blue"> ECDL </font>
	</div>
	
	<div class="signin" id="signdiv">
	<form action = "" method = "post">
		SIGNIN <br>
		User <input type="text" id ="username1" > <br>
		Password <input type="password" id ="password1"> <br>
		Repeat-Password <input type="password" id ="rePassword1"> <br>
		<button id="sign" onclick="signin()"> Signin </button>
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
	
	<button id="newExam" onclick="openWin()"> Registrati per un esame </button>
	
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