function DetaljnaNovost (novostID) 
{
	//funkcija koja preko ajaxa otvara stranicu na kojoj se nalazi
	//detaljnija novost ispod koje su komentari na tu novost.

	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{//anonimna
		if(ajax.readyState == 4 && ajax.status == 200) //OK
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
		}
		else if(ajax.readyState == 4 && ajax.status == 404) //NIJE OK
		{
			document.getElementById("onoZaAjax").innerHTML = "GREŠKA!!";
		}
	}

	var varijabla = "ajaxNovostDetaljnaSql.php?novostID="+novostID;
	ajax.open("POST", varijabla, true);
	ajax.send();
}

function DetaljnaKomentar (novostID)
{
	
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{//anonimna
		if(ajax.readyState == 4 && ajax.status == 200)//ok
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
		}
		else if (ajax.readyState == 4 && ajax.status == 404)//nije ok
		{
			document.getElementById("onoZaAjax").innerHTML = "GREŠKA!!";
		}
	}
	var varijabla = "sviKomentari.php?novostID="+novostID;
	ajax.open("POST", varijabla, true);
	ajax.send();
	/*var varijabla = "ajaxKomentariDetaljnaSql.php?novostID=" + novostID;
	ajax.open("POST", "ajaxKomentariDetaljnaSql.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("novostID=" + novostID );*/


}