<?php
	$hostname="localhost";
	$user="root";
	$pass="";

	$config=mysql_connect($hostname,$user,$pass) or die(mysql_error());

	mysql_select_db('delio');
?>