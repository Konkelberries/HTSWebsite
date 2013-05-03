<!-- Kom ihåg att logga in till databasen först! -->
<?php
        include '../Websidan/connect.php';
		session_start();
         $query = "SELECT * FROM `member` WHERE `username`=\"$_POST[myUser]\" and `password`=\"$_POST[myPassword]\"";;
         $result = mysql_query($query);
		 $num_rows =  mysql_num_rows($result);
		 if ($num_rows == 1) {
		      $_SESSION['session_user']=$_POST["myUser"];
			  header('Location: Inloggad.php');
		 }
		 else {
		       echo "hej";
			  header('Location: index.php');
		 }
		
?>