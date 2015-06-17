<?php 
	session_start();
	$newID = $_POST['newID'];
	echo '<div class = "formaDodajKomentar">
			<h4 id = "naslovLogIn">Dodaj komentar na novost</h4><br><br><br>
			<form  method="post" class = "formaDodajK">
				<small>Autor : ime i prezime</small><br>
				<small>Datum : datum i vrijeme</small><br>
				Naslov novosti : <b>Naslov</b><br><br>

				Autor : <input type = "text" id = "autorComment" name = "addComment" class = "unos" value = '.$_SESSION["username"].' disabled = true>
				<br><br>
				Email : <input type = "text" id = "emailAutora" class = "unos"><br><br>
				Komentar : <textarea rows = "10" cols = "40" class = "tekstArea" id = "commentAdd" required = "required"></textarea>
				<br><br>

				<input type = "button" value = "Dodaj komentar" class = "btn" onclick = "dodajKomentarUBazu('.$newID.')">
			</form>
		</div>';
?> 