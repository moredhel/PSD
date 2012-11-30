<?php
#make a long if/else list of possible errors.
$error = $_GET['error'];

if($error == 0)#login error
{
	echo "<p><bold>error:$error, username/password incorrect!</bold></p>";
}
else
{
#redirect to homepage as it was a direct connection
header( 'Location: ../home.php' ) ;
}
?>
