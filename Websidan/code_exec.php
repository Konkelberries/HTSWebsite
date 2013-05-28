<?php
session_start();
include('connection.php');
$fname= mysql_real_escape_string($_POST['fname']);
$lname= mysql_real_escape_string($_POST['lname']);
$mname= mysql_real_escape_string($_POST['mname']);
$address= mysql_real_escape_string($_POST['address']);
$contact= mysql_real_escape_string($_POST['contact']);
$pic= mysql_real_escape_string($_POST['pic']);
$username= mysql_real_escape_string($_POST['username']);

$password = md5($_POST['password']);
$felsk=("INSERT INTO member(fname, lname, gender, address, contact, picture, username, password)VALUES('$fname', '$lname', '$mname', '$address', '$contact', '$pic', '$username', '$password')");
mysql_query($felsk);

header("location: index.php?remarks=success");
mysql_close($con);
?>