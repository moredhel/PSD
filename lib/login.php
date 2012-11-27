<?php
	//remember to add anti sql-injection code!!!	
	//check if form has been submitted or someone has direct url'd here
	if(isset($_POST['click']))
	{
		echo "Welcome " , $_POST['username'];
	}
	else
	{
		header( 'Location: ../share/home.php' ) ;
	}
?>
