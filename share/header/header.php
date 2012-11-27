<table>
<tr><td>
<div name='header_menu' align='left'>
	<table>
		<tr> 
			<!--Menu could be done more awesomely-->
			<td>Home</td>
			<td>Stats</td>
			<td>About</td>
		</tr>
	</table>
</div>
</td><td width='50%'></td><td>
<div name='header_loginBox' align='right'>
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
</td></tr></table>

