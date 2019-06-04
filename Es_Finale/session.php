<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select user from ecdl where user = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['user'];
   
   if(!isset($_SESSION['login_user'])){
      //header("location:login.php");
	  echo "<script language='javascript'>alert('Non ti sei ancora loggato, esegui il login e riprova!')</script>";
	  echo "<script language='javascript'>window.close()</script>";
      die();
   }
?>