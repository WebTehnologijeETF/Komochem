<!DOCTYPE HTML SYSTEM>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8">
		<title>KOMOCHEM d.o.o. Visoko</title>
		<link rel="stylesheet" type="text/css" href="stilTest.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
		<link href='http://fonts.googleapis.com/css?family=Hind:600' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<!--okvir-->

				<!--DIO ZA AJAX, treba izdvojiti-->

				<div class = "photoNovost">
					<img src="novosti.jpg" alt = "" width = "100%" height = "100%">
				</div>
				<!--<?php 
					#include 'prikaziNovosti.php';
				?>-->
					
				<div id = "novostiDiv" name = "novostiDiv">
					<?php 
						#echo $listaNovosti;
						$listaNovosti = '';
					 	$fajloviNovosti = glob("novosti/*.txt"); #svi fajlovi u folderu novosti sa
					 											 #ekstenzijom txt
					 	#treba sortirate fajlove po datumu i smjestiti ih u neki niz...
					 	$dates = array();#tu cemo smjestati datume iz fajlova
					 	foreach ($fajloviNovosti as $fajl) 
					 	{
					 		$sadrzajFajla = file($fajl);
					 		array_push($dates, $sadrzajFajla[0]);

					 	}

					 	#treba sortirati fajlove pomocu niza $dates
					 	#START SORT
					 	for($i = 0; $i < count($fajloviNovosti) - 1; $i++)
					 	{
					 		$dateOne = DateTime::createFromFormat('m-d-y H:i:s', $dates[$i]);
					 		$dateTwo = DateTime::createFromFormat('m-d-y H:i:s', $dates[$i + 1]);
					 		//if(new DateTime($dates[$i]) < new DateTime($dates[$i + 1]))
					 		if($dateOne < $dateTwo)
					 		{
					 			$v = $dates[$i + 1];
					 			$dates[$i + 1] = $dates[$i];
					 			$dates[$i] = $v;
					 			$v = $fajloviNovosti[$i + 1];
					 			$fajloviNovosti[$i + 1] = $fajloviNovosti[$i];
					 			$fajloviNovosti[$i] = $v;
					 		}
					 	}
					 	#END SORT


					 	foreach ($fajloviNovosti as $file) 
					 	{

					 		$content = file($file);
					 		$opisNovosti = "";
					 		$detaljanOpisNovosti = "";
					 		$bool = false;

					 		for($i = 4; $i < count($content); $i++)
					 		{
					 			if($content[$i] === "--\r\n")
					 			{
					 				$bool = true;
					 				continue;
					 			}

					 			if($bool == false)
					 			{
					 				$opisNovosti .= trim($content[$i]);
					 			}
					 			else if ($bool == true)
					 			{
					 				$detaljanOpisNovosti .= trim($content[$i]);
					 			}
					 		}
					 		//varijable
					 		$dateTime = "";
					 		$autorNovosti = "";
					 		$naslovNovosti = "";
					 		$slikaNovosti = "";
					 		//popunjavanje varijabli if fajla
					 		$dateTime = trim($content[0]);
					 		$autorNovosti = trim($content[1]);
					 		$naslovNovosti = trim(ucfirst(strtolower($content[2])));
					 		$slikaNovosti = trim($content[3]);
					 		if($bool == true)//ima detaljan
					 		{
					 			$opsirnije = "<a href = \"#\" class = \"detalis\" onclick = \"return foo3
					 			('".$dateTime. "','" .$autorNovosti. "','" .$naslovNovosti. "','" .$opisNovosti. "','" .$detaljanOpisNovosti. "','" .$slikaNovosti."');\" >
					 				
					 				Opsirnije...
					 				</a>";
					 			//$opsirnije = '<a href = "#" class = "detalis" onclick = "foo3(); ">Opsirnije...</a>';
					 		}
					 		else
					 		{
					 			$opsirnije = "";
					 		}


					 		echo '<div class = "novostPolje"> 
					 			<div class = "poljeSlika"><img src = "'.$slikaNovosti.'"></div>
					 			<div class = "poljeTekst">'.$dateTime.'<br>'.$autorNovosti.'<br>'.$naslovNovosti.$opisNovosti.'<br>'.$opsirnije.'</div>
					 		</div>';
					 	}
					?>
					<!--
					<div class = "novostPolje">
						
						<div class = "poljeSlika" name = "poljeSlika">
							
						</div>
						
						<div class = "poljeTekst" name = "poljeTekst">
							neki tekstic
						</div>
					</div>

					<div class = "novostPolje">
						
						<div class = "poljeSlika" name = "poljeSlika">
							
						</div>
						
						<div class = "poljeTekst" name = "poljeTekst">
							neki tekstic
						</div>
					</div>

					<div class = "novostPolje">
						
						<div class = "poljeSlika" name = "poljeSlika">
							
						</div>
						
						<div class = "poljeTekst" name = "poljeTekst">
							neki tekstic
						</div>
					</div>

					<div class = "novostPolje">
						
						<div class = "poljeSlika" name = "poljeSlika">
							
						</div>
						
						<div class = "poljeTekst" name = "poljeTekst">
							neki tekstic
						</div>
					</div> 
					-->

				</div>

				<!--KRAJ DIJELA ZA AJAX STO TREBA IZDVOJITI-->
	</body>

</html>