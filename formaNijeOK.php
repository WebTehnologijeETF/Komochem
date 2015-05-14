		<!--<div class = "formaJedan">-->
			<form name = "formJedan" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div id = "ime" name = "ime">
					 Ime : <span class = "obavezno">*</span>   <br>
					<input class = "inputi" type = "text" name = "firstName" value = "<?php echo $firstName; ?>">
					<img class ="<?php echo $errorSlika_firstName; ?>"id = "ime_error" src="error.png">
					<p class = "obavezno"><?php echo $error_firstName; ?></p><br>
				</div>

				<div id = "prezime" name = "prezime">
					 Prezime : <span class = "obavezno">*</span>   <br>
					<input class = "inputi" type = "text" name = "secondName" value = "<?php echo $secondName; ?>">
					<img class ="<?php echo $errorSlika_secondName; ?>" id = "prezime_error" src="error.png">
					<p class = "obavezno"><?php echo $error_secondName; ?></p><br>
				</div>

				<div id = "telefon" name = "telefon">
					 Broj telefona :   <br>
					<input class = "inputi" type = "text" name = "telephone" value ="<?php echo $telephone; ?>">
					<img class ="<?php echo $errorSlika_telephone; ?>"id = "telefon_error" src="error.png">
					<p class = "obavezno"><?php echo $error_telephone; ?></p><br>
				</div>

				<div id = "e_mail" name = "e_mail">
					 Email : <span class = "obavezno">*</span>   <br>
					<input class = "inputi" type = "text" name = "email" value = "<?php echo $email; ?>">
					<img class ="<?php echo $errorSlika_email; ?>"id = "email_error" src="error.png">
					<p class = "obavezno"><?php echo $error_email; ?></p><br>
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
					<img class ="<?php echo $errorSlika_months; ?>"id = "brmjeseci_error" src="error.png">
					<p class = "obavezno"><?php echo $error_months; ?></p><br>
				</div>

				<div id = "porukaSlati" name = "porukaSlati">
					Vaša poruka : <span class = "obavezno">*</span>   <br>
					<textarea id = "inputPoruka" rows="10" cols="40" name="message" value = "<?php echo $message; ?>">
						<?php echo $message; ?>
					</textarea>
					<img class ="<?php echo $errorSlika_message ?>"id = "poruka_error" src="error.png">
					<p class = "obavezno"><?php echo $error_message; ?></p><br>
				</div>

				<div id = "posaljiSve" name = "posaljiSve">
					<button id ="salji" name = "sendAll" type = "submit" value = "Submit">Pošalji</button>
				</div>

				<div id = "resetujSve" name = "resetujSve">
					<button id ="resetuj" name = "resetAll" type = "reset" value = "Reset">Resetuj</button>
				</div>

			</form>