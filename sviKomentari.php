<?php 
	#---VALIDACIJA PODATAKA SA FORME---
	//$emailValidiraj = $autorValidiraj = 0;
	ini_set ("display_errors", 1);
	if (!isset($_REQUEST['autor']))
    {
        $_REQUEST['autor'] = " ";
    }
    if (!isset($_REQUEST['mail']))
    {
        $_REQUEST['mail'] = " ";
    }
?>
<?php 
	#---PREUZIMANJE PODATAKA---
	$novostID = htmlspecialchars($_REQUEST['novostID']);

	$veza = new PDO("mysql:dbname=wts;host=localhost;charset=utf8", "wtadmin", "wtadmin");
	$veza->exec("set names utf8");

	$rezultat = $veza->query("select id, UNIX_TIMESTAMP(datum) datum2, autorkomentara,email, tekstkomentara from komentar where idvijesti=".$novostID);
	$rezultatNovost = $veza->query("select naslovnovosit from novosti where id=".$novostID);
	foreach ($rezultatNovost as $novost) 
	{
		print "<p id = 'naslovNovosti'> Naslov novosti : ".$novost['naslovnovosit']."</p>";	
	}

	#---FORMA---
	echo "<div class = 'formaKomentar'>
			<h4>Ostavite Komentar</h4>";
			$forma = "<form class = 'ostaviKomentar' method = 'post' action = 'sviKomentariOpet.php'>
						<input id = 'novostID' name = 'novostID' value = '".$novostID."' type = 'hidden'>
						Autor komentara : <input type = 'text' name = 'autor'><br><br>
						Email : <input type = 'text' name = 'email' id = 'emailKomentar'><br><br>
						Tekst komentara : <textarea rows  = '2' cols = '20' name='comment' required = 'required'>
						</textarea><br><br>
						<input type = 'submit' name = 'sabmit' value = 'Kometarisi'>";
			echo $forma;
	echo   "</div>";

	#---FORMA---

	#---KOMENTARI---
	print "<div class = 'okvirKomentari'>";
	foreach ($rezultat as $komentar) 
	{
		$datumKomentara = date("h:m:Y (h:i)", $komentar['datum2']);
								$autorkomentara = $komentar['autorkomentara'];
								$emailKomentar = $komentar['email'];
								$tekstKomentar = $komentar['tekstkomentara'];
								#---varijable---
								echo  "<div class = 'komentar'>
										<small>Datum objave : <i>".$datumKomentara."</i></small><br>
										Autor komentara : <i>".$autorkomentara."</i><br>
										Email : <i>".$emailKomentar."</i><br>
										<div class = 'tekstKomentar'>
										Tekst komentara : ".$tekstKomentar."
										</div>
										<hr>
									  </div>";
	}
	echo "</div>";
	#---KOMENTARI---
?>
<?php 
	if(isset($_REQUEST['comment']) && trim($_REQUEST['comment']))
	{
		$a = trim($_REQUEST['autor']);
		$e = trim($_REQUEST['email']);
		$t = trim($_REQUEST['comment']);
		$i = trim($_REQUEST['novostID']);

		$upisi = $veza->query("INSERT INTO komentar (autorkomentara, email, tekstkomentara, idvijesti)
			values('".htmlspecialchars($a)."','".htmlspecialchars($e)."','".htmlspecialchars($t)."','".htmlspecialchars($i)."')");
		//header("Location : temp.html");
	}
	
?>
