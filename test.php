<?php
#this is the test file when I'm fiddling logical concepts and am too lazy to integrate it into the project
$arr1 = array(1,2,3,4);
$output = [1];
for($i=0; $i < count($arr1); $i++)
{
	$output[] = $arr1[$i];
}
var_dump($output);
?>
