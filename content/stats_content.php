<table id='stats_products'>
<?php
	#This is where all the stats for the companies are manipulated
	require("../classes/db_connect.php");
	$db = new db();
	$sql = "SELECT c.CompanyName, p.productname, q.quantity FROM psd_companies c, psd_products p, psd_quantities q WHERE c.companyId = q.companyId AND p.productId = q.productId";
	$dataset = $db->Request($sql);
	
	for($i = 0; $i < count($dataset); $i++)
	{
		$row = $dataset[$i];
		echo "<tr><td>";
		echo $row['CompanyName'];
		echo "</td><td>";
		echo $row['productname'];
		echo "</td><td>";
		echo $row['quantity'];
		echo "</td></tr>";
		
	}	

?>
</table>
