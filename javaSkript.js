var Meni;
var Timer;
var bool = 0; //0 zatvoreno, 1 otvoreno 
var proizvodi=[];
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

//VALIDIRANJE KONTAKT FORME DA LI SU SVA POLJA POPUNJENA I DA LI SU ISPRAVNO POPNJENa
function ValidirajKontaktFormu()
{
	var bb = 0;
	var i = document.getElementById("ime").value;
	var ib  = document.getElementById("ime");
	if(i == "" || i == null)
	{
		document.getElementById("errorProviderIme").style.visibility = "visible";
		ib.style.borderWidth = "1px";
		ib.style.borderColor = "red";
		ib.style.borderStyle = "solid;"
		document.getElementById("formIme").title = "Morate unijeti ime!";
		document.getElementById("ime").focus();
		return false;
	}
	else
	{
		document.getElementById("errorProviderIme").style.visibility  = "hidden";
		ib.style.borderWidth = "0px";
		bb = 1;
	}

	var p = document.getElementById("prezime").value;
	var pb = document.getElementById("prezime");
	if(p == "" || p == null)
	{
		document.getElementById("errorProviderPrezime").style.visibility = "visible";
		pb.style.borderWidth = "1px";
		document.getElementById("formPrezime").title = "Morate unijeti prezime!";
		document.getElementById("prezime").focus();
		return false;
	}
	else
	{
		document.getElementById("errorProviderPrezime").style.visibility = "hidden";
		pb.style.borderWidth = "0px";
		bb = 1;
	}

	var t = document.getElementById("telefon").value;
	var tb = document.getElementById("telefon");
	if(t == "" || t == null)
	{
		document.getElementById("errorProviderTelefon").style.visibility = "visible";
		tb.style.borderWidth = "1px";
		document.getElementById("formTelefon").title = "Morate unijeti telefon!";
		document.getElementById("telefon")-focus();
		return false;
	}
	else
	{
		document.getElementById("errorProviderTelefon").style.visibility = "hidden";
		tb.style.borderWidth = "0px";
		bb = 1;
	}

	var telefonReg = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{3})$/;
	if(!telefonReg.test(document.getElementById('telefon').value))
	{
		document.getElementById("errorProviderTelefon").style.visibility = "visible";
		tb.style.borderWidth = "1px";
		document.getElementById("formTelefon").title = "Nije ispravan format telefon";
		document.getElementById("telefon")-focus();
		return false;
	}
	else
	{
		document.getElementById("errorProviderTelefon").style.visibility = "hidden";
		tb.style.borderWidth = "0px";
		bb = 1;
	}

	var e = document.getElementById("email").value;
	var eb  = document.getElementById("email");
	if(e == "" || e == null)
	{
		document.getElementById("errorProviderEmail").style.visibility = "visible";
		eb.style.borderWidth = "1px";
		document.getElementById("formemail").title = "Morate unijeti email!";
		document.getElementById("email")-focus();
		return false;			
	}
	else
	{
		document.getElementById("errorProviderEmail").style.visibility = "hidden";
		eb.style.borderWidth = "0px";
		bb = 1;
	}

	var emailReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	if(!emailReg.test(document.getElementById('email').value))
	{
		document.getElementById("errorProviderEmail").style.visibility = "visible";
		eb.style.borderWidth = "1px";
		document.getElementById("formemail").title = "Nije ispravan format maila";
		document.getElementById("email")-focus();
		return false;	
	}
	else
	{
		document.getElementById("errorProviderEmail").style.visibility = "hidden";
		eb.style.borderWidth = "0px";	
		bb = 1;
	}

	var brojMjeseci = document.getElementById("mjeseci").value;
	var bbm = document.getElementById("mjeseci");
	if(brojMjeseci == "" || brojMjeseci == null)
	{
		document.getElementById("errorProviderMjeseci").style.visibility = "visible";
		bbm.style.borderWidth = "1px";
		document.getElementById("formbrojMjeseci").title = "Morate unijeti broj mjeseci";
		document.getElementById("mjeseci").focus();
		return false;
	}
	else
	{
		document.getElementById("errorProviderMjeseci").style.visibility = "hidden";
		bbm.style.borderWidth = "0px";
		bb = 1;
	}
	

	if(document.getElementById('mala').selected == true)
	{
		var brojMjeseci = document.getElementById("mjeseci").value;
		//var brm = document.forms["forma"]["brMjes"].value;
		if(brojMjeseci == "" || brojMjeseci== null)
		{
			document.getElementById("errorProviderMjeseci").style.visibility = "visible";
			bbm.style.borderWidth = "1px";
			document.getElementById("formbrojMjeseci").title = "Morate unijeti broj mjeseci";
			document.getElementById("mjeseci").focus();
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
		if(brojMjeseci == 1 || brojMjeseci == 2 || brojMjeseci == 3 || brojMjeseci == 4)
		{
			document.getElementById("errorProviderMjeseci").style.visibility = "hidden";
			bbm.style.borderWidth = "0px";
			bb = 1;
		}
		else 
		{
			document.getElementById("errorProviderMjeseci").style.visibility = "visible";
			bbm.style.borderWidth = "1px";
			document.getElementById("formbrojMjeseci").title = "Opseg mjeseci za mala pretplatu je 1-4";
			document.getElementById("mjeseci").focus();
			return false;
		}
	}

	else if(document.getElementById('srednja').selected == true)
	{
		var brojMjeseci = document.getElementById("mjeseci").value;
		if(brojMjeseci == "" || brojMjeseci == null)
		{
			document.getElementById("errorProviderMjeseci").style.visibility = "visible";
			bbm.style.borderWidth = "1px";
			document.getElementById("formbrojMjeseci").title = "Morate unijeti broj mjeseci";
			document.getElementById("mjeseci").focus();
			return false;
		}
		if (brojMjeseci ==5 || brojMjeseci ==6 || brojMjeseci == 7 || brojMjeseci == 8)
		{
			document.getElementById("errorProviderMjeseci").style.visibility = "hidden";
			bbm.style.borderWidth = "0px";
			bb = 1;
			/*document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Opseg mjeseci za srenju pretplatu je [5-8]";
			return false;*/
		}
		else 
		{
			document.getElementById("errorProviderMjeseci").style.visibility = "visible";
			bbm.style.borderWidth = "1px";
			document.getElementById("formbrojMjeseci").title = "Opseg mjeseci za srednju pretplatu je 5-8";
			document.getElementById("mjeseci").focus();
			return false;
		}
	}

	else if(document.getElementById('velika').selected == true)
	{
		var brojMjeseci = document.getElementById("mjeseci").value;
		if(brojMjeseci == "" || brojMjeseci == null)
		{
			document.getElementById("errorProviderMjeseci").style.visibility = "visible";
			bbm.style.borderWidth = "1px";
			document.getElementById("formbrojMjeseci").title = "Morate unijeti broj mjeseci";
			document.getElementById("mjeseci").focus();
			return false;
		}
		if (brojMjeseci == 9 || brojMjeseci == 10 || brojMjeseci == 11 || brojMjeseci == 12)
		{
			/*document.getElementById('errorBrMjes').style.visibility = "visible";
			document.getElementById('errorBrMjes').title = "Opseg mjeseci za malu pretplatu je [9-12]";
			return false;*/
			document.getElementById("errorProviderMjeseci").style.visibility = "hidden";
			bbm.style.borderWidth = "0px";
			bb = 1;
		}
		else 
		{
			document.getElementById("errorProviderMjeseci").style.visibility = "visible";
			bbm.style.borderWidth = "1px";
			document.getElementById("formbrojMjeseci").title = "Opseg mjeseci za srednju pretplatu je 5-8";
			document.getElementById("mjeseci").focus();
			return false;
		}
	}

	var o = document.getElementById("opstina").value;
	var ob = document.getElementById("opstina");
	if(o == "" || o == null)
	{
		document.getElementById("errorProviderOpcina").style.visibility = "visible";
		ob.style.borderWidth = "1px";
		document.getElementById("formOpcina").title = "Morate unijeti općinu odakle šaljete poruku";
		document.getElementById("opstina").focus();
		return false;
	}
	else
	{
		document.getElementById("errorProvideropscina").visibility = "hidden";
		ob.style.borderWidth = "0px";
		bb = 1;
	}

	var m = document.getElementById("inputMjesto").value;
	var mb = document.getElementById("inputMjesto");
	if(m == "" || m == null)
	{
		document.getElementById("errorProviderMjesto").style.visibility = "visible";
		mb.style.borderWidth = "1px";
		document.getElementById("formMjesto").title = "Morate unijeti mjesto u navedenoj općini!";
		document.getElementById("inputMjesto").focus();
		return false;
	}
	else
	{
		document.getElementById("errorProviderMjesto").style.visibility = "visible";
		mb.style.borderWidth = "0px";
		bb = 1;
	}

}

function provjeriGa()
{
	var a = document.getElementById("opstina").value;
	var b = document.getElementById("inputMjesto").value;

	var ab = document.getElementById("opstina");
	var bbb = document.getElementById("inputMjesto");
	//document.getElementById("sendPoruka").disabled = false;
	if(a == "" || a == null)
	{
		document.getElementById("errorProviderOpcina").style.visibility = "visible";
		ab.style.borderWidth = "1px";
		document.getElementById("formOpcina").title = "Morate unijeti opcinu!";
		document.getElementById("opstina").focus();
		return false;
	}
	else
	{
		document.getElementById("errorProviderOpcina").style.visibility = "hidden";
		ab.style.borderWidth = "0px";
	}

	if(b == "" || b == null)
	{
		document.getElementById("errorProviderMjesto").style.visibility = "visible";
		bbb.style.borderWidth = "1px";
		document.getElementById("formMjesto").title = "Morate unijeti mjesto!";
		document.getElementById("inputMjesto").focus();
		return false;
	}
	else
	{
		document.getElementById("errorProviderMjesto").style.visibility = "hidden";
		bbb.style.borderWidth = "0px";
	}
	//document.getElementById("sendPoruka").disabled = false;
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{

		if(ajax.readyState == 4 && ajax.status == 200)
		{
			
			var s = JSON.parse(ajax.responseText);

			if(Object.keys(s)[0] == "ok")
			{
				//alert("OK");
				document.getElementById("sendPoruka").disabled = false;
				document.getElementById("errorProviderMjesto").style.visibility = "hidden";
				bbb.style.borderWidth = "0px";
				document.getElementById("errorProviderOpcina").style.visibility = "hidden";
					ab.style.borderWidth = "0px";
			}
			else if (Object.keys(s)[0] == "greska")
			{
				//alert("NIJE OK");
				var x = s["greska"].trim();
				if(x === "Mjesto nije iz date općine")
				{
					document.getElementById("errorProviderMjesto").style.visibility = "visible";
					bbb.style.borderWidth = "1px";
					document.getElementById("formMjesto").title = "Mjesto nije iz date općine";
					document.getElementById("inputMjesto").focus();
					return false;
				}
				if(x === "Nepostojeća općina")
				{
					document.getElementById("errorProviderOpcina").style.visibility = "visible";
					ab.style.borderWidth = "1px";
					document.getElementById("formOpcina").title = "Nepostojeća općina";
					document.getElementById("opstina").focus();
					return false;
				}
				if(x === "Nepostojeće mjesto")
				{
					document.getElementById("errorProviderMjesto").style.visibility = "visible";
					bbb.style.borderWidth = "1px";
					document.getElementById("formMjesto").title = "Nepostojeće mjesto!";
					document.getElementById("inputMjesto").focus();
				}

			}

			/*if(Object.keys(s)[0] == "ok")
			{
				alert("OK!");
				document.getElementById("sendPoruka").disabled = false;
			}
			else if (Object.keys(s)[0] == "greska")
			{
				document.getElementById("errorProviderMjesto").style.visibility = "visible";
				bbb.style.borderWidth = "1px";
				document.getElementById("formMjesto").title = "Morate unijeti mjesto!";
				document.getElementById("inputMjesto").focus();
				return false;
			}*/
		}
	}
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/mjesto_opcina.php?opcina=" + a + "&mjesto=" + b, true);
	ajax.send();
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

	var mjesto = document.forms["forma"]["mjesto"].value;
	if(mjesto == "" || mjesto == null)
	{
		document.getElementById("errorPlace").style.visibility = "visible";
		document.getElementById("mjesto").focus();
		return false;
	}
	else
	{
		document.getElementById("errorPlace").style.visibility = "hidden";
	}

	var opc = document.forms["forma"]["opcina"].value;
	if(opc == "" || opc == null)
	{
		document.getElementById("errorRegion").style.visibility = "visible";
		document.getElementById("opcina").focus();
		return false;
	}
	else
	{
		document.getElementById("errorRegion").style.visibility = "hidden";
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
	ajax.send();
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
	ajax.send();
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



function dizejblaj()
{
	document.getElementById("sendPoruka").disabled = true;
}
//START OF FOO1 ----------------------------------------------------
function foo1() //za prikazivanje tabele 
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
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16472", true);//probaaaa
	//ajax.open("GET", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16501", true);
	ajax.send();
	return false;
}
//END OF FOO1 ----------------------------------------------------------------

//START OF CREATETABLE(PR)----------------------------------------------------------------
var proizvodi=[];
function createTable(pr)
{
	var s = " <table id = 'tabela'> ";
	s += " <tr id = 'firstOne'><td>ID</td><td>NAZIV</td><td>OPIS</td><td>KOLICINA</td>";
	s += " <td>DOSTUPNOST</td></tr> ";

	for (var i = 0; i < pr.length; ++i)
	{
		var p = pr[i];
		s += " <tr><td> " + p.id+ //naziv!!!
		" </td><td> " + p.ime + //opis!!!
		" </td><td> " + p.prezime + //kolicina!!!
		" </td><td> " + p.prisustvo + //cijena!!!
		" </td><td> " + p.zadace + //dostupnost!!!
		" </td></tr> ";
	}
	s += " </table> ";
	return s;
}
//END OF CREATETABLE(PR)----------------------------------------------------------------

function foo2()
{
	var id = parseInt(document.getElementById("idP").value);
	var idx = -1;
	for (var z = 0; z < proizvodi.length; ++z)
	{
		if(proizvodi[z].id == id)
			{
				idx = z; 
				break;
			}
	}
	var akcija = document.getElementById("aktivnosti").value;
	if(akcija === "dodavanje")
		idx = 1;
	if(idx === -1)
	{
		alert("Nema s tim id-om");
		return 0;
	}

	var ajax = new XMLHttpRequest();
	var vv = "";
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4 && ajax.status == 200)
		{
			alert("OK");
		}

		if(ajax.readyState == 4 && ajax.status == 404)
		{
			alert("Nepostojeći proizvod");
		}

		if(ajax.readyState == 4 && ajax.status == 400)
		{
			alert("Neispravno");
		}
	};

	//ajax.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16501", true);
	ajax.open("POST", "http://zamger.etf.unsa.ba/studenti.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	//proizvodi[idx].id = document.getElementById("idP").value;
	//proizvodi[idx].naziv = document.getElementById("nazivPr").value;
	//proizvodi[idx].opis = document.getElementById("opisP").value;
	//proizvodi[idx].kolicina = document.getElementById("kolicinaP").value;
	//proizvodi[idx].dostupnost = document.getElementById("dostupnostP").value;
	proizvodi[idx].id = document.getElementById("idP").value;
	proizvodi[idx].ime = document.getElementById("nazivPr").value;
	proizvodi[idx].prezime = document.getElementById("opisP").value;
	proizvodi[idx].prisustvo = document.getElementById("kolicinaP").value;
	proizvodi[idx].zadace = document.getElementById("dostupnostP").value;
	//ajax.send("akcija=" + akcija + "&brindexa=16501&proizvod=" + JSON.stringfy(proizvodi[idx]));
	ajax.send("akcija=" + akcija + "&student=" + JSON.stringfy(proizvodi[idx]));
}
