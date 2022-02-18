window.onload = start;


function start() {
	var tresc_diva = "";
	var liczba= Math.floor(Math.random()*16+1);
	
	for (i = 0; i < 4; i++) {
		tresc_diva +=
		'<div class="product"><figure> <img src="foto/' +(liczba++)+
		'.jpg" alt="zdjecie produktu"><figcaption>Sprawdz cene</figcaption></figure></div>';
	}
	document.getElementById("container1").innerHTML = tresc_diva;

	zmienslajd();
}

var numer = Math.floor(Math.random()*3)+1;

function zmienslajd()
{
	numer++; if(numer>3) numer=1;

	var plik = "<img src=\"slajdy/slajd"+numer+".jpg\"/>";

	document.getElementById("slider").innerHTML=plik;

	setTimeout("zmienslajd()",8000);

}	