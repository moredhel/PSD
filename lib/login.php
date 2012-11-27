<?php
	session_start();
	#include database class
	require("../classes/db_connect.php");
	$suffix = "?";
	//remember to add anti sql-injection code!!!	
	//check if form has been submitted or someone has direct url'd here
	$db = new $db_connect();
	echo $db.Connect();
	if(isset($_POST['click']) && strlen($_POST['username']) > 0 && strlen($_POST['password']) > 0)
	{
		$_SESSION['username'] = $_POST['username'];
        #header( 'Location: ../share/home.php' ) ;		
		//do database and user auth stuff here
	}
	else{$suffix = "?error=0";}
	#	header( "Location: ../share/home.php$suffix" ) ;
?>
