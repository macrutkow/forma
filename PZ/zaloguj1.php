<?php

	session_start();
	
	if (isset($_SESSION['zalogowany']))
	{
		header('Location: index_zalogowany.php');
		exit();
	}

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
			<div class="option" ><a href="index.php"  class="tilelinkhtml5" >Strona główna</a></div>
			<div class="option">Fitness</div>
			<div class="option">Dieta</div>
			<div class="option">Kalkulatory</div>
			<div class="option">O projekcie</div>
			<div class="option"><a href="rejestracja.php" class="tilelinkhtml5" style="color:#00FFBF">Rejestracja</a></div>
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
		
			
			<form action="zaloguj.php" method="post">
			
				Login: <br /> <input type="text" name="login" /> <br />
				Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj się" />
	
	</form>
	
	
	
	<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
	
	
	
	
	
	
	
	
	
	<div id="footer">
			Forma do Lata - najlepsza pomoc do stworzenia upragninej sylwetki! &copy; Wszelkie prawa zastrzeżone
		</div>
	
	
	</div>




</body>
</html>