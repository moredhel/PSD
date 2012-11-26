<?php #include a session_start method at the top to make use of global variables! ?>
<html>
<head>
<!--Insert css linkage here -->
<title><?php echo $title; ?></title><!--The title is loaded in Dynamically-->
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
	require("../content/../content../content/$page_content");
}
#insert footer for the master page here!
require("footer.php");
?>
<!-- Any Scripts could either be included in a seperate file in the head or put in the bottom here-->
</html>
