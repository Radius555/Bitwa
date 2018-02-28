<?php
	$c = mysqli_connect('localhost', 'root', '', 'pytanka1');
	
	$c->query("SET NAMES 'utf8' LATE 'utf8_polish_ci'");
	$c->query("SET CHARSET utf8");
	$z = mysqli_query($c,'SELECT id, Pytanie,OdpA,OdpB,OdpC,Poprawna,PTS FROM dywizja303 ORDER BY RAND() LIMIT 1');

    while($row = mysqli_fetch_array($z))
	{
    $Pyt1 =  $row['Pytanie'];
	
	$OdpA1 = $row['OdpA'];

	$OdpB1 = $row['OdpB'];
	
	$OdpC1 = $row['OdpC'];
	
	$Poprawna1 = $row['Poprawna'];
	}	

echo '<div id="pytka1"><p>Treść Pytania 2:<br></p><h2>'. $Pyt1 .'</h2></div><br>';
echo '<div id="OdpA1" onclick="sprawdz1(OdpA1)"><h2>A)'. $OdpA1 .'</h2></div><br>';
echo '<div id="OdpB1" onclick="sprawdz1(OdpB1)"><h2>B)'. $OdpB1 .'</h2></div><br>';
echo '<div id="OdpC1" onclick="sprawdz1(OdpC1)"><h2>C)'. $OdpC1 .'</h2></div><br>'; 
echo $Poprawna1;

if ($OdpA1 == $Poprawna1)
{
	print "<script> var Popr1 = OdpA1 </script>";
}
else if($OdpB1 == $Poprawna1)
{
	print "<script> var Popr1 = OdpB1 </script>";
}
else if ($OdpC1 == $Poprawna1)
{
	print "<script> var Popr1 = OdpC1 </script>";
}
else
{
	echo "Błąd!";
}


mysqli_close($c);
?>