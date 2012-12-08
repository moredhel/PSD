<?php
	if(isset($_SESSION['companyName']))
	{
		echo "<b>" . $_SESSION['companyName'] . "</b>";
	}
	else
	{
		echo "You aren't Logged in :(";
	}
?>
