<?php
	session_start();
	//remember to add anti sql-injection code!!!	
	//check if form has been submitted or someone has direct url'd here
	if(isset($_POST['click']))
	{
		$_SESSION['username'] = $_POST['username'];
        #header( 'Location: ../share/home.php' ) ;		
		//do database and user auth stuff here
	}
	else
	{
		header( 'Location: ../share/home.php' ) ;
	}
?>
