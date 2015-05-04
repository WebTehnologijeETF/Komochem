var proizvodi = [];

//prikazivanje tabele
//---START OF prikaziTabelu---
function prikaziTabelu()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function ()//aMonimna funkcija
	{
		if(ajax.readyState == 4 && ajax.status == 200)//recimo da je ok
		{
			proizvodi = JSON.parse(ajax.responseText);
			document.getElementById("podaciDiv").innerHTML = createTable(proizvodi); //treba sad
																				  //napravit tu tabelicu
			var a = [];
			for(var i = 0; i < proizvodi.length; ++i)
			{
				a[proizvodi[i].id] = proizvodi[i];
				proizvodi = a;
			}																	  
		}

		if(ajax.readyState == 4 && ajax == 400) //nije ok
		{
			alert("Nema tog proizvoda");
		}

		if(ajax.readyState == 4 && ajax == 404) //takodjer nije ok
		{
			alert("Invalidni podaci!");
		}
	};
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16501", true);
	ajax.send();
}
//---END OF prikaziTabelu---

//---START OF createTable---
function createTable(pr)
{
	var t = " <table id = 'tabelaAjax'> ";
	t += " <tr id = 'firstOne'><td>ID</td><td>NAZIV</td><td>OPIS</td><td>KOLICINA</td>";
	t += " <td>DOSTUPNOST</td></tr> ";

	for (var i = 0; i < pr.length; ++i)
	{
		var p = pr[i];
		t += " <tr><td> " + p.id+ //naziv!!!
		" </td><td> " + p.naziv + //opis!!!
		" </td><td> " + p.opis + //kolicina!!!
		" </td><td> " + p.kolicina + //cijena!!!
		" </td><td> " + p.dostupnost + //dostupnost!!!
		" </td></tr> ";
	}
	t += " </table> ";
	return t;
}
//---END OF createTable---

//---START OF izvrsiAktivnost---
function izvrsiAktivnost()
{
	var pp = {};
	var naz = document.getElementById("nazivPr");
	var op = document.getElementById("opisP");
	var cij = document.getElementById("cijenaP");
	var dos = document.getElementById("dostupnostP");

	var pp = 
	{
		naziv : naz.value;
		opis : op.value;

	}
}
//---END OF izvrsiAktivnost---