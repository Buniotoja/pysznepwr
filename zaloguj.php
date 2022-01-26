<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		$prac = $_POST['pracownik'];

			
		
			if(!isset($prac))
			{
				$login=mysqli_real_escape_string($polaczenie,$login);
				$rezultat=$polaczenie->query("SELECT * FROM klienci WHERE email='$login'");
			}
			else{
				$login=mysqli_real_escape_string($polaczenie,$login);
				$rezultat=$polaczenie->query("SELECT * FROM pracownicy WHERE email='$login'");
			}
		
		
		
			if($rezultat)
			{
				$ilu_userow = $rezultat->num_rows;
				
				if($ilu_userow>0)
				{
					$wiersz = $rezultat->fetch_assoc();
					
					if(md5($haslo)==$wiersz['haslo'])
					{
						$_SESSION['zalogowany'] = true;
						
						unset($_SESSION['blad']);
						$rezultat->free_result();
						
						$_SESSION['id'] = $wiersz['id'];
						$_SESSION['imie'] = $wiersz['imie'];
						$_SESSION['nazwisko'] = $wiersz['nazwisko'];
						$_SESSION['email'] = $wiersz['email'];
						$_SESSION['uprawnienia'] = $wiersz['uprawnienia'];
						
						$kl_pr=$wiersz['uprawnienia'];
						if($kl_pr==1)
						{
							$_SESSION['bon'] = $wiersz['bon'];
							header('Location: uz_klient.php');
						}
						elseif($kl_pr==2)
						{
							$_SESSION['placa'] = $wiersz['placa'];
							$_SESSION['premia'] = $wiersz['premia'];
							header('Location: uz_prac.php');
						}
						elseif($kl_pr==3)
						{
							$_SESSION['placa'] = $wiersz['placa'];
							$_SESSION['premia'] = $wiersz['premia'];
							header('Location: uz_admin.php');
						}
						else{
							$_SESSION['blad'] = '<span style="color:red">Błąd, nie wykryto uprawnień!</span>';
							header('Location: index.php');
						}
						
						
					}
					else 
					{
						$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
						unset($prac);
						header('Location: index.php');
					}
					
				} else {
					
					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					unset($prac);
					header('Location: index.php');
					
					}
			
			}
		

		
		
		
		$polaczenie->close();
	}
	
?>