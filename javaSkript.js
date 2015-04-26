var Meni;
var Timer;
var bool = 0; //0 zatvoreno, 1 otvoreno 
document.onclick = zatvori();
function OtvoriMeni(subMeni)
{

	var tab = document.getElementById('proizv');
	if(Boolean(bool) == 0)//ako je zatvoreno
	{
		document.getElementById('proizv').style.backgroudColor = "yellow";
		document.getElementById('strelica').innerHTML = "&#9650";
		document.getElementById('submen').style.visibility = "visible";
		bool = 1;			
		
	}
	else if (Boolean(bool) == 1)//ako je otvoreno
	{
		document.getElementById('proizv').style.backgroudColor = "white";
		document.getElementById('submen').style.visibility = "hidden";
		document.getElementById('strelica').innerHTML = "&#9660";
		bool = 0;
		
	}	
	var elem = document.querySelector ('#proizv');
document.body.addEventListener('click', function(e)
{
	if(e.target == elem)
		{console.log("Clicked element");}
	else 
		{console.log("Nedje drugo");}
}
	) ;


}

function zatvori()
{
	document.getElementById('submen').style.visibility = "hidden";
}

/*function validiraj()
{
	var e = document.forms["formz"]["fname"].value;
	/*atpos = emailV.indexOf("@");
	dotpos = emailV.indexOf(".");
	if(atpos < 1 || (atpos - dotpos < 2))
	{
		alert("Molim ponovite");
		document.forma.email.focus();
		return false;
	}*/
	/*if(e == null || e == "")
	{
		alert("Ne valja");
		//document.forms["forma"]["email"].focus();
		return false;
	}
	return (true);
}*/
function aa ()
{
	/*var i = document.createElement('img');
	i.src = "error.png";
	document.getElementById("errorName").appendChild(i);
	return false;*/
	

}

function ValidirajFormu()
{
	//var name = document.getElementById("fname").value;
	var ime = document.forms["forma"]["fname"].value;
	if(ime == null || ime == "")
	{
		document.getElementById("errorName").style.visibility = "visible";
		document.getElementById("fname").focus();
		return false;
	}
	else
	{
		document.getElementById("errorName").style.visibility = "hidden";
	}

	var prezime = document.forms["forma"]["lname"].value;
	if(prezime == "" || prezime == null)
	{
		document.getElementById("errorSurname").style.visibility = "visible";
		document.getElementById("lname").focus();
		return false;
	}
	else
	{
		document.getElementById("errorSurname").style.visibility = "hidden";
	}

	/*var eml = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	if(!eml.test(document.getElementById('em').value))
	{
		alert("a-a");
		return false;
	}*/

	var emailReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	if(!emailReg.test(document.getElementById('em').value))
	{
		document.getElementById("errorEmail").style.visibility = "visible";
		document.getElementById("em").focus();
		return false;
	}
	else
	{
		document.getElementById("errorEmail").style.visibility = "hidden";
	}

	var password = document.forms["forma"]["pass"].value;
	if(password == "" || password == null)
	{
		document.getElementById("errorPass").style.visibility = "visible";
		document.getElementById("pass").focus();
		return false;
	}
	else
	{
		document.getElementById("errorPass").style.visibility = "hidden";
	}



	var telefonReg = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{3})$/;
	if(!telefonReg.test(document.getElementById('tel').value))
	{
		document.getElementById("errorTel").style.visibility = "visible";
		document.getElementById("tel").focus();
		return false;
	}
	else
	{
		document.getElementById("errorTel").style.visibility = "hidden";
	}


	if(document.getElementById('mala').selected == true)
	{
		var brm = document.forms["forma"]["brMjes"].value;
		if(brm == "" || brm == null)
		{
			document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Morate unijet broj mjeseci pretplate";
			return false;
		}
	   /* if (brm !=  1 || brm != 2 || brm != 3 || brm != 4)
		{
			/*document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Opseg mjeseci za malu pretplatu je [1-4]";
			return false;
			alert("mala");
			return false;
		}*/
		if(brm == 1 || brm == 2 || brm == 3 || brm == 4)
		{
			document.getElementById('errorBrMjes').style.visibility = "hidden";
		}
		else 
		{
			document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Opseg mjeseci za malu pretplatu je [1-4]";
			return false;
		}
	}

	else if(document.getElementById('srednja').selected == true)
	{
		var brm = document.forms["forma"]["brMjes"].value;
		if(brm == "" || brm == null)
		{
			document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Morate unijet broj mjeseci pretplate";
			return false;
		}
		if (brm ==5 || brm ==6 || brm == 7 || brm == 8)
		{
			document.getElementById('errorBrMjes').style.visibility = "hidden";
			/*document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Opseg mjeseci za srenju pretplatu je [5-8]";
			return false;*/
		}
		else 
		{
			document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Opseg mjeseci za srenju pretplatu je [5-8]";
			return false;
		}
	}

	else if(document.getElementById('velika').selected == true)
	{
		var brm = document.forms["forma"]["brMjes"].value;
		if(brm == "" || brm == null)
		{
			document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Morate unijet broj mjeseci pretplate";
			return false;
		}
		if (brm == 9 || brm == 10 || brm == 11 || brm == 12)
		{
			/*document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Opseg mjeseci za malu pretplatu je [9-12]";
			return false;*/
			document.getElementById('errorBrMjes').style.visibility = "hidden";
		}
		else 
		{
			document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Opseg mjeseci za veliku pretplatu je [9-12]";
			return false;
		}
	}



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
	ajax.open("GET", "ajaxPocetna.html", true);
	ajax.send();
}


function ajaxOnama()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
		}
	}
	ajax.open("GET", "ajaxO_nama.html", true);
	ajax.send();;
}

function ajaxKontakt()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
		}
	}
	ajax.open("GET", "ajaxKontakt.html", true);
	ajax.send();;
}

function ajaxLjepila()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajakLjepila.html", true);
	ajax.send();;
}

function ajaxBojeUn()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxBojeUnutra.html", true);
	ajax.send();;
}

function ajaxBojeFas()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxBojeFasade.html", true);
	ajax.send();;
}

function ajaxStir()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxStiropor.html", true);
	ajax.send();;
}

function ajaxFas()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxFasade.html", true);
	ajax.send();;
}

function ajaxDrvoMetal()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxBojeMetal.html", true);
	ajax.send();;
}

function ajaxPodloge()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxPodloge.html", true);
	ajax.send();;
}

function ajaxOstale()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxOstale.html", true);
	ajax.send();
}


function ajaxSavjet()
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxSavjeti.html", true);

	ajax.send();
}

function ajaxRef()
{

	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxR.html", true);

	ajax.send();
}

function ajaxDown()
{

	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxDownload.html", true);

	ajax.send();
}

function ajaxPrij()
{

	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			document.getElementById("onoZaAjax").innerHTML = ajax.responseText;
			//document.getElementById("slikaLjepila").style.zIndex = "-1";
		}
	}
	ajax.open("GET", "ajaxPrijatelj.html", true);

	ajax.send();
}
