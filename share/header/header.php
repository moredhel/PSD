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
	include('header/login_form.html');
}
?>
</div>
