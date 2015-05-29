<!DOCTYPE HTML SYSTEM>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8">
		<title>KOMOCHEM d.o.o. Visoko</title>
		<link rel="stylesheet" type="text/css" href="stilTest.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
		<link href='http://fonts.googleapis.com/css?family=Hind:600' rel='stylesheet' type='text/css'>
	</head>

	<body id = "bodi">
		<!--okvir-->
		<div class = "okvir">
			<!--gornji meni-->
			<div class = "meni_gore">
				<ul class = "meni">
					<li class = "pocetna"><a href="#" onclick = "ajaxPocetna(); return false;">POČENTA</a></li>
					<li class = "onama"><a href="#" onclick = "ajaxOnama();return false;">O NAMA</a></li>
					<li class = "kontakt"><a href="#" onclick = "ajaxKontakt(); return false;">KONTAKT</a></li>
				</ul>
			</div>
			<!--END OF meni_gore-->
			
			<div class = "zuta"></div>
			<div class = "crna"></div>
			<!--CONTAINER-->
			<div class = "container">
				<!--meni glavni-->
				
				<div class = "nav2">
					<div class = "menu">
						<ul class = "clearfix">
							<li id = "proizv">
								<a href="#" class = "nav-item" onclick = "OtvoriMeni('submen')">Proizvodi<span id = "strelica" class = "arrow">&#9660;</span></a>
									<ul class = "sub-menu" id = "submen" onmouseover = "DrziOtvoreno()"    onmouseout  = "ZatvoriMeni()">
										<li class = "ljepila"><a href="#" onclick = "ajaxLjepila(); return false;">Ljepila</a></li>
										<li class = "bojeunutra"><a href="#" onclick = "ajaxBojeUn(); return false;">Boje za unutrašnje zidove</a></li>
										<li class = "fasade"><a href="#" onclick = "ajaxFas(); return false;">Fasade</a></li>
										<li class = "bojefasade"><a href="#" onclick = "ajaxBojeFas(); return false;">Boje za fasade</a></li>
										
										<li class = "bpor"><a href="#" onclick = "ajaxStir(); return false;">Ljepila za stiropor</a></li>
										<li class = "drvometal"><a href="#" onclick = "ajaxDrvoMetal(); return false;">Boje za drvo i metal</a></li>
										<li class = "podloge"><a href="#" onclick = "ajaxPodloge(); return false;">Podloge</a></li>
										<li class = "ostalo"><a href="#" onclick = "ajaxOstale(); return false;">Ostale ponude</a></li>
									</ul>
							</li>
							<li><a href="#" onclick = "ajaxSavjet(); return false;">Savjeti</a></li>
							<li><a href="#" onclick = "ajaxRef(); return false;">Novosti</a></li>
							<li><a href="#" onclick = "ajaxDown(); return false;">Proizvodi lista</a></li>
							<!--<li><a href="#">Postanite prijatelj</a></li>-->
							<li><a href = "#" onclick = "ajaxPrij(); return false;">Postanite prijatelj</a></li>
						</ul>
					</div>
				</div>
				
			
				<!--END OF meni glavni-->
				<!--<div class = "pics">heheh</div>-->
				<!--<div>aaaa</div>
				<div class = "pp">aaaa</div>
				<div>bbbb</div>-->
				
				<div class = "logo"> 
					<img src = "logobez2.png" alt = "">
				</div>
				
				<!--IKONE-->
				<div class = "facebook">
					<a href="https://www.facebook.com">
						<img src="fejs.png" alt = "">
					</a>
				</div>

				<div class = "twitter">
					<a href="https://www.twitter.com">
						<img src="tvit.png" alt = "">
					</a>
				</div>

				<div class = "google">
					<a href="https://www.google.com">
						<img src="gugl.png" alt = "">
					</a>
				</div>
				<!--END OF IKONE-->
				

				


				<!--NOVOSTI-->

				<!--Dodavanje novosit po šablonu : 

				<div class = "podnovosti" id = "n2">
						<h5>NASLOV</h5>
						<p>
							TEXT <a href="#">opširnije...</a>
						</p>
						<p class = "ko">
							DATUM;VRIJEME;VLASNIK
						</p>
				</div>
				-->

				<!--DIO ZA AJAX, treba izdvojiti-->
				<div id = "onoZaAjax">
					<?php 
						include $varijabla = 'sviKomentari.php';
					?>
				</div>
				<!--KRAJ DIJELA ZA AJAX STO TREBA IZDVOJITI-->
			</div>
			<!--END OF CONTAINER-->

		 <!--END OF okvir-->	
		</div>

		<script src = "javaSkript.js">
		
		
		/*function ZatvoriMeni()
		{
			Timer = window.setTimeout(Zatvori, 5000);
		}

		function Zatvori()
		{
			Meni.style.visibility = "hidden";
		}

		function DrziOtvoren()
		{
			window.clearTimeout(Timer);
		}*/
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src = "ajaxTabela.js"></script>
		<script src = "ajaxNovostiSql.js"></script>
		
	</body>

</html>