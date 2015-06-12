<!DOCTYPE HTML SYSTEM>
<html>
<?php session_start() ?>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8">
		<title>KOMOCHEM d.o.o. Visoko</title>
		<link rel="stylesheet" type="text/css" href="stilTest.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
		<link href='http://fonts.googleapis.com/css?family=Hind:600' rel='stylesheet' type='text/css'>
	</head>

	<body  id = "bodi">
		<!--okvir-->

		<div class = "okvir">
			<!--gornji meni-->
			<div class = "meni_gore">
				<ul class = "meni">
					<li class = "pocetna"><a href="index.php" >POČENTA</a></li>
					<li class = "onama"><a href="#" onclick = "ajaxOnama();return false;">O NAMA</a></li>
					<li class = "kontakt"><a href="#" onclick = "ajaxKontakt(); return false;">KONTAKT</a></li>
					<li class = "kontakt"><a href="panelWebServis.php" >LOG IN</a></li>

				</ul>
			</div>
			<!--END OF meni_gore-->
			
			<!--<div class = "zuta"></div>
			<div class = "crna"></div>-->
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

				<div id = "onoZaAjax">
					<?php 
		                if(isset($_POST['logout']))
		                {
		                    unset($_SESSION['username']);
		                    unset($_SESSION['password']);
		                    session_unset();
		                }
		            ?>
		            <?php 
		            	if(isset($_POST['username']) && isset($_POST['password'])):
		            			$username = htmlentities($_POST['username'], ENT_QUOTES);
		            			$password = htmlentities($_POST['password'], ENT_QUOTES);
	            				include ('logIn.php');
        				elseif (!isset($_POST['username']) || !isset($_POST['password'])):
        					//echo "GRESKA PRI UNOSU";
        				endif;
		            ?>
		            <?php 
		            	if(!isset($_SESSION['username'])):
		            ?>

					<div class = "logInOkvir">
						<h3 id = "naslovLogIn">LOG IN</h3><br><br>
						<div class = "formaLogIn">
							<form  method = "post" action = "logIn.php">
								Korisničko ime : <input type = "text" name = "username" id ="username" required = "required" class = "unos">
								<br><br><br>
								Lozinka : <input type = "password" name = "password" id ="password" required = "required">
								<br><br><br>
								<input type = "hidden" name = "a" value = "a">
								<input type  = "submit" value = "Prijavi se" name = "submit" id ="submit">

							</form>
						</div>
					</div>

				<?php else:?>
					<?php 
					#---AKO JE LOGOVAN---
					#--provjeriti kojeg je tipa korisnik--
					$bool = 1;
					$veza = new PDO("mysql:dbname=wts;host=localhost", "wtadmin", "wtadmin");
					$veza->exec("set names utf-8");
					$korisnik = $veza->query("SELECT * from korisnik");
					foreach ($korisnik as $k) 
					{
						if($k['username'] === $_SESSION['username'])
						{
							if($k['admin'] === "1")
								$bool = 1;#znaci da je admin
							else
								$bool = 0;#znaci da je obicni korisnik
						}
					}
					

					echo "<p class = 'prijavaNaslov'>PRIJAVLJENI STE KAO : <i>".$_SESSION['username']."</i></p>"?>
					<?php if($bool === 1):?>
						
						<div class = "operacije">
							<form action = "panel.php" method = "post" class = "logoutForm">
								<input class = "logButton" id = "logoutBtn"type = "submit" value = "logout" name ="logout">

								<input class = "logButton" id = "addUserBtn"type = "button" value = "Dodaj korisnika" name = "addUserBtn" onclick = "addUser()">
								<input class = "logButton" id = "delUserBtn"type = "button" value = "Obriši korisnika" name = "delUserBtn" onclick = "deleteUser()">

								<input class = "logButton" id = "addNewsBtn"type = "submit" value = "Dodaj novost" name = "addNewsBtn">
								<input class = "logButton" id = "delNewsBtn"type = "submit" value = "Obriši novost" name = "delNewsBtn">

								<input class = "logButton" id = "addCommentBtn" type ="submit" value = "Dodaj komentar" name = "addCommentBtn">
								<input class = "logButton" id = "delCommentBtn" type = "submit" value = "Obrši komentar" name = "delCommentBtn">

							</form>
						</div>

					<?php else :?>

						<p>njaa</p>
						<form action = "panel.php" method = "post" class = "logoutForm">
							<input class = "logButton" id = "logoutBtn"type = "submit" value = "logout" name ="logout">
							<input class = "logButton" id = "addCommentBtn" type = "submit" value = "Dodaj komentar" name = "addCommentBtnKor">
						</form>

					<?php endif;?>	

			<?php endif;?>
 			<div id = "onoZa"></div>
			<?php if(isset($_SESSION['username'])): ?>



				<?php if(isset($_POST['addUserBtn'])) : ?>
				<!--AKO JE ODABRANO DODAVANJE KORISNIKA-->
					
					<div class = "formaDodajKorisnika">
						<h4 id = "naslovLogIn">Podaci o korisniku</h4><br><br><br>
						<form action = "panel.php" method="post" id = "formaDodaj"name  = "formaDodaj" class = "formaDodaj">
							Korisničko ime :
							<input type = "text" name = "inputUsername" class = "unos" required = "required"><br><br>
							Lozinka : 
							<input type = "text" name = "inputPassword" class = "unos" required = "required">
							<br><br><br>
							Tip korisnika :<br> 
							<input type = "radio" name = "tip" value = "obicni" checked>Obicni<br>
							<input type = "radio" name = "tip" value = "admin">Admin<br>
							<br><br><br>
							<input type = "button" value = "Dodaj" name = "addUser" id = "log" onclick = "kreirajIDodaj()">
						</form>
					</div>
				<?php endif;?>

				<?php if(isset($_POST['addNewsBtn'])):?>
				<!--AKO JE ODABRAO DA DODAJE NOVOST!!!!-->
				<div class = "formaDodajNovost">
						<h4 id = "naslovLogIn">Podaci o novosti</h4><br><br><br>
						<form action = "panel.php" method="post" id = "formaNovost"name  = "formaNovost" class = "formaNovost">
							Autor novosti : 
							<input type = "text" name = "inputAutor" id = "inputAutor" class = "unos" required = "required"
							value = "<?php echo $_SESSION['username']; ?>" disabled = "true">
							<br><br>
							Naslov novosti : 
							<input type = "text" name = "inputNaslov" id = "inputNaslov" class = "unos" required = "required">
							<br><br>
							Kratki opis novosti : 
							<input type = "text" name = "inputKratkiOpis" id = "inputKratkiOpis" class = "unos" required = "required">
							<br><br>
							Detaljni opis novosti : 
							<input type = "text" name = "inputDetaljno" id = "inputDetaljno" class = "unos">
							<br><br>
							Url slike : 
							<input type = "text" name = "inputUrl" id = "inputUrl" class = "unos">
							<br><br><br>
							<input type = "button" value = "Dodaj" id = "log" name = "addNews" class = "dodajK" onclick = "kreirajIDodajNovost()">
							
						</form>
					</div>
				<?php endif;?>

				<?php if(isset($_POST['delNewsBtn'])) :?>
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
						echo "<div class = 'formaBrisanjeNovosti'>";
						foreach ($rezultat as $novost) 
						{
							$idNovosti = $novost['id'];
							$autor = $novost['autornovosti'];
							$naslov = $novost['naslovnovosit'];
							$vrijeme = date("h:m:Y (h:i)", $novost['vrijeme2']);
							echo "<div class = 'novostiPodaci'>
								<form id = 'novostForm'>
									<small>Autor : ".$autor."</small><br>
									<small>Datum : ".$vrijeme."</small><br><br>
									Naslov novosti : <i>".$naslov."</i><br>
									<input type = 'hidden' name = 'idNovost' value = 'id'>
									<input type = 'button' value = 'Obriši!' id = 'logNovost' onclick = 'obrisiNovost(".$idNovosti.")'>
								</form>
						 	</div>";
						}
						 echo "</div>";
						/*foreach ($rezultat as $novost) 
						{
							$idNovosti = $novost['id'];
							echo $idNovosti;
						}*/
					?>
				<?php endif;?>

				
				<?php if(isset($_POST['addCommentBtn'])): ?>
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
						echo "<div class = 'formaBrisanjeNovosti'>";
						foreach ($rezultat as $novost) 
						{
							$idNovosti = $novost['id'];
							$autor = $novost['autornovosti'];
							$naslov = $novost['naslovnovosit'];
							$vrijeme = date("h:m:Y (h:i)", $novost['vrijeme2']);
							echo "<div class = 'novostiPodaci'>
								<form id = 'novostForm'>
									<small>Autor : ".$autor."</small><br>
									<small>Datum : ".$vrijeme."</small><br><br>
									Naslov novosti : <i>".$naslov."</i><br>
									<input type = 'hidden' name = 'idNovostK' value = '".$idNovosti."'>
									<input type = 'button' value = 'Dodaj!' id = 'logNovost' onclick = 'otvoriZaKomentar(".$idNovosti.")'>
								</form>
						 	</div>";
						}
						 echo "</div>";
					?>
				<?php endif;?>

				<?php if(isset($_POST['addCommentBtnKor'])): ?>
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
						echo "<div class = 'formaBrisanjeNovosti'>";
						foreach ($rezultat as $novost) 
						{
							$idNovosti = $novost['id'];
							$autor = $novost['autornovosti'];
							$naslov = $novost['naslovnovosit'];
							$vrijeme = date("h:m:Y (h:i)", $novost['vrijeme2']);
							echo "<div class = 'novostiPodaci'>
								<form id = 'novostForm'>
									<small>Autor : ".$autor."</small><br>
									<small>Datum : ".$vrijeme."</small><br><br>
									Naslov novosti : <i>".$naslov."</i><br>
									<input type = 'hidden' name = 'idNovostK' value = '".$idNovosti."'>
									<input type = 'button' value = 'Dodaj!' id = 'logNovost' onclick = 'otvoriZaKomentar(".$idNovosti.")'>
								</form>
						 	</div>";
						}
						 echo "</div>";
					 ?>
				<?php endif; ?>
			<?php endif;?>
				</div>
				<!--KRAJ DIJELA ZA AJAX STO TREBA IZDVOJITI-->
			</div>
			<!--END OF CONTAINER-->

		 <!--END OF okvir-->	
		</div>

		<script src = "javaSkript.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src = "ajaxTabela.js"></script>
		<script src = "ajaxNovostiSql.js"></script>
		<script src = "servSkripta.js"></script>
		
	</body>

</html>