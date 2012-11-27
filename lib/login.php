<?php
	session_start();
	$suffix = "?";
	//remember to add anti sql-injection code!!!	
	//check if form has been submitted or someone has direct url'd here
	if(isset($_POST['click']) && $_POST['username'].length > 0)
	{
		$_SESSION['username'] = $_POST['username'];
        #header( 'Location: ../share/home.php' ) ;		
		//do database and user auth stuff here
	}
	else{$suffix = "?error=0";}
		header( "Location: ../share/home.php$suffix" ) ;
?>
