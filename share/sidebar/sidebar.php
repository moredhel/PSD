<?php
	if(isset($_SESSION['companyName']) && strlen($_SESSION['companyName']) > 0)
	{
		echo "<b>" . $_SESSION['companyName'] . "</b>";
	}
	elseif(isset($_SESSION['companyName']))
	{
		echo "You have not assigned yourself to a company";
	}
	else
	{
		echo "Welcome Guest";
	}
?>
