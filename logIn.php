<?php 
if(isset($_REQUEST['a']))
{
	session_start();
	$veza = new PDO("mysql:dbname=wts;host=localhost", "wtadmin", "wtadmin");
	$veza->exec("set names utf-8");
	if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
	{
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
		
		
			$korisnik = $veza->query("SELECT id, username, password FROM korisnik ORDER BY id");

		if(!$korisnik)
		{
			$greska = $veza->errorInfo();
			print "SQL greska :".$greska[2];
			exit();
		}
		$korisnici = $korisnik->fetchAll();

		foreach ($korisnici as $k) 
		{
			//echo $username . "=" . $k['username'];
			if($username === $k['username'] && $password === $k['password'])
			{
				$_SESSION['username'] = $username;
				//echo $_SESSION['username'];
				header("location: panel.php");
			}

		}
		echo "greska";
	}
}
?>