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
				
								<b>

<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2">
		<div align="center">
		
	    </div></td>
  </tr>
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
  </tr>
  <tr>
    <td><div align="right">Gender:</div></td>
    <td><input type="text" name="mname" /></td>
  </tr>
  <tr>
    <td><div align="right">Address:</div></td>
    <td><input type="text" name="address" /></td>
  </tr>
  <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" /></td>
  </tr>
  <tr>
    <td><div align="right">Picture:</div></td>
    <td><input type="text" name="pic" /></td>
  </tr>
 <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
</table>
</form>

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


