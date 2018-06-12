<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Forma do Lata!</title>
	<meta name="description" content="Serwis wprowadza nas w świat sportu oraz pomaga nam zadbać o swoje zdrowie fizyczne" />
	<meta name="keywords" content="sport, dieta, serwis sportowy, forma do lata, siłownia, BMI" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="Style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
</head>

<body>
	<div id="container">
	
		<div id="logo">
		Forma do Lata
		</div>
	
		<div id="menu">
			<div class="option">Strona główna</div>
			<div class="option">Fitness</div>
			<div class="option">Dieta</div>
			<div class="option">Kalkulatory</div>
			<div class="option">O projekcie</div>
				<div class="option">
			<?php
			if (isset($_SESSION['zalogowany']))
				{
					echo "Witaj ".$_SESSION['user'].'! [ <a href="logout.php" class="tilelinkhtml5" style="color:red; opacity:0.7;">Wyloguj się!</a> ]';
				}
	
			?>
			</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="topbar">
			<div id="topbarL">
				<i class="icon-trophy"></i>
			</div>
			<div id="topbarR">
			<span class="bigtitle">Aktywność fizyczna </span>
			<div style="height: 15px;"></div>
				to jeden z najistotniejszych elementów zdrowego stylu życia, a jej brak lub niedostateczna ilość może prowadzić do poważnych zaburzeń zdrowotnych. W przypadku dzieci i młodzieży jest to szczególnie niebezpieczne, gdyż brak ruchu może zakłócić właściwy rozwój młodego organizmu. Tymczasem mijający wiek dwudziesty, a przede wszystkim jego druga połowa, upływa nam... na siedząco
			</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="sidebar">
		<div class="optionL">Strona główna</div>
			<div class="optionL">Fitness</div>
			<div class="optionL">Dieta</div>
			<div class="optionL">Kalkulatory</div>
			<div class="optionL">O projekcie</div>
		</div>
		
		<div id="content">
			Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na swoje konto!<br /><br />
	
		<a href="zaloguj1.php">Zaloguj się na swoje konto!</a>
			<br /><br />
	
	
	
	
	
	<div id="footer">
			Forma do Lata - najlepsza pomoc do stworzenia upragninej sylwetki! &copy; Wszelkie prawa zastrzeżone
		</div>
	
	
	</div>




</body>
</html>