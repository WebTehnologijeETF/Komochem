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
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16472", true);
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
function validiraj()
{

	var id = document.getElementById("idP").value;
	var naziv = document.getElementById("nazivPr").value;
	var opis = document.getElementById("opisP").value;
	var dostupnost = document.getElementById("dostupnostP").value;
	if(id == "" || id == null)
	{
		document.getElementById("idP").style.borderWidth = "1px";
		document.getElementById("idP").style.borderStyle = "solid";
		document.getElementById("idP").style.borderColor = "red";
		document.getElementById("idP").title = "Morate unijeti ID";
	}
	else 
	{
		document.getElementById("idP").style.borderWidth = "0px";
	}


	if(naziv = "" || naziv == null)
	{
		document.getElementById("nazivPr").style.borderWidth = "1px";
		document.getElementById("nazivPr").style.borderStyle = "solid";
		document.getElementById("nazivPr").style.borderColor = "red";
		document.getElementById("nazivPr").title = "Morate unijeti naziv";
	}
	else
	{
		document.getElementById("nazivPr").style.borderWidth = "0px";
	}

	if(opis == "" || opis == null)
	{
		document.getElementById("opisP").style.borderWidth = "1px";
		document.getElementById("opisP").style.borderStyle = "solid";
		document.getElementById("opisP").style.borderColor = "red";
		document.getElementById("opisP").title = "Morate unijeti opis";
	}
	else
	{
		document.getElementById("opisP").style.borderWidth = "0px";
	}

	if(dostupnost == "" || dostupnost == null)
	{
		document.getElementById("dostupnostP").style.borderWidth = "1px";
		document.getElementById("dostupnostP").style.borderStyle = "solid";
		document.getElementById("dostupnostP").style.borderColor = "red";
		document.getElementById("dostupnostP").title = "Morate unijeti dostupnost";
	}
	else
	{
		document.getElementById("dostupnostP").style.borderWidth = "0px";
	}


}
//---START OF izvrsiAktivnost---
function izvrsiAktivnost()
{
	/*var pp = {};
	var naz = document.getElementById("nazivPr");
	var op = document.getElementById("opisP");
	var cij = document.getElementById("cijenaP");
	var dos = document.getElementById("dostupnostP");*/
	validiraj();
	var i = - 1;
	var ajax = new XMLHttpRequest();
	var akc = document.getElementById("aktivnosti").value.toLowerCase();

	if(akc == "dodavanje")
	{
		i = 0;
	}
	if(i == - 1)
	{
		return 0;
	}
	var proizvodiNiz = [];

	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
				//prikaz();
				alert("Uspjesno dodano!");
		}
		if(ajax.readyState == 4 && ajax.status == 404)
		{
			alert("Ne postoji proizvod");
		}
		if(ajax.readyState == 4 && ajax.status == 400)
		{
			alert("Neispravni podaci");
		}
	};
	ajax.open ("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

	var ajdi = parseInt(document.getElementById("idP").value);
	var naz = document.getElementById("nazivPr").value;
	var op = document.getElementById("opisP").value;
	var cij = document.getElementById("cijenaP").value;
	var dos = document.getElementById("dostupnostP").value;

	proizvodiNiz = {id: ajdi, naziv:naz, opis:op, dostupnost:dos};
	ajax.send("brindexa=16501&proizvod=" + JSON.stringify(proizvodiNiz) + "&akcija=dodavanje");

}
//---END OF izvrsiAktivnost---

function prikaz() //za prikazivanje tabele 
{
	var ajax = new XMLHttpRequest();
	var vv = " ";
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)//ok
		{
			if(ajax.responseText != vv)
			{
				vv = ajax.responseText;
				proizvodi = JSON.parse(vv);
				document.getElementById("podaciDiv").innerHTML = createTable(proizvodi);		
			}
			
		}

		if(ajax.readyState == 4 && ajax.status == 404)//nije ok
		{
			alert("Nepostojeći proizvod!");
		}

		if(ajax.readyState == 4 && ajax.status == 400)//nije ok
		{
			alert("Neispravni podaci!");
		} 

	};
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16501", true);//probaaaa
	//ajax.open("GET", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16501", true);
	ajax.send();
	return false;
}

