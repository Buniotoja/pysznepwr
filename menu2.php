<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
$_SESSION['nr_menu']='menu2';
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Pyszne.PWr</title>
	
	<link rel="stylesheet" href="style.css"/>
	<link rel = "preconnect" href = "https://fonts.gstatic.com"/>
	<link href = "https://fonts.googleapis.com/css2? family = Josefin + Sans & family = Roboto & display = swap "rel =" stylesheet "/>
</head>

<body>
<form action="zamow.php" method="post">
	
	<input type='number' name='ilosc1' class="wpisywanie2"/><br/>
		<?php 
		
			require_once "connect.php";
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

				$pizza=@$polaczenie->query("SELECT nazwa, skladniki, cena FROM menu2 WHERE id=1");
				$pizzaAs=$pizza->fetch_assoc(); 

				$zmienna1=$pizzaAs['nazwa'];
				$zmienna2=$pizzaAs['skladniki'];
				$zmienna3=$pizzaAs['cena'];
				echo ("<h3>$zmienna1	|	$zmienna2	|	$zmienna3 zł</h3>");
				
		?>
		<br/>
		<br/>
	<input type='number' name='ilosc2' class="wpisywanie2"/><br/>
		<?php 
		
			require_once "connect.php";
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

				$pizza=@$polaczenie->query("SELECT nazwa, skladniki, cena FROM menu2 WHERE id=2");
				$pizzaAs=$pizza->fetch_assoc(); 

				$zmienna1=$pizzaAs['nazwa'];
				$zmienna2=$pizzaAs['skladniki'];
				$zmienna3=$pizzaAs['cena'];
				echo ("<h3>$zmienna1	|	$zmienna2	|	$zmienna3 zł</h3>");
				
		?>
		<br/>
		<br/>
		<br/>
		<br/>
	<input type='number' name='ilosc3' class="wpisywanie2"/><br/>
		<?php 
		
			require_once "connect.php";
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

				$pizza=@$polaczenie->query("SELECT nazwa, skladniki, cena FROM menu2 WHERE id=3");
				$pizzaAs=$pizza->fetch_assoc(); 

				$zmienna1=$pizzaAs['nazwa'];
				$zmienna2=$pizzaAs['skladniki'];
				$zmienna3=$pizzaAs['cena'];
				echo ("<h3>$zmienna1	|	$zmienna2	|	$zmienna3 zł</h3>");
				
		?>

		<br/>
		<br/>
	<input type='number' name='ilosc4' class="wpisywanie2"/><br/>
		<?php 
		
			require_once "connect.php";
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

				$pizza=@$polaczenie->query("SELECT nazwa, skladniki, cena FROM menu2 WHERE id=4");
				$pizzaAs=$pizza->fetch_assoc(); 

				$zmienna1=$pizzaAs['nazwa'];
				$zmienna2=$pizzaAs['skladniki'];
				$zmienna3=$pizzaAs['cena'];
				echo ("<h3>$zmienna1	|	$zmienna2	|	$zmienna3 zł</h3>");
				
		?>
		<br/>
		<br/>
		<input type="submit" value="zamów" class="przycisk"/>
</form>
	<?php $polaczenie->close();?>
</body>
</html>