<table id='stats_products'>
<th><a href='stats.php?order=<?php if(isset($_GET['order']) && $_GET['order'] == 5)echo "0";else echo "5";?>' >Company Name</a></th>
<th><a href='stats.php?order=<?php if(isset($_GET['order']) && $_GET['order'] == 1)echo "2";else echo "1";?>'>Product</a></th>
<th><a href='stats.php?order=<?php if(isset($_GET['order']) && $_GET['order'] == 3)echo "4";else echo "3";?>'>Qty</a></th>
<?php
	#This is where all the stats for the companies are manipulated
	require("../classes/db_connect.php");
	$db = new db();
	#conditionals, for filtering!
		$sql = "SELECT c.CompanyName, p.productname, q.quantity FROM psd_companies c, psd_products p, psd_quantities q WHERE c.companyId = q.companyId AND p.productId = q.productId";
	#this if statement modifiess the sql statement to filter by product
	 if(isset($_GET['productid']) && $_GET['productid'] > 0)
	{
		$sql = $sql . " AND p.productId = " . $_GET['productid'];
	}
	#this filters by companyname
	if(isset($_GET['companyid']) && $_GET['companyid'] > 0)
	{
		$sql = $sql . " AND c.companyId = " . $_GET['companyid'];
	}
	#this changes the ordering
	if(isset($_GET['order']) && $_GET['order'] > 0)
	{
		if($_GET['order'] == 1)
		{
			$sql = $sql . " ORDER BY `p`.`productName` ASC";
		}
		elseif($_GET['order'] == 2)
		{
			$sql = $sql . " ORDER BY `p`.`productName` DESC";
		}
		elseif($_GET['order'] == 3)
		{
			$sql = $sql . " ORDER BY `q`.`quantity` DESC";
		}
		elseif($_GET['order'] == 4)
		{
			$sql = $sql . " ORDER BY `q`.`quantity` ASC";
		}
		elseif($_GET['order'] == 5)
		{
			$sql = $sql . " ORDER BY `c`.`CompanyName` DESC";
		}
	}
	else $sql = $sql . " ORDER BY  `c`.`CompanyName` ASC ";
#	echo $sql;
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
