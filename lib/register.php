<?php
	session_start();
	if(isset($_SESSION['username'])){echo 'Logged in!!';}#change this to redirect the user back to their homepage
	require("salt.php");
	require("../classes/db_connect.php");
	$error = "";
	#check all values aren't nill
	if(isset($_POST['click']) && strlen($_POST['username']) > 0 && strlen($_POST['password']) > 0 && !strcmp($_POST['password'], $_POST['confirm']))
	{
		#successful validation of user input!
		$db = new db();
		$dataset = $db->Request("SELECT username FROM psd_users WHERE username LIKE '" .($_POST['username'])."'");
		#compare usernames case INsensitive!
		if(count($dataset) == 0)
		{
			#add user to the database
			$sql =  "INSERT INTO psd_users(`username`,`password`) VALUES('".$_POST['username']."','".encrypt($_POST['password'])."')";
			echo $db->Ins($sql);
			
			
		}
		else#return to page saying username already exists in the database
		{
			$error = "?error=2";
		}
	}	
	else#return to homepage with error no. 1
	{
		$error = "?error=1";
	}
	header( "Location: ../share/register.php". $error);
?>
