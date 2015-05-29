<?php 
	/*session_start();

	$veza = new PDO('mysql:dname=wts;host=127.0.0.1', 'wtadmin', 'wtadmin');
	$veza->exec("set names utf-8");

	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
	}
	else if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
	{
		$username = htmlentities($_REQUEST['username'], ENT_QUOTES);
		$password = htmlentities($_REQUEST['password'], ENT_QUOTES);

		$korisnik = $veza->query("select * from korisnik where username=".$username) -> fetchAll();
		$korisnik = $korisnik[0];

		if($password === $korisnik['password'])
		{
			$_SESSION['username'] = $username;
		}
		else{}
	}
	
	if(isset($_SESSION['username']))
	{
		print "Prijavljeni ste kao : " . $_SESSION['username'];
	}
	else 
	{
		print '<div class = "logInOkvir">
	<h3 id = "naslovLogIn">LOG IN</h3><br><br>
	<div class = "formaLogIn">
		<form  method = "post">
			Korisničko ime : <input type = "text" name = "username" id ="username" required = "required">
			<br><br><br>
			Lozinka : <input type = "password" name = "password" id ="password" required = "required">
			<br><br><br>
			<input type  = "submit" value = "Prijavi se" name = "log" id ="log">
		</form>
	</div>
</div>';
	}*/
	if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
	{
		$username = htmlentities($_REQUEST['username'], ENT_QUOTES);
		echo $username;
	}
	
?>

<?php 
	include 'login.php';

	if(isset($_SESSION['username']))
	{

		header("location: adminPanel.php");
	}
	else
	{
		echo "NE VALJAAA";
	}
?>
<div class = "logInOkvir">
	<h3 id = "naslovLogIn">LOG IN</h3><br><br>
	<div class = "formaLogIn">
		<form  method = "post" action = "login.php">
			Korisničko ime : <input type = "text" name = "username" id ="username" required = "required">
			<br><br><br>
			Lozinka : <input type = "password" name = "password" id ="password" required = "required">
			<br><br><br>
			<input type  = "submit" value = "Prijavi se" name = "submit" id ="submit">
		</form>
	</div>
</div>




