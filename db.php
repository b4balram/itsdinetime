<?php
	$link = mysql_connect("localhost","root","");
	
	if ($link == false) {
		echo "Error: can't connect to database server";
		exit;
	}
	
	if (mysql_select_db("hotel", $link) == false) {
		echo "Error: can't connect to database";
		exit;
	}
?>
