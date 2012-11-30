<?php
	session_start();
	#include database class
	require("../classes/db_connect.php");#connection to database
	require("../lib/salt.php");
	$suffix = "?";
	//remember to add anti sql-injection code!!!	
	//check if form has been submitted or someone has direct url'd here
	if(isset($_POST['click']) && strlen($_POST['username']) > 0 && strlen($_POST['password']) > 0)
	{
		$db = new db();
		$dataset = $db->Request("SELECT username, password FROM psd_users WHERE username LIKE '" . $_POST['username'] . "'");
		$row = $dataset[0];
		if($row['password'] == encrypt($_POST['password']))
		{
			$_SESSION['username'] = $_POST['username'];
			echo "Success";
		}
		else{$suffix = "?error=0";}
        #header( 'Location: ../share/home.php' ) ;		
		//do database and user auth stuff here
	}
	else{$suffix = "?error=0";}
	header( "Location: ../share/home.php$suffix" ) ;
?>
