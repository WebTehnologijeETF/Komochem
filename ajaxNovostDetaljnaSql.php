<!DOCTYPE HTML SYSTEM>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8">
		<title>KOMOCHEM d.o.o. Visoko</title>
		<link rel="stylesheet" type="text/css" href="stilTest.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
	</head>

	<body>
		<div id = "slikaLogin2">
			<img src="images/loginPhoto.jpg" alt = "" height = "100%" width = "100%">
		</div>

		<div class =  "detaljnaNovost" id = "detaljnaNovost">
			<!--<div class = "detaljnaNovostSlika"> a</div>
			<div class = "detaljnaNovostTekst">b </div>-->
			<?php 
				$id = $_GET['novostID'];
				
				#povezati s bazom i uzeti podatke

				$veza = new PDO("mysql:dbname=wts;host=localhost;charset=utf8", "wtadmin", "wtadmin");
				$veza->exec("set names utf8");
				$rezultat = $veza->query("select id, UNIX_TIMESTAMP(vrijeme) vrijeme2, autornovosti,naslovnovosit, kratkiopis,detaljno,url from novosti where id=". $id);

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

					$brojKomentaraPoVijesti = $veza->query("select count(*) from komentar where idvijesti=".$id)->fetchColumn();
					$zaKomentar = "Broj ostavljenih komentara : ".$brojKomentaraPoVijesti;
					#---varijable---

					echo "<div class = 'detaljnaNovostSlika'><img src = '".$urlSlika."'></div>";
					echo "<div class = 'detaljnaNovostTekst'>
							<small>Autor novosti : ".$autorNovosti."</small><br>
							Datum i vrijeme objave : ".$vrijemeNovosti."<br>
							<h4><i>".$naslovNovosti."</i></h4>
							".$opisNovosti."<br><br>
							".$tekstNovosti."

					</div>";
					echo "<p class = 'komentarDetaljna'><small><b>".$zaKomentar."</b></small></p>";
				}	

			?>
		</div>
	</body>

</html>