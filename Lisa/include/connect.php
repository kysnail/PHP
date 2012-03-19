<?php
$connect = mysql_connect('localhost', 'kys_lisa', 'angel');

if(!$connect) {
	die('Could not connect'.mysql_error());
}

$db_selected = mysql_select_db("kys_lisa");

if(!$db_selected) {
	die('Could not select database'.mysql_error());
}
?>
