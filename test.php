<!DOCTYPE SYSTEM html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <title>Tutorijal 6, ¸Zadatak1</title>
	</head>

	<body>

		<form action = "test.php" method = "get">
			<input type = "text" id = "prvi" name = "prvi"> <br>
			<select class = "inputi" id  = "type" name = "type">
				<option id = "mala" value = "mala">Mala</option>
				<option id = "srednja" value = "srednja">Srednja</option>
				<option id = "velika" value = "velika">Velika</option>
			</select>
			
			<br>
			<input type = "submit" id = "dugme" name = "dugme" on>
		</form>
		<?php
				if(isset($_REQUEST['prvi']) )
				{
					$f = $_REQUEST['prvi'];
					$s = $_REQUEST['type'];

					$to = "farisodobasic@gmail.com";
					$subject = "My subject";
					$txt = "Hello world!";
					$headers = "From: webmaster@example.com" . "\r\n" .
					"CC: somebodyelse@example.com";

					mail($to,$subject,$txt,$headers);
					

				}
			?>
	</body>
</html>