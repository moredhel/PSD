<div name='header_menu'>
	<table>
		<tr>
			<td>Home</td>
			<td>Stats</td>
			<td>About</td>
		</tr>
	</table>
</div>
<div name='header_loginBox'>
<?php
//this php block either displays the login area or a welcome user message, with possible links to setting, messages + notifications
if(isset($_SESSION['userid']))
{
	//a user is logged in
}
else
{
	//display login form
	echo "	<form action='../lib/login.php' method='POST'>
	<p>Username:<input type='text' name='username' /></p>
	<p>Password:<input type='password' name='password' /></p>
					<input type='hidden' name='click' />
					<input type='submit' value='login' />
			</form> ";
}
?>
</div>
