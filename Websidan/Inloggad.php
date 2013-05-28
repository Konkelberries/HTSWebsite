<?php
include '../Websidan/LoggedOnOrNot.php';
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

<a href="http://www.lolking.net/search?name=timoothy"> <img src='http://127.0.0.1/HTS/Websidan/Timothysprofil.png'></a>
				
<form action="loggaut.php" method="post">
<input type="submit" Name = "Submit1" VALUE = "Logga ut">
</form>

</form>
</div>
</div>
            <div id="right">
			<b>Här kan du söka efter användare på sidan genom användarnamn eller förnamn:<b/>
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