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
		$sql = "SELECT userid, username, password, u.CompanyId, admin, c.CompanyName, balance FROM psd_users u, psd_companies c WHERE username LIKE '" . $_POST['username'] . "' AND u.CompanyId = c.CompanyId";
		$dataset = $db->Request($sql);
		$row = $dataset[0];
		if($row['password'] == encrypt($_POST['password']))
		{
			#insert all permission variables here
			if($row['CompanyId'] != 1)
			{
				$_SESSION['companyName'] = $row['CompanyName'];
				$_SESSION['balance'] = $row['balance'];
			}
			else
			{
 				$_SESSION['companyName'] = "";
				$_SESSION['balance'] = "";
			}
			$_SESSION['companyid'] = $row['CompanyId'];
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
