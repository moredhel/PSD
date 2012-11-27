<?php #include a session_start method at the top to make use of global variables! ?>
<html>
<head>
<!--Insert css linkage here -->
<title><?php echo $title; ?></title><!--The title is loaded in Dynamically-->
<?php require("../scripts/global.js");//should probably use js include, less infor to download to each page load ?>
</head>
<?php
#This is an inclusion of the header webpage within the Master page
require("header.php");
#This is the Master Page,
#all other pages are loaded through this page
#This inserts the contents of the page into the master Page
if($page_content == null)
{
	include("404.php");
}
else
{
	#insert try catch which redirects to 404 if caught
	#There's a hardcoded link to ../content/
	require("../content/$page_content");
}
#insert footer for the master page here!
require("footer.php");
?>

</html>
