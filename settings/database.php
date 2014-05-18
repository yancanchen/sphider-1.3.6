<?php
//Data Source=tcp:xb8p46shxq.database.windows.net,1433;Initial Catalog=;User Id=;Password=;
	$database="sphider";
	$mysql_user = "bestread@xb8p46shxq";
	$mysql_password = "Joymm1986"; 
	$mysql_host = "tcp:xb8p46shxq.database.windows.net,1433";
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

