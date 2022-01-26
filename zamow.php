<?php

	session_start();
		
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Zamowienie</title>
	
	<link rel="stylesheet" href="style.css"/>
	<link rel = "preconnect" href = "https://fonts.gstatic.com"/>
	<link href = "https://fonts.googleapis.com/css2? family = Josefin + Sans & family = Roboto & display = swap "rel =" stylesheet "/>
</head>
<body>
<?php


	$ilosc1=$_POST['ilosc1'];
	$ilosc2=$_POST['ilosc2'];
	$ilosc3=$_POST['ilosc3'];
	$ilosc4=$_POST['ilosc4'];
	$nr_menu=$_SESSION['nr_menu'];	
		
	require_once "connect.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		$c1=@$polaczenie->query("SELECT cena FROM $nr_menu WHERE id=1");
		$c2=@$polaczenie->query("SELECT cena FROM $nr_menu WHERE id=2");
		$c3=@$polaczenie->query("SELECT cena FROM $nr_menu WHERE id=3");
		$c4=@$polaczenie->query("SELECT cena FROM $nr_menu WHERE id=4");
		
		$cn1=$c1->fetch_assoc();
		$cn2=$c2->fetch_assoc();
		$cn3=$c3->fetch_assoc();
		$cn4=$c4->fetch_assoc();
		
		if($ilosc1=="")$ilosc1=0;
		
		if($ilosc2=="")$ilosc2=0;
		
		if($ilosc3=="")$ilosc3=0;
		
		if($ilosc4=="")$ilosc4=0;
		
	$cena_dania=$ilosc1*$cn1['cena']+$ilosc2*$cn2['cena']+$ilosc3*$cn3['cena']+$ilosc4*$cn4['cena'];

echo "<h3>Cena za zamowienie: $cena_dania</h3>";

echo '<br/><a class="przejscia" href="uz_klient.php">Zapłać i wyjdź</a>';

$polaczenie->close();
?>



</body>
</html>