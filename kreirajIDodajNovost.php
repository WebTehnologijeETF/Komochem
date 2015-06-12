<?php
	session_start();
	$autor = htmlentities($_POST['autor'], ENT_QUOTES);
	$komentar = htmlentities($_POST['komentar'], ENT_QUOTES);
	$novostID = htmlentities($_POST['novostID'],ENT_QUOTES);
	//$email = htmlentities($_POST['email'], ENT_QUOTES);
	//echo $autor . " ". $komentar . " ". $novostID . " ". $email;
	$veza = new PDO("mysql:dbname=wts;host=localhost;charset=utf8", "wtadmin", "wtadmin");
    $veza->exec("set names utf8");
    $korisnik = $veza->query("SELECT * from korisnik ");
    $ajdi = "";
    $email = "";
    foreach ($korisnik as $k) 
    {
    	if($k['username'] === $_SESSION['username'])
    	{
    		$ajdi = $k['id'];#ID autora komentara
    		$email = $k['email'];
    	}
    		
    }
    $rezultat = $veza->query("INSERT INTO komentar (idvijesti, autorkomentara, email, tekstkomentara) VALUES ('".htmlspecialchars($novostID, ENT_QUOTES)."', '".htmlspecialchars($ajdi, ENT_QUOTES)."', '".htmlspecialchars($email, ENT_QUOTES)."', '".htmlspecialchars($komentar, ENT_QUOTES)."')");
    echo "Novos uspjesno dodana";
    echo "<br><br>
          <form>
            <input type = 'button' class = 'logButton' value = 'Vrati se na pocetnu!' onclick = 'vratiSe();'>
          </form>";

?>