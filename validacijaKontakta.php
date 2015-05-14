<?php 
	header('Content-Type: text/html; charset=utf-8');

	#---VARIJABLE---
	$firstName = ""; #ime
	$secondName =  ""; #prezime
	$telephone = ""; #telefon
	$email = "";#email
	$type = ""; #tip pretplate : Mala,Srednja,Velika
	$months = ""; #broj mjeseci koji odgovara odredjenoj pretplati
	$message =  ""; #poruka korisnika 
	#---PORUKE GRESKE---
	$error_firstName = "";
	$error_secondName = "";
	$error_telephone = "";
	$error_email = "";
	$error_months = "";
	$error_message = "";

	$errorSlika_firstName = "errorProvider";
	$errorSlika_secondName = "errorProvider";
	$errorSlika_telephone = "errorProvider";
	$errorSlika_email = "errorProvider";
	$errorSlika_months = "errorProvider";
	$errorSlika_message = "errorProvider";


	$prikaziMiFormu = "";
	$bool = true;

	#---VALIDACIJA ZAHTJEVANIH POLJA---

	if(isset($_POST["sendAll"]))
	{
		$bool = true;
		#---IME---
		if(empty($_POST["firstName"])) #prazan textbox Ime
		{
			$error_firstName = "Morate unijeti ime!";
			$errorSlika_firstName = "errorProviderVisible";
			$bool = false;
		}
		else
		{
			$firstName = foo($_POST["firstName"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $firstName)) #w3school...
			{
				$error_firstName = "Dozvoljeni su samo slova i razmaci!";
				$errorSlika_firstName = "errorProviderVisible";
				$bool = false;
			}
		}

		#---PREZIME---
		if(empty($_POST["secondName"]))
		{
			$error_secondName = "Morate unijeti prezime!";
			$errorSlika_secondName = "errorProviderVisible";
			$bool = false;
		}
		else
		{
			$secondName = foo($_POST["secondName"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $secondName))
			{
				$error_secondName = "Dozvoljeni su samo slova i razmaci!";
				$errorSlika_secondName = "errorProviderVisible";
				$bool = false;
			}
		}

		#---BROJ TELEFONA---
		if(empty($_POST["telephone"]))
		{
			$error_telephone = "Morate unijeti broj telefona!";
			$errorSlika_telephone = "errorProviderVisible";
			$bool = false;
		}
		else
		{
			$telephone = foo($_POST["telephone"]);
			if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $telephone))
			{
				$error_telephone = "Neispravan format unesenog telefona [pr : 063-111-111]";
				$errorSlika_telephone = "errorProviderVisible";
				$bool = false;
			}
		}

		#---EMAIL---
		if(empty($_POST["email"]))
		{
			$error_email = "Morate unijeti email!";
			$errorSlika_email = "errorProviderVisible";
			$bool = false;
		}
		else
		{
			$email = foo($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    $error_email  = "Neispravan format unesengo maila!";
                    $errorSlika_email = "errorProviderVisible";
                    $bool = false;
                }
		}

		#---BROJ MJESECI---
		if(empty($_POST["months"]))
		{
			$error_months = "Morate unijeti broj mjeseci u opsegu [1-12]";
			$errorSlika_months = "errorProviderVisible";
			$bool =false;
		}
		else
		{
			$months = foo($_POST["months"]);
			if(!is_numeric($months))
			{
				$error_months = "Unesena vrijednost nije broj!";
				$errorSlika_months = "errorProviderVisible";
				$bool = false;
			}
			else
			{
				$type = foo($_POST["type"]);
				if($type == "mala")
				{
					if($months < 1 || $months > 4)
					{
						$error_months = "Za malu pretplatu opseg mjeseci je [1-4]!";
						$errorSlika_months = "errorProviderVisible";
						$bool = false;
					}
				}
				else if ($type == "srednja")
				{
					if($months < 5 || $months > 8)
					{
						$error_months = "Za srednju pretplatu opseg mjeseci je [5-8]!";
						$errorSlika_months = "errorProviderVisible";
						$bool = false;
					}
				}
				else if ($type == "velika")
				{
					if($months < 9 || $months > 12)
					{
						$error_months = "Za veliku pretplatu opseg mjeseci je [8-12]!";
						$errorSlika_months = "errorProviderVisible";
						$bool = false;
					}
				}
			}
		}

		if(empty($_POST["message"]))
		{
			$error_message = "Morate unijeti poruku!";
			$errorSlika_message = "errorProviderVisible";
			$bool = false;
		}
		else
		{
			$message = foo($_POST["message"]);
		}
	}
	if(isset($_POST["resetAll"]))
	{
		$firstName = $secondName = $telephone = $email = $months = $message = "";
		$errorSlika_firstName = "errorProvider";
		$errorSlika_secondName = "errorProvider";
		$errorSlika_telephone = "errorProvider";
		$errorSlika_email = "errorProvider";
		$errorSlika_months = "errorProvider";
		$errorSlika_message = "errorProvider";

	}
	#---VALIDACIJA ZAHTJEVANIH POLJA---

	function foo($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	#---provjera validnosti forme ---

	if($bool)
	{
		$prikaziMiFormu = 'formaJeOK.php';
	}
	else
	{
		$prikaziMiFormu = 'formaNijeOK.php';
	}

	#---provjera validnosti forme ---

?>