<?php
	session_start();
	$suffix = "?";
	//remember to add anti sql-injection code!!!	
	//check if form has been submitted or someone has direct url'd here
	if(isset($_POST['click']) && strlen($_POST['username']) > 0 && strlen($_POST['password']) > 0)
	{
		$_SESSION['username'] = $_POST['username'];
        #header( 'Location: ../share/home.php' ) ;		
		//do database and user auth stuff here
		echo strlen($_SESSION['username']);
	}
	else{$suffix = "?error=0";}
		header( "Location: ../share/home.php$suffix" ) ;
?>
