﻿<!-- Kom ihåg att logga in till databasen först! -->
<?php
<<<<<<< HEAD
         $query = "SELECT name FROM user WHERE name='$_POST[myUser]' AND password='$_POST[myPassword]'";
         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
         if (mysql_numrows($result) == 1) {
		      session_start();
		      $_SESSION['session_user']=$_POST[myUser];
			  header('Location: index.php');
=======
        include '../Demo/connect.php';
		
         $query = "SELECT name FROM user WHERE name='$_POST[myUser]' AND password='$_POST[myPassword]'";
         echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();
		 session_unset();
         
		 if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST[myUser];
			  header('Location: index.html');
>>>>>>> hts-upstream/master
		 }
		 else {
			  header('Location: login.html');
		 }
		
?>