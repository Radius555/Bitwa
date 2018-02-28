<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css.css" type="text/css">
<script src="jquery-3.2.1.min.js"></script>
<script>
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
	
	function znik_pytanka1() 
	{
	setTimeout(function(){document.getElementById( 'pytanka1' ).style.animation='pytanka_znik_anim 0.5s';},);
	setTimeout(function(){document.getElementById( 'pytanka1' ).style.display='none';},450);
	setTimeout(function(){document.getElementById( 'pytka1' ).style.animation='pytanka_znik_anim 0.5s';},);
	setTimeout(function(){document.getElementById( 'pytka1' ).style.display='none';},450);
	setTimeout(function(){document.getElementById( 'OdpA1' ).style.animation='pytanka_znik_anim 0.5s';},);
	setTimeout(function(){document.getElementById( 'OdpA1' ).style.display='none';},450);
	setTimeout(function(){document.getElementById( 'OdpB1' ).style.animation='pytanka_znik_anim 0.5s';},);
	setTimeout(function(){document.getElementById( 'OdpB1' ).style.display='none';},450);
	setTimeout(function(){document.getElementById( 'OdpC1' ).style.animation='pytanka_znik_anim 0.5s';},);
	setTimeout(function(){document.getElementById( 'OdpC1' ).style.display='none';},450);
	};
	
		function znik_pyt1() 
		{
		setTimeout(function(){document.getElementById( 'pytania1' ).style.animation='pytania_anim1 0.5s';},);
		setTimeout(function(){document.getElementById( 'pytania1' ).style.display='none';},450);
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
	
function sprawdz1(poz1)
{	
	if(poz1 = Popr1)
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

</script>
</head>
<body>
<div id="calosc">
<div id="gora">
<h1> Hello </h1>
</div>
<div id="menu">
<p> Menu gry </p>
<br><br>
<a href="menu.html"><p id="kolorek"> Aby wrócić do strony głównej pliknik tu :) </p></a>
</div>
<div id="gra1">
<div id="pytania">
<div id="pyt">
<b>Pytania 2</b>
</div>
<br><br>
<table id="tabelka1" align="left">
<tr>
 <td class="inny_wyglad1a"></td>
 <td class="inny_wyglad1a">A</td>
 <td class="inny_wyglad1a">B</td>
 <td class="inny_wyglad1a">C</td>
 <td class="inny_wyglad1a">D</td>
 <td class="inny_wyglad1a">E</td> 
 <td class="inny_wyglad1a">F</td>
 <td class="inny_wyglad1a">G</td>
 <td class="inny_wyglad1a">H</td>
</tr>
<tr>
 <td class="inny_wyglad2a" >1</td>
 <td onClick="odp1a(129)"> <img src="Pytanik.png" alt="nic" class="question1" id="129"></td>
 <td onClick="odp1a(130)"> <img src="Pytanik.png" alt="nic" class="question1" id="130"></td>
 <td onClick="odp1a(131)"> <img src="Pytanik.png" alt="nic" class="question1" id="131"></td>
 <td onClick="odp1a(132)"> <img src="Pytanik.png" alt="nic" class="question1" id="132"></td>
 <td onClick="odp1a(133)"> <img src="Pytanik.png" alt="nic" class="question1" id="133"></td>
 <td onClick="odp1a(134)"> <img src="Pytanik.png" alt="nic" class="question1" id="134"></td>
 <td onClick="odp1a(135)"> <img src="Pytanik.png" alt="nic" class="question1" id="135"></td>
 <td class="inny_wyglad4a" onClick="odp1(136); przeladuj1()"> <img src="Pytanik.png" alt="nic" class="question1" id="136"></td>
</tr>
<tr>
 <td class="inny_wyglad2a">2</td>
 <td onClick="odp1a(137)"> <img src="Pytanik.png" alt="nic" class="question1" id="137"></td>
 <td onClick="odp1a(138)"> <img src="Pytanik.png" alt="nic" class="question1" id="138"></td>
 <td onClick="odp1a(139)"> <img src="Pytanik.png" alt="nic" class="question1" id="139"></td>
 <td onClick="odp1a(140)"> <img src="Pytanik.png" alt="nic" class="question1" id="140"></td>
 <td onClick="odp1a(141)"> <img src="Pytanik.png" alt="nic" class="question1" id="141"></td>
 <td onClick="odp1a(142)"> <img src="Pytanik.png" alt="nic" class="question1" id="142"></td>
 <td onClick="odp1a(143)"> <img src="Pytanik.png" alt="nic" class="question1" id="143"></td>
 <td class="inny_wyglad4a" onClick="odp1(144)"> <img src="Pytanik.png" alt="nic" class="question1" id="144"></td>
</tr>
<tr>
 <td class="inny_wyglad2a">3</td>
 <td onClick="odp2a(145)"> <img src="Pytanik.png" alt="nic" class="question1" id="145"></td>
 <td onClick="odp2a(146)"> <img src="Pytanik.png" alt="nic" class="question1" id="146"></td>
 <td onClick="odp2a(147)"> <img src="Pytanik.png" alt="nic" class="question1" id="147"></td>
 <td onClick="odp2a(148)"> <img src="Pytanik.png" alt="nic" class="question1" id="148"></td>
 <td onClick="odp2a(149)"> <img src="Pytanik.png" alt="nic" class="question1" id="149"></td>
 <td onClick="odp2a(150)"> <img src="Pytanik.png" alt="nic" class="question1" id="150"></td>
 <td onClick="odp2a(151)"> <img src="Pytanik.png" alt="nic" class="question1" id="151"></td>
 <td class="inny_wyglad4" onClick="odp2(152)"> <img src="Pytanik.png" alt="nic" class="question1" id="152"></td>
</tr>
<tr>
 <td class="inny_wyglad2a">4</td>
 <td onClick="odp2a(153)"> <img src="Pytanik.png" alt="nic" class="question1" id="153"></td>
 <td onClick="odp2a(154)"> <img src="Pytanik.png" alt="nic" class="question1" id="154"></td>
 <td onClick="odp2a(155)"> <img src="Pytanik.png" alt="nic" class="question1" id="155"></td>
 <td onClick="odp2a(156)"> <img src="Pytanik.png" alt="nic" class="question1" id="156"></td>
 <td onClick="odp2a(157)"> <img src="Pytanik.png" alt="nic" class="question1" id="157"></td>
 <td onClick="odp2a(158)"> <img src="Pytanik.png" alt="nic" class="question1" id="158"></td>
 <td onClick="odp2a(159)"> <img src="Pytanik.png" alt="nic" class="question1" id="159"></td>
 <td class="inny_wyglad4" onClick="odp2a(160)"> <img src="Pytanik.png" alt="nic" class="question1" id="160"></td>
</tr>
<tr>
 <td class="inny_wyglad2a">5</td>
 <td onClick="odp3a(161)"> <img src="Pytanik.png" alt="nic" class="question1" id="161"></td>
 <td onClick="odp3a(162)"> <img src="Pytanik.png" alt="nic" class="question1" id="162"></td>
 <td onClick="odp3a(163)"> <img src="Pytanik.png" alt="nic" class="question1" id="163"></td>
 <td onClick="odp3a(164)"> <img src="Pytanik.png" alt="nic" class="question1" id="164"></td>
 <td onClick="odp3a(165)"> <img src="Pytanik.png" alt="nic" class="question1" id="165"></td>
 <td onClick="odp3a(166)"> <img src="Pytanik.png" alt="nic" class="question1" id="166"></td>
 <td onClick="odp3a(167)"> <img src="Pytanik.png" alt="nic" class="question1" id="167"></td>
 <td class="inny_wyglad4" onClick="odp3a(168)"> <img src="Pytanik.png" alt="nic" class="question1" id="168"></td>
</tr> 
<tr>
 <td class="inny_wyglad2a">6</td>
 <td onClick="odp3a(169)"> <img src="Pytanik.png" alt="nic" class="question1" id="169"></td>
 <td onClick="odp3a(170)"> <img src="Pytanik.png" alt="nic" class="question1" id="170"></td>
 <td onClick="odp3a(171)"> <img src="Pytanik.png" alt="nic" class="question1" id="171"></td>
 <td onClick="odp3a(172)"> <img src="Pytanik.png" alt="nic" class="question1" id="172"></td>
 <td onClick="odp3a(173)"> <img src="Pytanik.png" alt="nic" class="question1" id="173"></td>
 <td onClick="odp3a(174)"> <img src="Pytanik.png" alt="nic" class="question1" id="174"></td>
 <td onClick="odp3a(175)"> <img src="Pytanik.png" alt="nic" class="question1" id="175"></td>
 <td class="inny_wyglad4" onClick="odp3a(176)"> <img src="Pytanik.png" alt="nic" class="question1" id="176"></td>
</tr>
<tr>
 <td class="inny_wyglad2a">7</td>
 <td onClick="odp4a(177)"> <img src="Pytanik.png" alt="nic" class="question1" id="177"></td>
 <td onClick="odp4a(178)"> <img src="Pytanik.png" alt="nic" class="question1" id="178"></td>
 <td onClick="odp4a(179)"> <img src="Pytanik.png" alt="nic" class="question1" id="179"></td>
 <td onClick="odp4a(180)"> <img src="Pytanik.png" alt="nic" class="question1" id="180"></td>
 <td onClick="odp4a(181)"> <img src="Pytanik.png" alt="nic" class="question1" id="181"></td>
 <td onClick="odp4a(182)"> <img src="Pytanik.png" alt="nic" class="question1" id="182"></td>
 <td onClick="odp4a(183)"> <img src="Pytanik.png" alt="nic" class="question1" id="183"></td>
 <td class="inny_wyglad4" onClick="odp4a(184)"> <img src="Pytanik.png" alt="nic" class="question1" id="184"></td>
</tr>
<tr>
 <td class="inny_wyglad2a">8</td>
 <td onClick="odp4a(185)"> <img src="Pytanik.png" alt="nic" class="question1" id="185"></td>
 <td onClick="odp4a(186)"> <img src="Pytanik.png" alt="nic" class="question1" id="186"></td>
 <td onClick="odp4a(187)"> <img src="Pytanik.png" alt="nic" class="question1" id="187"></td>
 <td onClick="odp4a(188)"> <img src="Pytanik.png" alt="nic" class="question1" id="188"></td>
 <td onClick="odp4a(189)"> <img src="Pytanik.png" alt="nic" class="question1" id="189"></td>
 <td onClick="odp4a(190)"> <img src="Pytanik.png" alt="nic" class="question1" id="190"></td>
 <td onClick="odp4a(191)"> <img src="Pytanik.png" alt="nic" class="question1" id="191"></td>
 <td class="inny_wyglad4" onClick="odp4a(192)"> <img src="Pytanik.png" alt="nic" class="question1" id="192"></td>
</tr>
</table>
<table id="tabelka2a">
<tr><th>
<b>KATEGORIA</b>
</th></tr>
<tr><td>
<br><br><b>Dywizjon 303</b>
</td></tr>
<tr><td>
<br><br><b>Bitwa o Anglie</b>
</td></tr>
<tr><td>
<br><br><b>Polacy w Bitwie o Anglie</b>
</td></tr>
<tr><td>
<br><br><b>Statystyka</b>
</td></tr>
</table>
<table id="tabelka3a">
<tr><th>PUNKTACJA <br>INDYWIDUALNA</th></tr>
<tr><td><b><br><input type="text" id="gracz1" value="Gracz 1"/></b></td>
<td class="inny_wyglad">PTS</td></tr>
<tr><td><b><br><input type="text" id="gracz2" value="Gracz 2"/></b></td>
<td class="inny_wyglad">PTS</td></tr>
<tr><td><b><br><input type="text" id="gracz3" value="Gracz 3"/></b></td>
<td class="inny_wyglad">PTS</td></tr>
<tr><td><b><br><input type="text" id="gracz4" value="Gracz 4"/></b></td>
<td class="inny_wyglad">PTS</td></tr>
</table>
<div id="bloka">
<div id="wynik0a"><b><h2>Wynik Bitwy</h2></b></div>
<div id="madzya">Drużyna III Rzeszy & Włoch</div>
<div id="czarnia">Drużyna Wielkiej Brytani & Sojuszników</div>
<div id="wynik1a"></div>
<div id="wynik2a"></div>
</div>
</div>
<div id="pytanka1">
</div>
<div id="komunikat1a" font size="14"><br><center>Brawo, udąło Ci się zdobyć punkt!</center></div>
<div id="komunikat2a" font size="14"><br><center>Błąd, nie otrzymujesz punktu!</center></div>
<div id="drzewa1">
<table id="tabla1" align="left">
<tr>
 <td class="inny_td"></td>
 <td class="inny_td">A</td>
 <td class="inny_td">B</td>
 <td class="inny_td">C</td>
 <td class="inny_td">D</td>
 <td class="inny_td">E</td>
 <td class="inny_td">F</td>
 <td class="inny_td">G</td>
 <td class="inny_td">H</td>
</tr>
<tr>
 <td class="inny_td">1</td>
 <td onClick="zmien1(193)"> <img src="chmurka.png" alt="jedyneczka" id="193"></td>
 <td onClick="zmien1(194)"> <img src="chmurka.png" alt="jedyneczka" id="194"></td>
 <td onClick="zmien1(195)" > <img src="chmurka.png" alt="jedyneczka" id="195"></td>
 <td onClick="zmien1(196)" > <img src="chmurka.png" alt="jedyneczka" id="196"></td>
 <td onClick="zmien1(197)" > <img src="chmurka.png" alt="jedyneczka" id="197"></td>
 <td onClick="zmien1(198)" > <img src="chmurka.png" alt="jedyneczka" id="198"></td>
 <td onClick="zmien1(199)" > <img src="chmurka.png" alt="jedyneczka" id="199"></td>
 <td onClick="zmien1(200)" > <img src="chmurka.png" alt="jedyneczka" id="200"></td>
</tr>
<tr>
 <td class="inny_td">2</td>
 <td onClick="zmien1(201)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="201"></td>
 <td onClick="zmien1(202)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="202"></td>
 <td onClick="zmien1(203)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="203"></td>
 <td onClick="zmien1(204)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="204"></td>
 <td onClick="zmien1(205)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="205"></td>
 <td onClick="zmien1(206)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="206"></td>
 <td onClick="zmien1(207)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="207"></td>
 <td onClick="zmien1(208)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="208"></td>
</tr>
<tr>
 <td class="inny_td">3</td>
 <td onClick="zmien1(209)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="209"></td>
 <td onClick="zmien1(210)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="210"></td>
 <td onClick="zmien1(211)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="211"></td>
 <td onClick="zmien1(212)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="212"></td>
 <td onClick="zmien1(213)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="213"></td>
 <td onClick="zmien1(214)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="214"></td>
 <td onClick="zmien1(215)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="215"></td>
 <td onClick="zmien1(216)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="216"></td>
</tr>
<tr>
 <td class="inny_td">4</td>
 <td onClick="zmien1(217)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="217"></td>
 <td onClick="zmien1(218)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="218"></td>
 <td onClick="zmien1(219)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="219"></td>
 <td onClick="zmien1(220)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="220"></td>
 <td onClick="zmien1(221)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="221"></td>
 <td onClick="zmien1(222)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="222"></td>
 <td onClick="zmien1(223)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="223"></td>
 <td onClick="zmien1(224)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="224"></td>
</tr>
<tr>
 <td class="inny_td">5</td>
 <td onClick="zmien1(225)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="225"></td>
 <td onClick="zmien1(226)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="226"></td>
 <td onClick="zmien1(227)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="227"></td>
 <td onClick="zmien1(228)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="228"></td>
 <td onClick="zmien1(229)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="229"></td>
 <td onClick="zmien1(230)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="230"></td>
 <td onClick="zmien1(231)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="231"></td>
 <td onClick="zmien1(232)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="232"></td>
</tr>
<tr>
 <td class="inny_td">6</td>
 <td onClick="zmien1(233)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="233"></td>
 <td onClick="zmien1(234)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="234"></td>
 <td onClick="zmien1(235)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="235"></td>
 <td onClick="zmien1(236)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="236"></td>
 <td onClick="zmien1(237)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="237"></td>
 <td onClick="zmien1(238)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="238"></td>
 <td onClick="zmien1(239)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="239"></td>
 <td onClick="zmien1(240)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="240"></td>
</tr>
<tr>
 <td class="inny_td">7</td>
 <td onClick="zmien1(241)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="241"></td>
 <td onClick="zmien1(242)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="242"></td>
 <td onClick="zmien1(243)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="243"></td>
 <td onClick="zmien1(244)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="244"></td>
 <td onClick="zmien1(245)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="245"></td>
 <td onClick="zmien1(246)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="246"></td>
 <td onClick="zmien1(247)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="247"></td>
 <td onClick="zmien1(248)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="248"></td>
</tr>
<tr>
 <td class="inny_td">8</td>
 <td onClick="zmien1(249)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="249"></td>
 <td onClick="zmien1(250)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="250"></td>
 <td onClick="zmien1(251)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="251"></td>
 <td onClick="zmien1(252)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="252"></td>
 <td onClick="zmien1(253)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="253"></td>
 <td onClick="zmien1(254)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="254"></td>
 <td onClick="zmien1(255)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="255"></td>
 <td onClick="zmien1(256)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="256"></td>
</tr>
</table>
</div>
</div>
<script>
$('.question').on('click', function() 
			{
				$("#pytanka").load('kodzik.php');
			});
			
$('.question1').on('click', function() 
			{
				$("#pytanka1").load('kodzik.php');
			});
</script>
<div id="prawy1">
nic
</div>
<div id="dol">
<p>Dół</p>
</div>
<div id="stopka">
<p>DDDDDD</p>
</div>
</div>
</body>
</html>