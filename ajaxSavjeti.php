<!DOCTYPE HTML SYSTEM>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8">
		<title>KOMOCHEM d.o.o. Visoko</title>
		<link rel="stylesheet" type="text/css" href="stilTest.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
	</head>

	<body>
		<div class = "photosSavjet">
				<img src="images/savjet.png" alt = "" width = "100%" height = "100%">
		</div>
		<div class = "nnSavjeti">NOVOSTI</div>
		<div class = "novostiSavjeti">

			<!--<div class = "podnovosti" id = "n1">
				<h5>Novo u ponudi</h5>
				<p>
					Komolazur <a href="#">opširnije...</a>
				</p>
				<p class = "ko">
					29.03.2015;22:10;F.O.
				</p>
			</div>

			<div class = "podnovosti" id = "n2">
				<h5>Novo u ponudi</h5>
				<p>
					Komolux <a href="#">opširnije...</a>
				</p>
				<p class = "ko">
					29.03.2015;22:10;F.O.
				</p>
			</div>

			<div class = "podnovosti" id = "n3">
				<h5>Novo u ponudi</h5>
				<p>
					Komokor <a href="#">opširnije...</a>
				</p>
				<p class = "ko">
					29.03.2015;22:10;F.O.
				</p>
			</div>

			<div class = "podnovosti" id = "n4">
				Nešto
			</div>-->

				<?php 
							$veza = new PDO("mysql:dbname=wts;host=localhost", "wtadmin", "wtadmin");
							$veza->exec("set names utf-8");
							$rezultat = $veza->query("SELECT id,autornovosti,naslovnovosit,kratkiopis,detaljno,url, UNIX_TIMESTAMP(vrijeme) vrijeme2 from novosti");
							if(!$rezultat)
							{
								$greska = $veza->errorInfo();
					              print "SQL greška: " . $greska[2];
					              exit();
							}
							
							foreach ($rezultat as $novost) 
							{
								$idNovosti = $novost['id'];
								$autor = $novost['autornovosti'];
								$naslov = $novost['naslovnovosit'];
								$vrijeme = date("h:m:Y (h:i)", $novost['vrijeme2']);
								echo "<div class = 'podnovosti'>
										<small>Autor : ".$autor."</small><br>
										<small>Datum : ".$vrijeme."</small><br>
										Naslov novosti : <i>".$naslov."</i> 
										<a href = '#' onclick = 'ajaxRef();return false;'>Opšrinije...</a>
							 	</div>";
							}
							 
						?>
		</div>


		<div id = "tekstSavjeti">
			<p>Selbst das technisch überlegenste Fassadensystem und die vielfältigsten Gestaltungsmöglichkeiten reichen noch nicht für wirklich überdurchschnittliche Fassadenlösungen. Deshalb bieten wir Ihnen einen Service, der Sie durch alle Bauphasen hindurch begleitet. Und dieser beginnt, lange bevor auf der Baustelle der erste Handgriff getan wird. </p>
			<br>
			<p>Zum Beispiel in Form einer eingehenden System- und Werkstoffberatung. Oder einer umfassenden Objektanalyse bei einem Sanierungsobjekt. Aber genauso sind wir mit einer Farbplanung und Objektbemusterung für Sie da, mit unserem Ausschreibungsservice und CAD-Detaillösungen. Und natürlich gehört dazu auch der ganze Bereich der Schulungen und der Produkteinarbeitung. Dafür stehen wir Ihnen in unserem Schulungs- und Technologiezentrum in Gerstungen genauso zur Verfügung wie vor Ort auf Ihrer Baustelle</p>
		</div>			
	</body>

</html>