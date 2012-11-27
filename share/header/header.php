<table>
<tr><td>
<div name='header_menu' align='left'>
	<table>
		<tr> 
			<!--Menu could be done more awesomely-->
			<td><a href='home.php'>Home</a></td>
			<td><a href='stats.php'>Stats</a></td>
			<td><a href='about.php'>About</a></td>
		</tr>
	</table>
</div>
</td><td width='50%'></td><td>
<div name='header_loginBox' align='right'>
<?php
//this php block either displays the login area or a welcome user message, with possible links to setting, messages + notifications
#add javascript to check for empty fields!!
if(isset($_SESSION['username']))
{
	//a user is logged in
	echo "Welcome ", $_SESSION['username'] , "<form action='../lib/logout.php' method='POST'><input type='hidden' name='click' /><input type='submit' value='logout' /></form>";
}
else
{
	//display login form
	include('header/login_form.html');
}
?>
</div>
</td></tr></table>

