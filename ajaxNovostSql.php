<!DOCTYPE HTML SYSTEM>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8">
		<title>KOMOCHEM d.o.o. Visoko</title>
		<link rel="stylesheet" type="text/css" href="stilTest.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
		<link href='http://fonts.googleapis.com/css?family=Hind:600' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<!--okvir-->

				<!--DIO ZA AJAX, treba izdvojiti-->

				<div class = "photoNovost">
					<img src="novosti.jpg" alt = "" width = "100%" height = "100%">
				</div>
				<!--<?php 
					#include 'prikaziNovosti.php';
				?>-->
					
				<div id = "novostiDiv" name = "novostiDiv">
					
					<?php 
					
						$veza = new PDO("mysql:dbname=wts;host=localhost;charset=utf8", "wtadmin", "wtadmin");
						$veza->exec("set names utf8");
					$rezultat = $veza->query("select id, UNIX_TIMESTAMP(vrijeme) vrijeme2, autornovosti,naslovnovosit, kratkiopis,detaljno,url from novosti order by vrijeme desc");


					if(!$rezultat)
					{
						$greska = $veza->errorInfo();
						print "SQL greška : " . $greska[2];
						exit();
					}

					foreach ($rezultat as $novost) 
					{
						#---varijable---
						$urlSlika = $novost['url'];
						$autorNovosti = $novost['autornovosti'];
						$vrijemeNovosti = date("h:m:Y (h:i)", $novost['vrijeme2']);
						$naslovNovosti = $novost['naslovnovosit'];
						$naslovNovosti = "<h4><i>".trim(ucfirst(strtolower($naslovNovosti)))."</i></h4>";
						$opisNovosti = $novost['kratkiopis'];
						$tekstNovosti = $novost['detaljno']; 
						$id = $novost['id'];
						#---varijable---

						$brojKomentaraPoVijesti = $veza->query("select count(*) from komentar where idvijesti=".$novost['id'])->fetchColumn();
						$zaKomentar = "Broj ostavljenih komentara : ".$brojKomentaraPoVijesti;
						if(strlen($tekstNovosti)==0)
						{
							$opsirnije = "";
						}
						else 
						{
							$opsirnije = "<a href = '#' onclick = 'DetaljnaNovost(".$id.")'>Opširnije...</a>"; 
						}

						print "<div class = 'novostPolje'>";		#---glavni div novosti---

						print "<div class = 'poljeSlika'><img src = '".$urlSlika."' ></div>";
						print "<div class = 'poljeTekst'>"."<small>".$autorNovosti."</small>"."<br>".$vrijemeNovosti."<br>".
						$naslovNovosti."<br>".$opisNovosti."<br>".$opsirnije."</div>";
						print "<div class = 'poljeKomentari' name = 'poljeKomentari'>
								<p class = 'brojKomentara'><a href = '#' onclick = 'DetaljnaKomentar(".$id.")'>".$zaKomentar."</a></p></div>";
						

						print "</div>";								 #---glavni div novosti---
					}

					?>
					
					<!--<div class = "novostPolje">
						
						<div class = "poljeSlika" name = "poljeSlika">
							
						</div>
						
						<div class = "poljeTekst" name = "poljeTekst">
							neki tekstic
						</div>

						<div class = "poljeKomentari" name = "poljeKomentari">
							<p class = "brojKomentara">Komentara : 0!</p>
						</div>
						<div class = "dodajKomentar" name = "dodajKomentar">
							Dodaj komentar!
						</div>
					</div>

					<div class = "novostPolje">
						
						<div class = "poljeSlika" name = "poljeSlika">
							
						</div>
						
						<div class = "poljeTekst" name = "poljeTekst">
							neki tekstic
						</div>

						<div class = "poljeKomentari" name = "poljeKomentari">
							<p class = "brojKomentara">Komentara : 0!</p>
						</div>
						<div class = "dodajKomentar" name = "dodajKomentar">
							Dodaj komentar!
						</div>
					</div>

					<div class = "novostPolje">
						
						<div class = "poljeSlika" name = "poljeSlika">
							
						</div>
						
						<div class = "poljeTekst" name = "poljeTekst">
							neki tekstic
						</div>

						<div class = "poljeKomentari" name = "poljeKomentari">
							<p class = "brojKomentara">Komentara : 0!</p>
						</div>
						<div class = "dodajKomentar" name = "dodajKomentar">
							Dodaj komentar!
						</div>
					</div>

					<div class = "novostPolje">
						
						<div class = "poljeSlika" name = "poljeSlika">
							
						</div>
						
						<div class = "poljeTekst" name = "poljeTekst">
							neki tekstic
						</div>

						<div class = "poljeKomentari" name = "poljeKomentari">
							<p class = "brojKomentara">Komentara : 0!</p>
						</div>
						<div class = "dodajKomentar" name = "dodajKomentar">
							Dodaj komentar!
						</div>
					</div>-->
					

				</div>

				<!--KRAJ DIJELA ZA AJAX STO TREBA IZDVOJITI-->
	</body>

</html>