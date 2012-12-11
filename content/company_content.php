<?php
	#this page diplays all the Company Content
	require("../classes/db_connect.php");
	$db = new db();
		$sql = "SELECT c.companyName, c.balance, p.productname, q.quantity FROM psd_companies c, psd_products p, psd_quantities q WHERE c.companyId = q.companyId AND p.productId = q.productId AND q.companyid = "; 
	if(isset($_GET['companyid']) && $_GET['companyid'] > 0 ) 
	{
		$sql = $sql	. $_GET['companyid'];
	}
	else
	{
		$sql = $sql . $_SESSION['companyid'];
	}
	$dataset = $db->Request($sql);
	if(count($dataset) == 0)
	{
		echo "Fail";
		header("Location: company.php ");
	}
?>
<table id='company_info'>
<tr>
<?php
	$row = $dataset[0];
	echo "<th>".$row['companyName']."</th><th> | Balance:".$row['balance']."</th>";
?>
</tr>
<?php
	for($i = 0; $i < count($dataset); $i++)
	{
		$row = $dataset[$i];
		echo "<tr><td>";
		echo $row['productname'];
		echo "</td><td>";
		echo $row['quantity'];
		echo "</td></tr>";
	}
?>
</table>
