<?php
#make a long if/else list of possible errors.
$error = $_GET['error'];
function pr($text){echo "<p id='error'>Error:(".$_GET['error'].") -   " . $text . "</p>";}
if($error == 0)#login error
{
	pr("Invalid Username/Password");
}
elseif($error == 1)#registration error (this can be made more specific)
{
	pr("Please check passwords match and all text-boxes are filled in!");
}
elseif($error == 2)#username not unique
{
	pr("Username has already Been taken");
}	
elseif($error == 3)#user is not admin
{
	pr("You have insufficient rights to perform this operation, please contact the Administrator if you think this message has been shown in error");
}
else
{
#redirect to homepage as it was a direct connection
header( 'Location: ../home.php' ) ;
}
?>
