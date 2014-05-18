<?php
//Database=bestread;Data Source=ap-cdbr-azure-east-c.cloudapp.net;User Id=b364405784bac9;Password=7c6a848a
	$database="bestread";
	$mysql_user = "b364405784bac9";
	$mysql_password = "7c6a848a"; 
	$mysql_host = "ap-cdbr-azure-east-c.cloudapp.net";
	$mysql_table_prefix = "";



	$success = mysql_pconnect ($mysql_host, $mysql_user, $mysql_password);
	if (!$success)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db ($database);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>

