<?php
			require('sendgrid-php/sendgrid-php.php');
			ini_set('display_errors', 'On');
			error_reporting(E_ALL);
			if($_POST)
			 {
				
					$firstName = $_POST['firstName'];
					$secondName = $_POST['secondName'];
					$email = $_POST['email'];
					$poruka = $_POST['message'];
					$telephone = $_POST['telephone'];
					$type= $_POST['type'];
					$months = $_POST['months'];
					
						$eol = PHP_EOL;
						
						$message = "Ime i prezime : " .$firstName." ".$secondName."\r\n"."Email : ".$email."\r\n"."Telefon : ".$telephone."\r\n"."Tip :".$type."\r\n"."Broj mjeseci : ".$months."\r\n"."Poruka : ".$poruka; 
                        
						$service_plan_id = "sendgrid_80712"; // your OpenShift Service Plan ID
						$account_info = json_decode(getenv($service_plan_id), true);
						$sendgrid = new SendGrid($account_info['username'], $account_info['password']);
						$email    = new SendGrid\Email();
						$email->addTo("farisodobasic@gmail.com")
							  ->addCc("fodobasic1@etf.unsa.ba")
						      ->setReplyTo($email)
						      ->setFrom($email)
						      ->setSubject("Kontakt forma message")
						      ->setText($message);
						try
						{
							$sendgrid->send($email);
							echo '<script>alert("Mail uspješno poslan! Hvala što ste nas kontaktirali");</script>';
							
						}
						catch (\SendGrid\Exception $e)
						{
							echo $e->getCode();
						    foreach($e->getErrors() as $er) {
						        echo $er;
    						}
						}
			          	/*$eol = PHP_EOL;
			          	$from = $email;
			          	$subject = "Kontakt forma message";
			          	/*komentar*/
			          	/*$separator = md5(time());
			          	// glavni headeri
			          	$headers  = "From: ".$from.$eol;
			          	$headers .= "Reply-To: ".$from.$eol;
			          	$headers .= "MIME-Version: 1.0".$eol;
			          	$headers .= "Cc: vljubovic@etf.unsa.ba".$eol;
			          	$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol;
			          	$headers .= "Content-Transfer-Encoding: 7bit".$eol;
			          	$headers .= "This is a MIME encoded message.".$eol.$eol;
			          	// message
			          	$headers .= "--".$separator.$eol;
			          	$headers .= "Content-Type: text/html; charset=\"UTF-8\"".$eol;
			          	$headers .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
			          	$headers .= $message.$eol.$eol;		
			          	// send message
			          	//mail("emir.dj93@gmail.com ", $subject, "", $headers);
			          	*/
					
				
			}
		?>