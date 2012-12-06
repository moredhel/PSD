<table id='header'><tr><td>
<div id='header_menu'>
	<table>
		<tr> 
			<!--Menu could be done more awesomely-->
			<td><a href='home.php'>Home</a></td>
			<td><a href='stats.php'>Stats</a></td>
			<td><a href='about.php'>About</a></td>
<?php
if($_SESSION['admin'])
{
	echo "<td><a href='admin.php>Admin</admin>";
}
?>
		</tr>
	</table>
</div>
</td><td>
<div id='header_logo'>
	<p>Insert Logo Here</p>
</div>
</td><td>
<div id='header_loginBox'>
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
