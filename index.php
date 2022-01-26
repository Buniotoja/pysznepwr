<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: uz_klient.php');
		exit();
	}

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

	<h1>Pyszne.PWr</h1><br /><br />
	
	<a class="przejscia" href="rejestracja.php">Rejestracja - załóż konto!</a>
	<br /><br />
	
	<form action="zaloguj.php" method="post">
		
		<h2>Email:</h2><input type="text" name="login" class="wpisywanie"/> <br />
		<h2>Hasło:</h2><input type="password" name="haslo" class="wpisywanie"/> <br /><br/>
		
		<input type="submit" value="Zaloguj się" class="przycisk" />
	
	</form>
</body>
</html>