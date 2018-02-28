function pokaz1()
{
	document.getElementById('z_kompem').style.display='block';
	document.getElementById('z_graczem').style.display='block';
	document.getElementById('text').style.display='block';
	document.getElementById('powrot1').style.display='block';
};
function znik1()
{
	document.getElementById('z_kompem').style.display='none';
	document.getElementById('z_graczem').style.display='none';
	document.getElementById('text').style.display='none';
	document.getElementById('powrot1').style.display='none';
};
function pokaz2()
{
	document.getElementById('powrot3').style.display='block';
	document.getElementById('tekst1').style.display='block';
	document.getElementById('latwy').style.display='block';
	document.getElementById('normalny').style.display='block';
	document.getElementById('trudny').style.display='block';
};
function znik2()
{
	document.getElementById('powrot3').style.display='none';
	document.getElementById('tekst1').style.display='none';
	document.getElementById('latwy').style.display='none';
	document.getElementById('normalny').style.display='none';
	document.getElementById('trudny').style.display='none';
};
function pokaz3()
{
	document.getElementById('tekst2').style.display='block';
	document.getElementById('dwa').style.display='block';
	document.getElementById('cztery').style.display='block';
	document.getElementById('szesc').style.display='block';
	document.getElementById('osiem').style.display='block';
	document.getElementById('powrot4').style.display='block';
};
function znik3()
{
	document.getElementById('tekst2').style.display='none';
	document.getElementById('dwa').style.display='none';
	document.getElementById('cztery').style.display='none';
	document.getElementById('szesc').style.display='none';
	document.getElementById('osiem').style.display='none';
	document.getElementById('powrot4').style.display='none';
};
function pokaz4()
{
	document.getElementById('niemcyaja2').style.display='block';
	document.getElementById('angliaja2').style.display='block';
	document.getElementById('powrot6').style.display='block';
	document.getElementById('tekst4').style.display='block';
	document.getElementById('hgracz1').style.display='block';
	document.getElementById('hgracz2').style.display='block';
	document.getElementById('hgracz3').style.display='block';
	document.getElementById('hgracz4').style.display='block';
	document.getElementById('druzyna1').style.display='block';
	document.getElementById('imie1').style.display='block';
	document.getElementById('imie2').style.display='block';
	document.getElementById('imie3').style.display='block';
	document.getElementById('imie4').style.display='block';
	document.getElementById('tekst4a').style.display='block';
	document.getElementById('hgracz1a').style.display='block';
	document.getElementById('hgracz2a').style.display='block';
	document.getElementById('hgracz3a').style.display='block';
	document.getElementById('hgracz4a').style.display='block';
	document.getElementById('druzyna1a').style.display='block';
	document.getElementById('imie1a').style.display='block';
	document.getElementById('imie2a').style.display='block';
	document.getElementById('imie3a').style.display='block';
	document.getElementById('imie4a').style.display='block';
};
function znik4()
{
	document.getElementById('niemcyaja2').style.display='none';
	document.getElementById('angliaja2').style.display='none';
	document.getElementById('powrot6').style.display='none';
	document.getElementById('tekst4').style.display='none';
	document.getElementById('hgracz1').style.display='none';
	document.getElementById('hgracz2').style.display='none';
	document.getElementById('hgracz3').style.display='none';
	document.getElementById('hgracz4').style.display='none';
	document.getElementById('druzyna1').style.display='none';
	document.getElementById('imie1').style.display='none';
	document.getElementById('imie2').style.display='none';
	document.getElementById('imie3').style.display='none';
	document.getElementById('imie4').style.display='none';
	document.getElementById('tekst4a').style.display='none';
	document.getElementById('hgracz1a').style.display='none';
	document.getElementById('hgracz2a').style.display='none';
	document.getElementById('hgracz3a').style.display='none';
	document.getElementById('hgracz4a').style.display='none';
	document.getElementById('druzyna1a').style.display='none';
	document.getElementById('imie1a').style.display='none';
	document.getElementById('imie2a').style.display='none';
	document.getElementById('imie3a').style.display='none';
	document.getElementById('imie4a').style.display='none';
};
function pokaz5()
{
	document.getElementById('powrot5').style.display='block';
	document.getElementById('tekst3a').style.display='block';
	document.getElementById('niemcyaja').style.display='block';
	document.getElementById('angliaja').style.display='block';
};
function znik5()
{
	document.getElementById('powrot5').style.display='block';
	document.getElementById('tekst3a').style.display='none';
	document.getElementById('niemcyaja').style.display='none';
	document.getElementById('angliaja').style.display='none';
};

function pdiv1(wybor)
{
	if(wybor == z_kompem)
	{
		setTimeout(znik1, 1000);
		setTimeout(pokaz2, 1200);
	}
	else if(wybor == z_graczem)
	{
		setTimeout(znik1, 1000);
		setTimeout(pokaz3, 1200);
	}
	else
	{
		alert("Mamy jakiś błąd!!!");
	}
};

function pdiv2(wybor)
{
	if(wybor == latwy)
	{
		setTimeout(znik2, 1000);
		setTimeout(pokaz5, 1200);
	}
	else if(wybor == normalny)
	{
		setTimeout(znik2, 1000);
		setTimeout(pokaz5, 1200);
	}
	else if(wybor == trudny)
	{
		setTimeout(znik2, 1000);
		setTimeout(pokaz5, 1200);
	}
	else
	{
		alert("Mamy jakiś błąd!!!");
	}
};
function pdiv3(wybor)
{
	if(wybor == dwa)
	{
		setTimeout(znik3, 1000);
		setTimeout(pokaz4, 1200);
	}
	else if(wybor == cztery)
	{
		setTimeout(znik3, 1000);
		setTimeout(pokaz4, 1200);
	}
	else if(wybor == szesc)
	{
		setTimeout(znik3, 1000);
		setTimeout(pokaz4, 1200);
	}
	else if(wybor == osiem)
	{
		setTimeout(znik3, 1000);
		setTimeout(pokaz4, 1200);
	}
	else
	{
		alert("Mamy jakiś błąd!!!");
	}
};