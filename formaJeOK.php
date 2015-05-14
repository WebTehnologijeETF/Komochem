

		<!--<div class = "formaJedan">-->
		<h3 class = "slova"><i>Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke</i></h3>
			<form name = "formJedan" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div id = "ime" name = "ime">
					 Ime : <span class = "obavezno">*</span>   <br>
					<input class = "inputi" type = "text" name = "firstName" value = "<?php echo $firstName; ?>">
					<br><br>
				</div>

				<div id = "prezime" name = "prezime">
					 Prezime : <span class = "obavezno">*</span>   <br>
					<input class = "inputi" type = "text" name = "secondName" value = "<?php echo $secondName; ?>">
					<br><br>
				</div>

				<div id = "telefon" name = "telefon">
					 Broj telefona :   <br>
					<input class = "inputi" type = "text" name = "telephone" value ="<?php echo $telephone; ?>">
					<br><br>
				</div>

				<div id = "e_mail" name = "e_mail">
					 Email : <span class = "obavezno">*</span>   <br>
					<input class = "inputi" type = "text" name = "email" value = "<?php echo $email; ?>">
					<br><br>
				</div>

				<div id = "tipPret" name = "tipPret">
					 Tip pretplate :<br>
					<select class = "inputi" id  = "type" name = "type" value = "<?php echo $type; ?>">
						<option id = "mala" value = "mala">Mala</option>
						<option id = "srednja" value = "srednja">Srednja</option>
						<option id = "velika" value = "velika">Velika</option>
					</select>
					<p>&nbsp;</p>
				</div>

				<div id = "mjeseciBroj" name = "mjeseciBroj">
					Broj mjeseci pretplate : <span class = "obavezno">*</span>   <br>
					<input class = "inputi" type = "text" name = "months" value = "<?php echo $months; ?>">
					<br><br>
				</div>

				<div id = "porukaSlati" name = "porukaSlati">
					Vaša poruka : <span class = "obavezno">*</span>   <br>
					<textarea id = "inputPoruka" rows="10" cols="40" name="message" value = "<?php echo $message; ?>">
						<?php echo $message; ?>
					</textarea>
					<br><br>
				</div>

				<div id = "posaljiSve" name = "posaljiSve">
					<button id ="salji" name = "sendAll" type = "submit" value = "Submit">Pošalji</button>
				</div>

				<div id = "resetujSve" name = "resetujSve">
					<button id ="resetuj" name = "resetAll" type = "reste" value = "Reset">Resetuj</button>
				</div>

			</form>
		<!--</div>-->

		<div class = "daLiSteSigurni">
			<h3 class = "slova">Provjerite da li ste ispravno popunili kontakt formu</h3>
			<br>
			<?php print " <i>Ime : </i>" .$firstName ."<br>" ?>
			<?php print "<i>Prezime : </i>" .$secondName. "<br>" ?>
			<?php print "<i>Broj telefona : </i>".$telephone. "<br>"?>
			<?php print "<i>Email adresa : </i>".$email."<br>" ?>
			<?php print "<i>Tip pretplate : </i>".$type. "<br>" ?>
			<?php print "<i>Broj mjeseci pretplate : </i>" .$months. "<br>"?>
			<?php print "<i>Poruka : </i><p>".$message. "</p><br> "?>
			<br><br><br>
			<p clasS = "pitanje">Da li ste sigurni da želite poslati podatke?</p>
			<form method = "post" name = "posaljiMail" action = "posaljiMail.php">
				<input type = "submit" id = "siguran" name = "posalji_mail" value = "Siguran sam!">
				<input type = "hidden" name = "firstName" value = "<?php echo $firstName; ?>">
				<input type = "hidden" name = "secondName" value = "<?php echo $secondName; ?>">
				<input type = "hidden" name = "telephone" value = "<?php echo $telephone; ?>">
				<input type = "hidden" name = "email" value = "<?php echo $email; ?>">
				<input type = "hidden" name = "type" value = "<?php echo $type; ?>">
				<input type = "hidden" name = "months" value = "<?php echo $months; ?>">
				<input type = "hidden" name = "message" value = "<?php echo $message; ?>">
			</form>
		</div>


 

