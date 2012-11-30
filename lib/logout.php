<?php
	session_start();

	if(isset($_POST['click']))
	{
		session_destroy();#destroys the session, effectively logging the user out, possibly add stuff here
	}

	header( 'Location: ../share/home.php' ) ;
?>
