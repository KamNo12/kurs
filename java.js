window.onload = zmienslajd;




var numer = Math.floor(Math.random()*3)+1;

function zmienslajd()
{
	numer++; if(numer>3) numer=1;

	var plik = "<img src=\"slajdy/slajd"+numer+".jpg\"/>";

	document.getElementById("slider").innerHTML=plik;

	setTimeout("zmienslajd()",8000);

}	