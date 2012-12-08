<?php
	session_start();
	#This is the php script that runs when a user joins a selected Company!
	require("../classes/db_connect.php");
	echo "You have selected the " . $_POST['companyId'];
	
	
?>
