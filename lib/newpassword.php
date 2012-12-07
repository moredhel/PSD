<?php
	#this is the script that allows the user to reset their password
	session_start();
	if(!isset($_SESSION['username']))
	{
		header("Location: ../share/home.php");
	}
	#include databse class, encrypt class
	require("../classes/db_connect.php");
	require("../classes/salt.php");
?>
