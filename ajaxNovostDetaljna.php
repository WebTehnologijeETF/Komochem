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
			<img src="loginPhoto.jpg" alt = "" height = "100%" width = "100%">
		</div>

		<div class =  "detaljnaNovost" id = "detaljnaNovost">
			<!--<div class = "detaljnaNovostSlika"> a</div>
			<div class = "detaljnaNovostTekst">b </div>-->
			<?php 
				$dateTime = $_GET['dateTime'];
				$autor = $_GET['autor'];
				$naslov = $_GET['naslov'];
				$opis = $_GET['opis'];
				$detOpis = $_GET['detOpis'];
				$slika = $_GET['slika'];
				echo '<div class = "detaljnaNovostSlika"><img src = "'.$slika.'"></div>
				<div class = "detaljnaNovostTekst">'.$dateTime.'<br>'.$autor.'<br>'.$naslov.$opis.'<br>'.$detOpis.'</div>';
			?>
		</div>
	</body>

</html>