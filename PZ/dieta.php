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
			<div class="option" ><a href="index.php"  class="tilelinkhtml5">Strona główna</a></div>
			<div class="option"><a href="fitness.php" class="tilelinkhtml5">Atlas ćwiczeń</a></div>
			<div class="option"><a href="dieta.php" class="tilelinkhtml5" style="text-decoration: underline">Dieta</a></div>
			<div class="option"><a href="kalkulatory.php" class="tilelinkhtml5">Kalkulatory</a></div>
			<div class="option"><a href="oprojekcie.php" class="tilelinkhtml5">O projekcie</a></div>
			<div class="option"><a href="zaloguj1.php" class="tilelinkhtml5" style="color:#00FF40">Zaloguj</a></div>
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
		
		
		<div id="content">
		<span class="bigtitle">Diety</span>
			
			<div class="dottedline"></div>
			
            
            Dieta redukcyjna jest specyficznym schematem żywieniowym, ukierunkowanym na zniwelowanie nadmiaru tkanki tłuszczowej oraz pozbycie się zbędnych kilogramów. Proces ten jest długotrwały i opiera się przede wszystkim na manipulacji własnym metabolizmem oraz przestrzeganiu pewnych zasad. Podstawą diety redukcyjnej jest określenie własnego zapotrzebowania kalorycznego. Dzięki wyliczonemu bilansowi będziemy pewni, że dostarczamy organizmowi tyle energii, ile jest mu aktualnie potrzebne.
            
            <br /><br />
            
			Dieta białkowa to dieta odchudzająca, w której jadłospis zmienia się w zależności od tego, w której fazie diety jesteś. Pierwsza i druga faza diety białkowej powoduje zrzucenie zbędnych kilogramów, trzecia i czwarta pozwala uniknąć efektu jo-jo i utrzymać szczupłą sylwetkę przez długie lata. Poznaj jednodniowe jadłospisy odpowiednie dla poszczególnych faz diety białkowej.

			
			<br /><br />
			Cras et nulla vehicula, efficitur enim non, fermentum tortor. Curabitur id elementum leo. Sed eget turpis accumsan dolor mollis imperdiet. Praesent pellentesque laoreet lectus, at commodo magna varius vitae. Aliquam erat volutpat. Curabitur commodo, tortor laoreet sagittis cursus, nulla enim laoreet libero, et egestas risus ante vel orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc quis posuere massa, sed sollicitudin lorem. Mauris lacinia, massa efficitur malesuada luctus, arcu ex mattis erat, a venenatis magna risus nec neque. Nulla vulputate nisl urna, quis egestas orci suscipit tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras auctor nec elit at ultricies. Morbi aliquam pharetra diam, vitae porta felis. Pellentesque vel arcu tincidunt, luctus justo quis, ultrices erat. Vivamus efficitur leo vitae dui molestie, eu varius sapien iaculis. In quis pharetra mauris.
			
			<br /><br />			
			Nam ullamcorper turpis non tristique sollicitudin. Etiam id magna lacus. Pellentesque vestibulum ex eget quam consectetur, sit amet luctus erat feugiat. Sed gravida tellus tempus consequat rhoncus. Phasellus lobortis magna et risus pharetra, facilisis blandit sapien tristique. Vivamus aliquam interdum arcu, eget facilisis ante gravida ut. Proin nec nisl ut lacus finibus sagittis id non nibh. Donec volutpat pretium libero. Sed fermentum vel ante vitae mattis. Curabitur porttitor turpis at scelerisque auctor. Sed vitae iaculis risus, ut iaculis nibh.
		</div>	
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div id="footer">
			Forma do Lata - najlepsza pomoc do stworzenia upragninej sylwetki! &copy; Wszelkie prawa zastrzeżone
		</div>
	
	
	</div>




</body>
</html>