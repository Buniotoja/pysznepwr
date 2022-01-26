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
	<title>Pizzeria pod Pałącem Schafftotschów</title>
	
	<link rel="stylesheet" href="style.css"/>
	<link rel = "preconnect" href = "https://fonts.gstatic.com"/>
	<link href = "https://fonts.googleapis.com/css2? family = Josefin + Sans & family = Roboto & display = swap "rel =" stylesheet "/>
</head>

<body>
	
<?php

	$przywitanie="Witaj ".$_SESSION['imie']."!";
	echo "<h3>$przywitanie</h3>";
	echo '<a class="przejscia" href="logout.php">Wyloguj się!</a>';
	$przywitanie="E-mail: ".$_SESSION['email'];
	echo "<h3>$przywitanie</h3>";

	echo "<br/><br/>";

?>
<a class="przejscia" href="menu1.php">Pizza Hut<a/><br/>
<a class="przejscia" href="menu2.php">Noor Kebab<a/><br/>
<a class="przejscia" href="menu3.php">Mc Donald<a/><br/>


</body>
</html>