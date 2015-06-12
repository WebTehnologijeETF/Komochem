function vratiSe()
{
	ajaxPocetna();	
}

function ajaxPocetna()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
		}
	}
	ajax.open("GET", "pocetna.html", true);
	ajax.send();
}

function deleteUser()
{
	var ajax = new XMLHttpRequest();
	var s;
	ajax.onreadystatechange = function ()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			//document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			var t = ajax.responseText;
			var kom = JSON.parse(t);
			var korisnickoIme = "";
			var id = "";
			s =  '<div class = "formaBrisanjeKorisnika">'
			for (var i = 0; i < kom.korisnik.length; i++)
			{
				var korisnik = kom.korisnik[i];
				korisnickoIme = korisnik.username;
				id = korisnik.id;
				s = s + '<div class = "korisnikPodaci">' 
						+'<form = id = "podatak">'
						+	'Korisničko ime : <input type = "text" value = "'+korisnickoIme+'" class = "unos" disabled>'
						+	 '<input type = "hidden" value = "'+id+'">'
						+	'<input type = "button" value = "Obriši!" id = "log" onclick = "obrisi('+id+')">'   
						+ '</form>'
						+ '</div>';  	
			}
			s = s + '</div>'
			document.getElementById("onoZa").innerHTML = s;

		}
	}
	ajax.open("GET", "PHP/korisniciWebServis.php", true);
	ajax.send();
}

function obrisi(idKorisnika)
{
	//alert(idKorisnika);
	var s = "";
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			s = s + 'Korisnik je uspjesno obrisan!';
			s = s + '<br><br><form>'+
					 	'<input type = "button" class = "logButton" value = "Vrati se na pocetnu!" onclick = "vratiSe();">'+
				 	'</from>';
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
		}
	}
	ajax.open("DELETE", "PHP/korisniciWebServis.php?korisnikID="+idKorisnika, true);
	ajax.send();
}