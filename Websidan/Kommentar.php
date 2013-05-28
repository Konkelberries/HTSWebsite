<?php
include '../Websidan/connect.php';

$comment = mysql_real_escape_string($_POST['comment']);
$query = mysql_real_escape_string($_GET['query']);
mysql_query("INSERT INTO member(comments) VALUES('$comment') where username($query)");


?>
