					<?php session_start() ?>
					<div class = "photos">
						<img src="images/imgPoc.jpg" alt = ""  id = "myPhoto" width = "100%" height = "100%">
					</div>

					<div class = "nn">NOVOSTI</div>
					<div class = "novosti">

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

					<div class = "referenceNaslov">Reference</div>
					<div class = "reference">	
						<img src="images/bemust.jpg" alt = "" width = "100%" height = "100%">
						<div class = "refref">
							<p>Pogledajte gradilišta na kojima</p>
							<p class = "more">je KOMOCHEM&nbsp;<a href="#" onclick = "ajaxReference(); return false;">Opšrinije...</a></p>
						</div>
					</div>
					<div class = "downloadsNaslov">Downloads</div>
					<div class ="downloads">
						<img src="images/downmanja.png" alt = "" width = "100%" height = "100%">
						<div class = "refref">
							<p>Download specifikacija</p>
							<p class = "more">svih proizvoda &nbsp;<a href="#">Opširnije...</a></p>
						</div>
					</div>
					
					<div class = "kalkulator">
						<img src="images/kalk.jpg" alt = "" width = "100%" height = "100%">
						<div class = "refref">
							<p>Izračunajte konačnu cijenu</p>
							<p class = "more"> na osnovu <a href="#">Opširnije...</a></p>
						</div>
					</div>
					<div class = "kalkNaslov">Kalkulator</div>
					<div id = "igm">
						<img src="images/igm.png" alt="a" width="100%" heigth="100%">
					</div>
					<div id = "penny">
						<img src="images/penny.png" alt="a" width="100%" heigth="100%">
					</div>
					<div id = "fis">
						<img src="images/fis.png" alt="a" width="100%" heigth="100%">
					</div>