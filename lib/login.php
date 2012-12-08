<?php
#insert permissions into db as Boolean, and add session variables for permissions to reduce no. of Db, calls!!
	session_start();
	#permission variables are set when a user lands on the page, to 0 and only changed if login is successful!
	#include database class
	require("../classes/db_connect.php");#connection to database
	require("../lib/salt.php");
	$suffix = "?";
	//remember to add anti sql-injection code!!!	
	//check if form has been submitted or someone has direct url'd here
	if(isset($_POST['click']) && strlen($_POST['username']) > 0 && strlen($_POST['password']) > 0)
	{
		$db = new db();
		$dataset = $db->Request("SELECT userid, username, password, CompanyId, admin FROM psd_users WHERE username LIKE '" . $_POST['username'] . "'");
		$row = $dataset[0];
#		echo $row['password'] . ":" . encrypt($_POST['password']);
		if($row['password'] == encrypt($_POST['password']))
		{
			#insert all permission variables here
			$_SESSION['CompanyId'] = $row['CompanyId'];
			$_SESSION['userid'] = $row['userid'];
			$_SESSION['admin'] = $row['admin'];
			$_SESSION['username'] = $_POST['username'];
			echo $row['username'];
		}
		else{$suffix = "?error=0";}
        #header( 'Location: ../share/home.php' ) ;		
		//do database and user auth stuff here
	}
	else{$suffix = "?error=0";}
	header( "Location: ../share/home.php$suffix" ) ;
?>
