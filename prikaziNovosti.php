<?php 
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
 				$opisNovosti .= "<br>".$content[$i];
 			}
 			else if ($bool == true)
 			{
 				$detaljanOpisNovosti .= "<br>".$content[$i];
 			}
 		}
 		//varijable
 		$dateTime = "";
 		$autorNovosti = "";
 		$naslovNovosti = "";
 		$slikaNovosti = "";
 		//popunjavanje varijabli if fajla
 		$dateTime = $content[0];
 		$autorNovosti = $content[1];
 		$naslovNovosti = ucfirst(strtolower($content[2]));
 		$slikaNovosti = $content[3];
 		if($bool == true)//ima detaljan
 		{
 			$opsirnije = '<a href = "#" class = "detalis" onclick = " return foo3('.$dateTime.','.$autorNovosti.','.$naslovNovosti.','.$opisNovosti.','.$detaljanOpisNovosti.','.$slikaNovosti.'); ">Opsirnije...</a>';
 			//$opsirnije = '<a href = "#" class = "detalis" onclick = "foo3(); ">Opsirnije...</a>';
 		}
 		else
 		{
 			$opsirnije = "";
 		}


 		$listaNovosti .= '<div class = "novostPolje"> 
 			<div class = "poljeSlika"><img src = "'.$slikaNovosti.'"></div>
 			<div class = "poljeTekst">'.$dateTime.'<br>'.$autorNovosti.'<br>'.$naslovNovosti.$opisNovosti.'<br>'.$opsirnije.'</div>
 		</div>';
 	}
?>