<?php 
if(isset($_POST['logout']))
{
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	session_unset();
}
?>


<p>meh</p>

<form action = "adminPanel.php">
	<input type = "submit" name = "logout" value = "Logout">
</form>