<?php
	if(isset($_SESSION['companyName']))
	{
		echo "<b>" . $_SESSION['companyName'] . "</b>";
	}
	else
	{
		echo "Welcome Guest";
	}
?>
