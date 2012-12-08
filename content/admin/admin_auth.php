<?php
	#this file is to be included in all admin related task files, it will determine whether the user is admin or not
	#this could easily be accomplished by an if statement in the top of each admin file, but this allows easy modification!
	if(isset($_SESSION['admin']))
	{
		if($_SESSION['admin'] == 0)
		{
			header("Location: ../share/home.php?error=3");
		}
	}
?>
