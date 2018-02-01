<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css.css" type="text/css">
<script src="jquery-3.2.1.min.js"></script>
<script src="skrypt.js"></script>
</head>
<body>
<div id="calosc">
<div id="gora">
<h1> Hello </h1>
</div>
<div id="menu">
<p> Menu gry </p>
<br><br>
<a href="html1.html"><p> Aby wrócić do strony głównej pliknik tu :) </p></a>
</div>
<div id="gra1">

<div id="kwadracik">
<div id="samolot1"></div>
<div id="samolot2"><div id="kula"></div></div>
<div id="pocisk"></div>
<div id="boom"></div>
<div id="bangbang"></div>
</div>
<div id="pytania">
<br>
<div id="pyt">
<b>Pytania 1</b>
</div>
<br><br>
<table id="tabelka" align="left">
<tr>
 <td class="inny_wyglad1"></td>
 <td class="inny_wyglad1">A</td>
 <td class="inny_wyglad1">B</td>
 <td class="inny_wyglad1">C</td>
 <td class="inny_wyglad1">D</td>
 <td class="inny_wyglad1">E</td> 
 <td class="inny_wyglad1">F</td>
 <td class="inny_wyglad1">G</td>
 <td class="inny_wyglad1">H</td>
</tr>
<tr>
 <td class="inny_wyglad2" >1</td>
 <td onClick="odp1(65)"> <img src="Pytanik.png" alt="nic" class="question" id="65"></td>
 <td onClick="odp1(66)"> <img src="Pytanik.png" alt="nic" class="question" id="66"></td>
 <td onClick="odp1(67)"> <img src="Pytanik.png" alt="nic" class="question" id="67"></td>
 <td onClick="odp1(68)"> <img src="Pytanik.png" alt="nic" class="question" id="68"></td>
 <td onClick="odp1(69)"> <img src="Pytanik.png" alt="nic" class="question" id="69"></td>
 <td onClick="odp1(70)"> <img src="Pytanik.png" alt="nic" class="question" id="70"></td>
 <td onClick="odp1(71)"> <img src="Pytanik.png" alt="nic" class="question" id="71"></td>
 <td class="inny_wyglad4" onClick="odp1(72); przeladuj()"> <img src="Pytanik.png" alt="nic" class="question" id="72"></td>
</tr>
<tr>
 <td class="inny_wyglad2">2</td>
 <td onClick="odp1(73)"> <img src="Pytanik.png" alt="nic" class="question" id="73"></td>
 <td onClick="odp1(74)"> <img src="Pytanik.png" alt="nic" class="question" id="74"></td>
 <td onClick="odp1(75)"> <img src="Pytanik.png" alt="nic" class="question" id="75"></td>
 <td onClick="odp1(76)"> <img src="Pytanik.png" alt="nic" class="question" id="76"></td>
 <td onClick="odp1(77)"> <img src="Pytanik.png" alt="nic" class="question" id="77"></td>
 <td onClick="odp1(78)"> <img src="Pytanik.png" alt="nic" class="question" id="78"></td>
 <td onClick="odp1(79)"> <img src="Pytanik.png" alt="nic" class="question" id="79"></td>
 <td class="inny_wyglad4" onClick="odp1(80)"> <img src="Pytanik.png" alt="nic" class="question" id="80"></td>
</tr>
<tr>
 <td class="inny_wyglad2">3</td>
 <td onClick="odp2(81)"> <img src="Pytanik.png" alt="nic" class="question" id="81"></td>
 <td onClick="odp2(82)"> <img src="Pytanik.png" alt="nic" class="question" id="82"></td>
 <td onClick="odp2(83)"> <img src="Pytanik.png" alt="nic" class="question" id="83"></td>
 <td onClick="odp2(84)"> <img src="Pytanik.png" alt="nic" class="question" id="84"></td>
 <td onClick="odp2(85)"> <img src="Pytanik.png" alt="nic" class="question" id="85"></td>
 <td onClick="odp2(86)"> <img src="Pytanik.png" alt="nic" class="question" id="86"></td>
 <td onClick="odp2(87)"> <img src="Pytanik.png" alt="nic" class="question" id="87"></td>
 <td class="inny_wyglad4" onClick="odp2(88)"> <img src="Pytanik.png" alt="nic" class="question" id="88"></td>
</tr>
<tr>
 <td class="inny_wyglad2">4</td>
 <td onClick="odp2(89)"> <img src="Pytanik.png" alt="nic" class="question" id="89"></td>
 <td onClick="odp2(90)"> <img src="Pytanik.png" alt="nic" class="question" id="90"></td>
 <td onClick="odp2(91)"> <img src="Pytanik.png" alt="nic" class="question" id="91"></td>
 <td onClick="odp2(92)"> <img src="Pytanik.png" alt="nic" class="question" id="92"></td>
 <td onClick="odp2(93)"> <img src="Pytanik.png" alt="nic" class="question" id="93"></td>
 <td onClick="odp2(94)"> <img src="Pytanik.png" alt="nic" class="question" id="94"></td>
 <td onClick="odp2(95)"> <img src="Pytanik.png" alt="nic" class="question" id="95"></td>
 <td class="inny_wyglad4" onClick="odp2(96)"> <img src="Pytanik.png" alt="nic" class="question" id="96"></td>
</tr>
<tr>
 <td class="inny_wyglad2">5</td>
 <td onClick="odp3(97)"> <img src="Pytanik.png" alt="nic" class="question" id="97"></td>
 <td onClick="odp3(98)"> <img src="Pytanik.png" alt="nic" class="question" id="98"></td>
 <td onClick="odp3(99)"> <img src="Pytanik.png" alt="nic" class="question" id="99"></td>
 <td onClick="odp3(100)"> <img src="Pytanik.png" alt="nic" class="question" id="100"></td>
 <td onClick="odp3(101)"> <img src="Pytanik.png" alt="nic" class="question" id="101"></td>
 <td onClick="odp3(102)"> <img src="Pytanik.png" alt="nic" class="question" id="102"></td>
 <td onClick="odp3(103)"> <img src="Pytanik.png" alt="nic" class="question" id="103"></td>
 <td class="inny_wyglad4" onClick="odp3(104)"> <img src="Pytanik.png" alt="nic" class="question" id="104"></td>
</tr> 
<tr>
 <td class="inny_wyglad2">6</td>
 <td onClick="odp3(105)"> <img src="Pytanik.png" alt="nic" class="question" id="105"></td>
 <td onClick="odp3(106)"> <img src="Pytanik.png" alt="nic" class="question" id="106"></td>
 <td onClick="odp3(107)"> <img src="Pytanik.png" alt="nic" class="question" id="107"></td>
 <td onClick="odp3(108)"> <img src="Pytanik.png" alt="nic" class="question" id="108"></td>
 <td onClick="odp3(109)"> <img src="Pytanik.png" alt="nic" class="question" id="109"></td>
 <td onClick="odp3(110)"> <img src="Pytanik.png" alt="nic" class="question" id="110"></td>
 <td onClick="odp3(111)"> <img src="Pytanik.png" alt="nic" class="question" id="111"></td>
 <td class="inny_wyglad4" onClick="odp3(112)"> <img src="Pytanik.png" alt="nic" class="question" id="112"></td>
</tr>
<tr>
 <td class="inny_wyglad2">7</td>
 <td onClick="odp4(113)"> <img src="Pytanik.png" alt="nic" class="question" id="113"></td>
 <td onClick="odp4(114)"> <img src="Pytanik.png" alt="nic" class="question" id="114"></td>
 <td onClick="odp4(115)"> <img src="Pytanik.png" alt="nic" class="question" id="115"></td>
 <td onClick="odp4(116)"> <img src="Pytanik.png" alt="nic" class="question" id="116"></td>
 <td onClick="odp4(117)"> <img src="Pytanik.png" alt="nic" class="question" id="117"></td>
 <td onClick="odp4(118)"> <img src="Pytanik.png" alt="nic" class="question" id="118"></td>
 <td onClick="odp4(119)"> <img src="Pytanik.png" alt="nic" class="question" id="119"></td>
 <td class="inny_wyglad4" onClick="odp4(120)"> <img src="Pytanik.png" alt="nic" class="question" id="120"></td>
</tr>
<tr>
 <td class="inny_wyglad2">8</td>
 <td onClick="odp4(121)"> <img src="Pytanik.png" alt="nic" class="question" id="121"></td>
 <td onClick="odp4(122)"> <img src="Pytanik.png" alt="nic" class="question" id="122"></td>
 <td onClick="odp4(123)"> <img src="Pytanik.png" alt="nic" class="question" id="123"></td>
 <td onClick="odp4(124)"> <img src="Pytanik.png" alt="nic" class="question" id="124"></td>
 <td onClick="odp4(125)"> <img src="Pytanik.png" alt="nic" class="question" id="125"></td>
 <td onClick="odp4(126)"> <img src="Pytanik.png" alt="nic" class="question" id="126"></td>
 <td onClick="odp4(127)"> <img src="Pytanik.png" alt="nic" class="question" id="127"></td>
 <td class="inny_wyglad4" onClick="odp4(128)"> <img src="Pytanik.png" alt="nic" class="question" id="128"></td>
</tr>
</table>
<table id="tabelka2">
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
<table id="tabelka3">
<tr><th>PUNKTACJA <br>INDYWIDUALNA</th></tr>
<tr><td><b><input type="text" id="gracz1" value="Gracz 1"/></b></td>
<td class="inny_wyglad">PTS</td></tr>
<tr><td><b><input type="text" id="gracz2" value="Gracz 2"/></b></td>
<td class="inny_wyglad">PTS</td></tr>
<tr><td><b><input type="text" id="gracz3" value="Gracz 3"/></b></td>
<td class="inny_wyglad">PTS</td></tr>
<tr><td><b><input type="text" id="gracz4" value="Gracz 4"/></b></td>
<td class="inny_wyglad">PTS</td></tr>
</table>
<div id="blok">
<div id="wynik0"><b><h2>Wynik Bitwy</h2></b></div>
<div id="madzy">Drużyna <br> III Rzeszy <br>& Włoch</div>
<div id="czarni">Drużyna <br> Wielkiej Brytani <br>& Sojuszników</div>
<div id="wynik1"></div>
<div id="wynik2"></div>
</div>
</div>

<?php

include("kodzik.php");

?>

<div id="pytka"><h2>Treść Pytania:<br></h2><h2><?php echo $Pyt ?></h2></div><br>
<div class="Odp" id="OdpA" onclick="sprawdz(OdpA)"><h1>A)<?php echo $OdpA ?></h1></div><br>
<div class="Odp" id="OdpB" onclick="sprawdz(OdpB)"><h1>B)<?php echo $OdpB ?></h1></div><br>
<div class="Odp" id="OdpC" onclick="sprawdz(OdpC)"><h1>C)<?php echo $OdpC ?></h1></div><br>

<div id="komunikat1" font size="14"><br><center>Brawo, udąło Ci się zdobyć punkt!</center></div>
<div id="komunikat2" font size="14"><br><center>Błąd, nie otrzymujesz punktu!</center></div>

<div id="pytanka">
</div>
<div id="drzewa">
<table id="tabla" align="left">
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
 <td onClick="zmien(1)"> <img src="chmurka.png" alt="jedyneczka" id="1"></td>
 <td onClick="zmien(2)"> <img src="chmurka.png" alt="jedyneczka" id="2"></td>
 <td onClick="zmien(3)" > <img src="chmurka.png" alt="jedyneczka" id="3"></td>
 <td onClick="zmien(4)" > <img src="chmurka.png" alt="jedyneczka" id="4"></td>
 <td onClick="zmien(5)" > <img src="chmurka.png" alt="jedyneczka" id="5"></td>
 <td onClick="zmien(6)" > <img src="chmurka.png" alt="jedyneczka" id="6"></td>
 <td onClick="zmien(7)" > <img src="chmurka.png" alt="jedyneczka" id="7"></td>
 <td onClick="zmien(8)" > <img src="chmurka.png" alt="jedyneczka" id="8"></td>
</tr>
<tr>
 <td class="inny_td">2</td>
 <td onClick="zmien(9)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="9"></td>
 <td onClick="zmien(10)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="10"></td>
 <td onClick="zmien(11)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="11"></td>
 <td onClick="zmien(12)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="12"></td>
 <td onClick="zmien(13)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="13"></td>
 <td onClick="zmien(14)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="14"></td>
 <td onClick="zmien(15)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="15"></td>
 <td onClick="zmien(16)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="16"></td>
</tr>
<tr>
 <td class="inny_td">3</td>
 <td onClick="zmien(17)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="17"></td>
 <td onClick="zmien(18)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="18"></td>
 <td onClick="zmien(19)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="19"></td>
 <td onClick="zmien(20)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="20"></td>
 <td onClick="zmien(21)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="21"></td>
 <td onClick="zmien(22)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="22"></td>
 <td onClick="zmien(23)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="23"></td>
 <td onClick="zmien(24)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="24"></td>
</tr>
<tr>
 <td class="inny_td">4</td>
 <td onClick="zmien(25)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="25"></td>
 <td onClick="zmien(26)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="26"></td>
 <td onClick="zmien(27)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="27"></td>
 <td onClick="zmien(28)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="28"></td>
 <td onClick="zmien(29)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="29"></td>
 <td onClick="zmien(30)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="30"></td>
 <td onClick="zmien(31)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="31"></td>
 <td onClick="zmien(32)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="32"></td>
</tr>
<tr>
 <td class="inny_td">5</td>
 <td onClick="zmien(33)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="33"></td>
 <td onClick="zmien(34)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="34"></td>
 <td onClick="zmien(35)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="35"></td>
 <td onClick="zmien(36)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="36"></td>
 <td onClick="zmien(37)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="37"></td>
 <td onClick="zmien(38)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="38"></td>
 <td onClick="zmien(39)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="39"></td>
 <td onClick="zmien(40)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="40"></td>
</tr>
<tr>
 <td class="inny_td">6</td>
 <td onClick="zmien(41)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="41"></td>
 <td onClick="zmien(42)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="42"></td>
 <td onClick="zmien(43)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="43"></td>
 <td onClick="zmien(44)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="44"></td>
 <td onClick="zmien(45)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="45"></td>
 <td onClick="zmien(46)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="46"></td>
 <td onClick="zmien(47)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="47"></td>
 <td onClick="zmien(48)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="48"></td>
</tr>
<tr>
 <td class="inny_td">7</td>
 <td onClick="zmien(49)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="49"></td>
 <td onClick="zmien(50)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="50"></td>
 <td onClick="zmien(51)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="51"></td>
 <td onClick="zmien(52)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="52"></td>
 <td onClick="zmien(53)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="53"></td>
 <td onClick="zmien(54)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="54"></td>
 <td onClick="zmien(55)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="55"></td>
 <td onClick="zmien(56)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="56"></td>
</tr>
<tr>
 <td class="inny_td">8</td>
 <td onClick="zmien(57)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="57"></td>
 <td onClick="zmien(58)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="58"></td>
 <td onClick="zmien(59)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="59"></td>
 <td onClick="zmien(60)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="60"></td>
 <td onClick="zmien(61)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="61"></td>
 <td onClick="zmien(62)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="62"></td>
 <td onClick="zmien(63)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="63"></td>
 <td onClick="zmien(64)" > <img src="chmurka.png" alt="kolko lub krzyzyk" id="64"></td>
</tr>
</table>
</div>

<div id="kwadracik1">
<div id="samolot1a"></div>
<div id="samolot2a"><div id="kula1"></div></div>
<div id="pocisk1"></div>
<div id="boom1"></div>
<div id="bangbang1"></div>
</div>

<div id="pytania1">
<br>
<div id="pyt1">
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

<?php

include("kodzik.php");

?>

<div id="pytka1"><p>Treść Pytania 2:<br></p><h2><?php echo $Pyt ?></h2></div><br>
<div class="Odp" id="OdpA1" onclick="sprawdz1(OdpA1)"><h2>A)<?php echo $OdpA ?></h2></div><br>
<div class="Odp" id="OdpB1" onclick="sprawdz1(OdpB1)"><h2>B)<?php echo $OdpB ?></h2></div><br>
<div class="Odp" id="OdpC1" onclick="sprawdz1(OdpC1)"><h2>C)<?php echo $OdpC ?></h2></div><br>

<div id="komunikat1a" font size="14"><br><center>Brawo, udąło Ci się zdobyć punkt!</center></div>
<div id="komunikat2a" font size="14"><br><center>Błąd, nie otrzymujesz punktu!</center></div>

<div id="pytanka1">
</div>
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
$('.question').on('click', function() 
			{
				$("#pytanka").load('kodzik.php');
			}
		});
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