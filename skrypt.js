var punkty = 0;
var punkty1 = 0;
	
	
function losuj() 
{
	var items = [];

	for(var i = 1; i < 64; i++) 
	{
		items[i] = Math.round(Math.random());
	}
	return items;
};
function losuj1() 
{
	var items1 = [];

	for(var j = 193; j < 256; j++) 
	{
		items1[j] = Math.round(Math.random());
	}
	return items1;
};
		function odblokuj_pyt() 
		{
		document.getElementById( 'pytania').style.display='block';
		};
		function odblokuj_pyt1() 
		{
		document.getElementById( 'pytania1').style.display='block';
		};
		function odblokuj_drz() 
		{
		document.getElementById( 'drzewa').style.display='block';
		};
		function odblokuj_drz1() 
		{
		document.getElementById( 'drzewa1').style.display='block';
		};
		
		function odblokuj_pytanka() 
		{
		setTimeout(function(){document.getElementById('pytanka').setAttribute("style", "animation-play-state:running; display: block;");},550);
		setTimeout(function(){document.getElementById('pytanka').setAttribute("style", "position: absolute; display: block;");},1500);
		setTimeout(function(){document.getElementById('pytka').setAttribute("style", "animation-play-state:running; display: block;");},1500);
		setTimeout(function(){document.getElementById('pytka').setAttribute("style", "animation-play-state:running; display: block; margin-top: 30px; margin-left: 190px;");},3000);
		setTimeout(function(){document.getElementById('OdpA').setAttribute("style", "animation-play-state:running; display: block;");},3000);
		setTimeout(function(){document.getElementById('OdpA').setAttribute("style", "animation-play-state:running; display: block; margin-top: 30px; margin-left: 190px;");},3500);
		setTimeout(function(){document.getElementById('OdpB').setAttribute("style", "animation-play-state:running; display: block;");},3200);
		setTimeout(function(){document.getElementById('OdpB').setAttribute("style", "animation-play-state:running; display: block; margin-top: 15px; margin-left: 190px;");},3700);
		setTimeout(function(){document.getElementById('OdpC').setAttribute("style", "animation-play-state:running; display: block;");},3400);
		setTimeout(function(){document.getElementById('OdpC').setAttribute("style", "animation-play-state:running; display: block; margin-top: 15px; margin-left: 190px;");},3900);
		};
		
		function odblokuj_pytanka1() 
		{
		setTimeout(function(){document.getElementById('pytanka1').setAttribute("style", "animation-play-state:running; display: block;");},550);
		setTimeout(function(){document.getElementById('pytanka1').setAttribute("style", "position: absolute; display: block;");},1500);
		setTimeout(function(){document.getElementById('pytka1').setAttribute("style", "animation-play-state:running; display: block;");},1500);
		setTimeout(function(){document.getElementById('pytka1').setAttribute("style", "animation-play-state:running; display: block; margin-top: 30px; margin-left: 190px;");},3000);
		setTimeout(function(){document.getElementById('OdpA1').setAttribute("style", "animation-play-state:running; display: block;");},3000);
		setTimeout(function(){document.getElementById('OdpA1').setAttribute("style", "animation-play-state:running; display: block; margin-top: 30px; margin-left: 190px;");},3500);
		setTimeout(function(){document.getElementById('OdpB1').setAttribute("style", "animation-play-state:running; display: block;");},3200);
		setTimeout(function(){document.getElementById('OdpB1').setAttribute("style", "animation-play-state:running; display: block; margin-top: 15px; margin-left: 190px;");},3700);
		setTimeout(function(){document.getElementById('OdpC1').setAttribute("style", "animation-play-state:running; display: block;");},3400);
		setTimeout(function(){document.getElementById('OdpC1').setAttribute("style", "animation-play-state:running; display: block; margin-top: 15px; margin-left: 190px;");},3900);
		};
		
		function znik_pyt() 
		{
		setTimeout(function(){document.getElementById( 'pytania' ).style.animation='pytania_anim 0.5s';},);
		setTimeout(function(){document.getElementById( 'pytania' ).style.display='none';},450);
		};
		function znik_pyt1() 
		{
		setTimeout(function(){document.getElementById( 'pytania1' ).style.animation='pytania_anim1 0.5s';},);
		setTimeout(function(){document.getElementById( 'pytania1' ).style.display='none';},450);
		};
		
		function znik_drz() 
		{
		document.getElementById( 'drzewa' ).style.display='none';
		};
		function znik_drz1() 
		{
		document.getElementById( 'drzewa1' ).style.display='none';
		};
		
		function blokuj_drz()
		{
		document.getElementById('drzewa').disabled='disabled';	
		};
		function blokuj_drz1()
		{
		document.getElementById('drzewa1').disabled='disabled';	
		};
		
		function blokuj_pyt()
		{
		document.getElementById('pytania').disabled='disabled';	
		};
		function blokuj_pyt1()
		{
		document.getElementById('pytania1').disabled='disabled';	
		};
		
		function znik_pytanka() 
		{
		setTimeout(function(){document.getElementById( 'pytanka' ).style.animation='pytanka_znik_anim 0.5s';},);
		setTimeout(function(){document.getElementById( 'pytanka' ).style.display='none';},450);
		setTimeout(function(){document.getElementById( 'pytka' ).style.animation='pytanka_znik_anim 0.5s';},);
		setTimeout(function(){document.getElementById( 'pytka' ).style.display='none';},450);
		setTimeout(function(){document.getElementById( 'OdpA' ).style.animation='pytanka_znik_anim 0.5s';},);
		setTimeout(function(){document.getElementById( 'OdpA' ).style.display='none';},450);
		setTimeout(function(){document.getElementById( 'OdpB' ).style.animation='pytanka_znik_anim 0.5s';},);
		setTimeout(function(){document.getElementById( 'OdpB' ).style.display='none';},450);
		setTimeout(function(){document.getElementById( 'OdpC' ).style.animation='pytanka_znik_anim 0.5s';},);
		setTimeout(function(){document.getElementById( 'OdpC' ).style.display='none';},450);
		};
		function znik_pytanka1() 
		{
		setTimeout(function(){document.getElementById( 'pytanka1' ).style.animation='pytanka_znik_anim1 0.5s';},);
		setTimeout(function(){document.getElementById( 'pytanka1' ).style.display='none';},450);
		setTimeout(function(){document.getElementById( 'pytka1' ).style.animation='pytanka_znik_anim1 0.5s';},);
		setTimeout(function(){document.getElementById( 'pytka1' ).style.display='none';},450);
		setTimeout(function(){document.getElementById( 'OdpA1' ).style.animation='pytanka_znik_anim1 0.5s';},);
		setTimeout(function(){document.getElementById( 'OdpA1' ).style.display='none';},450);
		setTimeout(function(){document.getElementById( 'OdpB1' ).style.animation='pytanka_znik_anim1 0.5s';},);
		setTimeout(function(){document.getElementById( 'OdpB1' ).style.display='none';},450);
		setTimeout(function(){document.getElementById( 'OdpC1' ).style.animation='pytanka_znik_anim1 0.5s';},);
		setTimeout(function(){document.getElementById( 'OdpC1' ).style.display='none';},450);
		};
		
		function znik_animacja()
		{
		document.getElementById('kwadracik').style.display="none";
		document.getElementById('samolot1').style.display="none";
		document.getElementById('samolot2').style.display="none";
		document.getElementById('pocisk').style.display="none";
		document.getElementById('boom').style.display="none";
		document.getElementById('bangbang').style.display="none";
		document.getElementById('kula').style.display="none";
		};
		function znik_animacja1()
		{
		document.getElementById('kwadracik1').style.display="none";
		document.getElementById('samolot1a').style.display="none";
		document.getElementById('samolot2a').style.display="none";
		document.getElementById('pocisk1').style.display="none";
		document.getElementById('boom1').style.display="none";
		document.getElementById('bangbang1').style.display="none";
		document.getElementById('kula1').style.display="none";
		};
	
	function odp1 (pozycja)
	{
		if (pozycja) 
		{
			document.getElementById(pozycja).src = 'znak.png';
			document.getElementById(pozycja).disabled='disabled';
			znik_pyt();
			odblokuj_pytanka();
		}	
		else
		{
			alert ('Błąd!');
			setTimeout(znik_pyt(),0);
			setTimeout(odblokuj_drz(),0);
		}
	};
		function odp1a (pozycja1)
	{
		if (pozycja1) 
		{
			document.getElementById(pozycja1).src = 'znak.png';
			document.getElementById(pozycja1).disabled='disabled';
			znik_pyt1();
			odblokuj_pytanka1();
		}	
		else
		{
			alert ('Błąd!');
			setTimeout(znik_pyt1(),0);
			setTimeout(odblokuj_drz1(),0);
		}
	};
	function odp2 (pozycja)
	{
		if (pozycja) 
		{
			document.getElementById(pozycja).src = 'znak.png';
			document.getElementById(pozycja).disabled='disabled';
			znik_pyt();
			odblokuj_pytanka();
		}	 
		else
		{
			alert ('Błąd!');
			setTimeout(znik_pyt(),1000);
			setTimeout(odblokuj_drz(),1000);
		}
	};
	function odp2a (pozycja1)
	{
		if (pozycja1) 
		{
			document.getElementById(pozycja1).src = 'znak.png';
			document.getElementById(pozycja1).disabled='disabled';
			znik_pyt1();
			odblokuj_pytanka1();
		}	 
		else
		{
			alert ('Błąd!');
			setTimeout(znik_pyt1(),1000);
			setTimeout(odblokuj_drz1(),1000);
		}
	};
	function odp3 (pozycja)
	{
		if (pozycja) 
		{
			document.getElementById(pozycja).src = 'znak.png';
			document.getElementById(pozycja).disabled='disabled';
			znik_pyt();
			odblokuj_pytanka();
		}
		else
		{
			alert ('Błąd!');
			setTimeout(znik_pyt(),0);
			setTimeout(odblokuj_drz(),0);
		}		
	};
	function odp3a (pozycja1)
	{
		if (pozycja1) 
		{
			document.getElementById(pozycja1).src = 'znak.png';
			document.getElementById(pozycja1).disabled='disabled';
			znik_pyt1();
			odblokuj_pytanka1();
		}
		else
		{
			alert ('Błąd!');
			setTimeout(znik_pyt1(),0);
			setTimeout(odblokuj_drz1(),0);
		}		
	};
	function odp4 (pozycja)
	{
		if (pozycja) 
		{
			document.getElementById(pozycja).src = 'znak.png';
			document.getElementById(pozycja).disabled='disabled';
			znik_pyt();
			odblokuj_pytanka();
		}
		else
		{
			alert ('Błąd!');
			setTimeout(znik_pyt(),0);
			setTimeout(odblokuj_drz(),0);
		}		
	};
	function odp4a (pozycja1)
	{
		if (pozycja1) 
		{
			document.getElementById(pozycja1).src = 'znak.png';
			document.getElementById(pozycja1).disabled='disabled';
			znik_pyt1();
			odblokuj_pytanka1();
		}
		else
		{
			alert ('Błąd!');
			setTimeout(znik_pyt1(),0);
			setTimeout(odblokuj_drz1(),0);
		}		
	};
function sprawdz(poz)
{
	if(poz == Popr) 
	{
	setTimeout(function(){document.getElementById('komunikat1').setAttribute("style", "animation-play-state:running; display: block;");},500);
	setTimeout(function(){document.getElementById('komunikat1').setAttribute("style", "animation-play-state:running; display: block; margin-top: 540px; margin-left: 190px;");},500);
	setTimeout(function(){document.getElementById( 'komunikat1' ).style.display='none';},3000);
	setTimeout(znik_pytanka, 3000);
	setTimeout(odblokuj_drz, 3500);
	punkty = punkty + 1;
	document.getElementById("wynik1").innerHTML=punkty;
	document.getElementById("wynik1a").innerHTML=punkty;
	}
    else if(poz != Popr)
	{
	setTimeout(function(){document.getElementById('komunikat2').setAttribute("style", "animation-play-state:running; display: block;");},500);
	setTimeout(function(){document.getElementById('komunikat2').setAttribute("style", "position: absolute; display: block; margin-top: 540px; margin-left: 190px;");},500);
	setTimeout(function(){document.getElementById( 'komunikat2' ).style.display='none';},3000);
	setTimeout(znik_pytanka, 3000);
	setTimeout(odblokuj_pyt1, 3500);
	}
	else
	{
		alert('Błąd!');
	}
};
function sprawdz1(poz1)
{	
	if(poz1 == Popr1)
	{
	setTimeout(function(){document.getElementById('komunikat1a').setAttribute("style", "animation-play-state:running; display: block;");},500);
	setTimeout(function(){document.getElementById('komunikat1a').setAttribute("style", "animation-play-state:running; display: block; margin-top: 540px; margin-left: 190px;");},500);
	setTimeout(function(){document.getElementById( 'komunikat1a' ).style.display='none';},3000);
	setTimeout(znik_pytanka1, 3000);
	setTimeout(odblokuj_drz1, 3500);
	punkty1 = punkty1 + 1;
	document.getElementById("wynik2").innerHTML=punkty1;
	document.getElementById("wynik2a").innerHTML=punkty1;
	}
    else if(poz1 != Popr1)
	{
	setTimeout(function(){document.getElementById('komunikat2a').setAttribute("style", "animation-play-state:running; display: block;");},500);
	setTimeout(function(){document.getElementById('komunikat2a').setAttribute("style", "position: absolute; display: block; margin-top: 540px; margin-left: 190px;");},500);
	setTimeout(function(){document.getElementById( 'komunikat2a' ).style.display='none';},3000);
	setTimeout(znik_pytanka1, 3000);
	setTimeout(odblokuj_pyt, 3500);
	}
	else
	{
		alert('Błąd!');
	}
};

var positionArray = losuj();
var gnome = 0;

function zmien(pozycja)
{
	if (positionArray[pozycja]) 
	{
		gnome++;
		if(gnome<=20)
		{
		punkty = punkty + 1;
		document.getElementById("wynik1").innerHTML=punkty;
		document.getElementById("wynik1a").innerHTML=punkty;
		znik_pyt();
		znik_drz();
		document.getElementById('kwadracik').style.display="block";
		document.getElementById('samolot1').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('samolot2').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('pocisk').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('boom').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('bangbang').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('kula').setAttribute("style", "animation-play-state:running; display: block;");
		setTimeout(function(){document.getElementById('boom').style = "display: none"}, 2300);
		document.getElementById(pozycja).disabled='disabled';
		setTimeout(znik_animacja, 4500); 
		setTimeout(znik_drz, 4500); 
		setTimeout(odblokuj_pyt1, 4500);
		setTimeout(function(){document.getElementById(pozycja).src = 'pustkazes.png'}, 4500);
		setTimeout(function(){document.getElementById(pozycja).src = 'ogien.gif'}, 4500);
		}
		else
		{
		setTimeout(function(){document.getElementById(pozycja).src = 'pustka.png'}, 500);
		document.getElementById(pozycja).disabled='disabled';
		setTimeout(znik_animacja, 1500);
		setTimeout(znik_drz, 1500);
		setTimeout(odblokuj_pyt1, 1500);
		}
	}
	else 
	{
		setTimeout(function(){document.getElementById(pozycja).src = 'pustka.png'}, 500);
		document.getElementById(pozycja).disabled='disabled';
		setTimeout(znik_animacja, 1500);
		setTimeout(znik_drz, 1500);
		setTimeout(odblokuj_pyt1, 1500);
	}
};

var positionArray1 = losuj1();
var gnome1 = 0;

function zmien1(pozycja1)
{
	if (positionArray1[pozycja1]) 
	{
		gnome1++;
		if(gnome1<=20)
		{
		punkty1 = punkty1 + 1;
		document.getElementById("wynik2").innerHTML=punkty1;
		document.getElementById("wynik2a").innerHTML=punkty1;
		znik_pyt1();
		znik_drz1();
		document.getElementById('kwadracik1').style.display="block";
		document.getElementById('samolot1a').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('samolot2a').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('pocisk1').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('boom1').setAttribute("style", "animation-play-state:running; display: block;");
		setTimeout(function(){document.getElementById('boom1').style = "display: none"}, 2500);
		document.getElementById('bangbang1').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById('kula1').setAttribute("style", "animation-play-state:running; display: block;");
		document.getElementById(pozycja1).disabled='disabled';
		setTimeout(znik_animacja1, 4500); 
		setTimeout(znik_drz1, 4500); 
		setTimeout(odblokuj_pyt, 4500);
		setTimeout(function(){document.getElementById(pozycja1).src = 'pustkazes.png'}, 4500);
		setTimeout(function(){document.getElementById(pozycja1).src = 'ogien.gif'}, 4500);
		}
		else
		{
		setTimeout(function(){document.getElementById(pozycja1).src = 'pustka.png'}, 500);
		document.getElementById(pozycja1).disabled='disabled';
		setTimeout(znik_animacja1, 1500);
		setTimeout(znik_drz1, 1500);
		setTimeout(odblokuj_pyt, 1500);
		}
	}
	else 
	{
		setTimeout(function(){document.getElementById(pozycja1).src = 'pustka.png'}, 500);
		document.getElementById(pozycja1).disabled='disabled';
		setTimeout(znik_animacja1, 1500);
		setTimeout(znik_drz1, 1500);
		setTimeout(odblokuj_pyt, 1500);
	}
};