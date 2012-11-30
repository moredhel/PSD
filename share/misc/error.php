<?php
#make a long if/else list of possible errors.
$error = $_GET['error'];

function pr($text){echo "<p><bold>error:".$error.",  " . $text . "</bold></p>";}
if($error == 0)#login error
{
	pr("Invalid Username/Password");
}
elseif($error == 1#registration error (this can be made more specific)
{
	pr("Please check passwords match nad username is unique");
}
else
{
#redirect to homepage as it was a direct connection
header( 'Location: ../home.php' ) ;
}
?>
