<table>
<tr>
<td>
	<form id='preferences_password' action='../lib/newpassword.php' method='POST'>
		<tr><td>Old Password:</td><td><input type='password' name='oldpassword' /></td></tr>
		<tr><td>New Password:</td><td><input type='password' name='password' /></td></tr>
		<tr><td>Confirm Password:</td><td><input type='password' name='confirm' /></td></tr>
		<input type='hidden' name='click' />
		<tr><td></td><td align='right'><input type='submit' value='Change password' /></td>
	</form>
</td>
</tr>
</table>
<!--This allows the user to select the Company that they want to join!-->
	<?php
		//check if user belongs to a company
		if($_SESSION['companyid'] == 1)
		{
			require("../classes/db_connect.php");
			$db = new db();
			$sql = "SELECT * FROM  `psd_companies` ORDER BY  `psd_companies`.`CompanyId` ASC ";
			$dataset = $db->Request($sql);
			//the user does not belong to a company
			echo "<table>\n";
				for($i = 0; $i < count($dataset); $i++)
				{
					$row = $dataset[$i];
					echo "<form method='POST' action='../lib/selectCompany.php'>";
					echo "<input type='hidden' name='companyId' value='".$row['CompanyId']."' />";
					echo "<input type='hidden' name='companyName' value='" . $row['CompanyName'] . "' />";
					echo "<tr>\n\t<td>" . $row['CompanyName'] . "</td>\n\t<td><input type='hidden' name='clicked' /><input type='submit' value='Select'</td>\n</tr>\n";
					echo "</form>";
				}
			echo "</table>";
		}
		else
		{
			echo "Welcome Associate of <b>" . $_SESSION['companyName'] . "</b>";
		}
	?>
