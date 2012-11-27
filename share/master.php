<!--IMPORTANT - Create divs to separate out data-->
<?php session_start();#include a session_start method at the top to make use of global variables! ?>
<html>
<head>
<!--Insert css linkage here -->
<title><?php if(isset($title))echo $title; else echo "Error:404"; //The title is loaded in Dynamically ?></title>
<?php require("../scripts/global.js");//should probably use js include, less infor to download to each page load ?>
</head>
<div name='header' align='center'>
<?php
#This is an inclusion of the header webpage within the Master page
require("header/header.php");
?>
</div>
<?php
#error area, this will only show if an error occurs, optionally a post instead of get
if(isset($_GET['error']))
{
	include('misc/error.php');
}
?>
<div name='body'>
<?php
#This is the Master Page,
#all other pages are loaded through this page
#This inserts the contents of the page into the master Page
if(!isset($page_content))
{
	include("misc/404.php");
}
else
{
	#insert try catch which redirects to 404 if caught
	#There's a hardcoded link to ../content/
	require("../content/$page_content");
}
?>
</div>
<div name='footer'>
<?php
#insert footer for the master page here!
require("footer/footer.php");
?>
</div>
</html>
