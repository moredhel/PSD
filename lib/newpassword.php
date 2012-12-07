<?php
	#this is the script that allows the user to reset their password
	session_start();
	if(!isset($_SESSION['username']))
	{
		header("Location: ../share/home.php");
	}
	#include databse class, encrypt class
	require("../classes/db_connect.php");
	require("../lib/salt.php");
	#first check if the password is correct for the username
	$db = new db();
	$dataset = $db->Request("SELECT password FROM psd_users WHERE userid = ". $_SESSION['userid']); 
	$row = $dataset[0];
	echo "1";
	if(encrypt($_POST['oldpassword']) == $row['password'] && strlen($_POST['password'] > 0 ))
	{
		#code to check that the new passwords match
		if($_POST['password'] == $_POST['confirm'])
		{
			echo "game";
		}
	}
?>
