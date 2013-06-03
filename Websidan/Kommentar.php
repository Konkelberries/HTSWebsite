<?php
include '../Websidan/connect.php';

$comment = mysql_real_escape_string($_POST['comment']);
$query = mysql_real_escape_string($_POST['query']);
mysql_query("UPDATE  `simple_login`.`member` SET  `comments` =  '$comment' WHERE  `username` = '$query';");


?>
<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
     
    mysql_select_db("simple_login") or die(mysql_error());
?>

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
               <div id="banner-center" ><br><br><br><b><font size="6" color="red"><center>V&auml;lkommen till LeagueProfile!</b></center></font></div>
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
				<?php
    $query = $_POST['query']; 
     
    $min_length = 3;
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
         
        $query = mysql_real_escape_string($query);
         
        $raw_results = mysql_query("SELECT * FROM member
            WHERE (`username` LIKE '%".$query."%') OR (`fname` LIKE '%".$query."%')") or die(mysql_error());
             
        if(mysql_num_rows($raw_results) > 0){ 
             
            while($results = mysql_fetch_array($raw_results)){
             
                echo "<p>"."Username: ".$results['username']." "."<br />"."Complete name: ".$results['fname']. " " .$results['lname']. "<br />"."Address: " .$results['address']."<br />"."Gender: " .$results['gender']."<br />"."Comments: " .$results['comments']."</p>";
            }
        }
        else{ 
            echo "No results";
        }
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }

?>
	<form action='Kommentar.php' method='POST'>
    <input type="text" name="comment">
	<input type="hidden" name="query" value="<?php
	echo $query ?>"	>	
    <input type="submit" value="Skriv kommentar!"/>
</form>
								<b>
</form>
</div>
</div>
            <div id="right">
			<br />
			<b>H&auml;r kan du s&ouml;ka efter anv&auml;ndare p&aring; sidan genom anv&auml;ndarnamn eller f&ouml;rnamn:<b/>
			<form action="search.php" method="POST">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>
					
            </div>

			<div id="footer">
				<p> <b> &copy; 2013 Timothy Elvstrand. <b/>
				</p>
			</div>
        </div>
    </body>
</html>



