<?php
#This php file contains the method for encryption of text

function encrypt($pwd)
{
#should do something impractically complicated, possibly several hashes, including salts	
#as we do not need to decrypt it needn't be too fast, can take up to 1 second, maybe more
return md5($pwd);
}
echo encrypt('password');
?>
