<?php
	session_start();
	if(isset($_POST['clicked']))
	{
	#This is the php script that runs when a user joins a selected Company!
	require("../classes/db_connect.php");
	$db = new db();	
	$sql = "UPDATE psd_users SET CompanyID = '" . $_POST['companyId'] . "' WHERE userId = '" . $_SESSION['userid'] . "'";
	#echo $sql;
	$db->Ins($sql);
#	unset($_SESSION['companyId']);
	$_SESSION['companyId'] = $_POST['companyId'];
	}
	header("Location: ../share/preferences.php");
?>
