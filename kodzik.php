<?php
	function petla()
	{
	$c = mysqli_connect('localhost', 'root', '', 'pytanka1');
	
	$c->query("SET NAMES 'utf8' LATE 'utf8_polish_ci'");
	$c->query("SET CHARSET utf8");
	$z = mysqli_query($c,'SELECT id, Pytanie,OdpA,OdpB,OdpC,Poprawna,PTS FROM dywizja303 ORDER BY RAND() LIMIT 1');

	$tablica = [];

		while($row = mysqli_fetch_array($z))
		{
		$tablica[$i] =  $row['Pytanie'];
		$OdpA = $row['OdpA'];
		$OdpB = $row['OdpB'];
		$OdpC = $row['OdpC'];
		$Poprawna = $row['Poprawna'];
		}
	};
	petla();
	for($i=1; $i<50; $i++)
	{
		if($tablica[$i] != $row['Pytanie'])
		{
		header("Refresh:0");
		}
		else if ($tablica[$i] == $row['Pytanie'])
		{
		$Pyt =  $row['Pytanie'];
		$OdpA = $row['OdpA'];
		$OdpB = $row['OdpB'];
		$OdpC = $row['OdpC'];
		$Poprawna = $row['Poprawna'];
		}
	}	
	
echo '<div id="pytka"><p>Treść Pytania 1:<br></p><h2>'. $Pyt .'</h2></div><br>';
echo '<div id="OdpA" onclick="sprawdz(OdpA)"><h2>A)'. $OdpA .'</h2></div><br>';
echo '<div id="OdpB" onclick="sprawdz(OdpB)"><h2>B)'. $OdpB .'</h2></div><br>';
echo '<div id="OdpC" onclick="sprawdz(OdpC)"><h2>C)'. $OdpC .'</h2></div><br>'; 
echo $Poprawna;


if ($OdpA == $Poprawna)
{
	print "<script> var Popr = OdpA </script>";
}
else if($OdpB == $Poprawna)
{
	print "<script> var Popr = OdpB </script>";
}
else if ($OdpC == $Poprawna)
{
	print "<script> var Popr = OdpC </script>";
}
else
{
	echo "Błąd!";
}

mysqli_close($c);
?>