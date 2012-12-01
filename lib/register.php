<?php
	session_start();
	if(isset($_SESSION['username'])){echo 'Logged in!!';}#change this to redirect the user back to their homepage
	require("salt.php");
	require("../classes/db_connect.php");

	#check all values aren't nill
	if(isset($_POST['click']) && strlen($_POST['username']) > 0 && strlen($_POST['password']) > 0 && !strcmp($_POST['password'], $_POST['confirm']))
	{
		#successful validation of user input!
		$db = new db();
		$dataset = $db->Request("SELECT username FROM psd_users WHERE username = '" .($_POST['username'])."'");
		#compare usernames case INsensitive!
		if(count($dataset) == 0)
		{
			#add user to the database
			echo "Success";
		}
		else#return to page saying username already exists in the database
		{
			echo "fail2";
		}
	}	
	else#return to homepage with error no. 1
	{
		echo "fail";
	}
?>
