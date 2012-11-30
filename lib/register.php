<?php
	session_start();
	if(isset($_SESSION['username'])){echo 'Logged in!!';}#change this to redirect the user back to their homepage
	require("salt.php");
	require("../classes/db_connect.php");

	#check all values aren't nill
	if(isset($_POST['click']) && strlen($_POST['username'] > 0 && strlen($_POST['password']) > 0 && $_POST['password'] == $_POST['confirm']))
	{
		#successful validation of user input!
		$db = new db();
		$dataset = $db->query("SELECT username FROM psd_users WHERE username = '" .($_POST['username'])."'");
		#compare usernames case INsensitive!
		$row = $dataset[0];
		echo $row['username'] or;
		if($row['username'] != $_POST['username'])#this means there is nobody in the database with this username
		{
			echo "success";	
		}
	}	
	else#return to homepage with error no. 1
	{
		echo "fail";
	}
?>
