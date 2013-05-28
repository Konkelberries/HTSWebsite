<?php
include '../Websidan/connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
	<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["mname"].value;
var d=document.forms["reg"]["address"].value;
var e=document.forms["reg"]["contact"].value;
var f=document.forms["reg"]["pic"].value;
var g=document.forms["reg"]["pic"].value;
var h=document.forms["reg"]["pic"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("picture must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("username must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("password must be filled out");
  return false;
  }
}
</script>
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
				
								<b>

<form action="login.php" method="post">
Användarnamn: <input type="text" name="myUser"> <br />
Lösenord: <input type="password" name="myPassword"> <br />
<input type="submit" Name = "Submit1" VALUE = "Logga in"/>
</b>
</form>

<form action="Registrering.php" method="post">
<input type="submit" Name = "Submit1" VALUE = "Registrera"/>
</form>


</form>
</div>
</div>
            <div id="right">
			<br />
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


