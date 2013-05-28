<!-- Kom ihåg att logga in till databasen först! -->
<?php
        include '../Websidan/connect.php';
		session_start();
		
		$password = md5($_POST['myPassword']);
         
		 $query = "SELECT * FROM `member` WHERE `username`=\"$_POST[myUser]\" and `password`=\"$password\"";
		 
         $result = mysql_query($query);
		 $num_rows =  mysql_num_rows($result);
		 if ($num_rows == 1) {
		      $_SESSION['session_user']=$_POST["myUser"];
			  header('Location: Inloggad.php');
		 }
		 else {
			  header('Location: index.php');
		 }
		
?>