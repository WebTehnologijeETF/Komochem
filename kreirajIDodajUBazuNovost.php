<?php
	session_start();
	$autor = htmlentities($_POST['autor'], ENT_QUOTES);
	$naslov = htmlentities($_POST['naslov'], ENT_QUOTES);
	$kratkiOpis = htmlentities($_POST['kratkiOpis'], ENT_QUOTES);
	$detaljno = htmlentities($_POST['detaljno'], ENT_QUOTES);
	$url = htmlentities($_POST['url'], ENT_QUOTES);

	$veza = new PDO("mysql:dbname=wts;host=localhost;charset=utf8", "wtadmin", "wtadmin");
    $veza->exec("set names utf8");
    $rezultat = $veza->query("INSERT INTO novosti (autornovosti, naslovnovosti, kratkiopis, detaljno, url) VALUES ('".htmlspecialchars($autor, ENT_QUOTES)."', '".htmlspecialchars($naslov, ENT_QUOTES)."', '".htmlspecialchars($kratkiOpis, ENT_QUOTES)."', '".htmlspecialchars($detaljno, ENT_QUOTES)."', '".htmlspecialchars($url, ENT_QUOTES)."')");
    echo "Novos uspjesno dodana";
    echo "<br><br>
          <form>
            <input type = 'button' class = 'logButton' value = 'Vrati se na pocetnu!' onclick = 'vratiSe();'>
          </form>";

?>