<?php
include '../Websidan/connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="stylesheet" title="magnum" type="text/css" href="../CSS/Elvstrand.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>LeagueProfile!</title>	
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner-left" >   </div>
               <div id="banner-center" ><br><br><br><b><font size="6" color="red"><center>Välkommen till LeagueProfile!</b></center></font></div>
               <div id="banner-right" >  </div>
            </div>
            <div id="left">
					<div class="dokument-item">
						<br />
					</div>
            </div>
            <div id="center">
                <div id="info">
				<h1 class="dokument-item-header"> LeagueProfile</h1>
				<p class="info"></p>
				
								<b><form action="login.php" method="post">
Användarnamn: <input type="text" name="myUser"> <br />
Lösenord: <input type="text" name="myPassword"> <br />
<input type="submit">
</b>

<?php
 echo "hej";
         $query = "SELECT * FROM user";
         echo "hej";
		 
         $result = mysql_query($query);
         if ($result === false)
		 {
		 echo 'hej2';
	         echo '<strong> Error when you asked a question to your databas.2 </strong>';
			 echo "hej2";
        }
         $num=mysql_numrows($result);
         if($num==0) {
             echo '<strong>Your question is empty</strong>';
         }
         else {
             echo "<ul>";
             for ($i=0;$i<$num;$i++) {
                 $temp = mysql_fetch_array($result);
	             echo "<li>" . $temp["namn"] . "</li>";
             }
             echo "</ul>";
        }
?>
<?php
   mysql_close($con);
?>

</form>
</div>
</div>
            <div id="right">
					
            </div>

			<div id="footer">
				<p> <b> &copy; 2013 Timothy Elvstrand. <b/>
				</p>
			</div>
        </div>
    </body>
</html>


