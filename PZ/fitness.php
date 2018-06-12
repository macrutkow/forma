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
    
    <script type="text/javascript">
       function ne(o){
          if(document.getElementById(o).style.display=='') document.getElementById(o).style.display = 'none';
          else document.getElementById(o).style.display='';
       }
    </script>
    
    
	
</head>

<body>
	<div id="container">
	
		<div id="logo">
		Forma do Lata
		</div>
	
		<div id="menu">
			<div class="option" ><a href="index.php"  class="tilelinkhtml5">Strona główna</a></div>
			<div class="option"><a href="fitness.php" class="tilelinkhtml5" style="text-decoration: underline">Atlas ćwiczeń</a></div>
			<div class="option"><a href="dieta.php" class="tilelinkhtml5">Dieta</a></div>
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
		<span class="bigtitle">Atlas ćwiczeń</span>
			
			<div class="dottedline"></div>
			
            <span class="smalltitle">Nogi</span> <br /><br />
            
                <span class="podtytul" onclick="ne('o1')">Przysiad ze sztangą na karku</span><br /><br /> 
                        <div id="o1" style="display:none;">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/artFx1gn52s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                        </div>
            
                <span class="podtytul" onclick="ne('o11')">Wykroki</span><br /><br /> 
                        <div id="o11" style="display:none;">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/fqymGym7YL0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                        </div>
            
                <span class="podtytul" onclick="ne('o12')">Wspięcia na palce</span><br /><br /> 
                        <div id="o12" style="display:none;">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/mbyTbDJBsR8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                        </div>        
                <div class="dottedline"></div>
            
            <span class="smalltitle">Plecy</span> <br /><br />
                <span class="podtytul" onclick="ne('o13')">Martwy ciąg</span><br /><br /> 
                            <div id="o13" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Vzn3hCHUkD0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
                <span class="podtytul" onclick="ne('o14')">Wiosłowanie sztangą w opadzie</span><br /><br /> 
                            <div id="o14" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/PaqvesLOcpA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
                <span class="podtytul" onclick="ne('o15')">Ściąganie drążka na wyciągu</span><br /><br /> 
                            <div id="o15" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/-2am6tU5HCs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>

                <div class="dottedline"></div>
            <span class="smalltitle">Klatka piersiowa</span> <br /><br />
            
                <span class="podtytul" onclick="ne('o16')">Wyciskanie na ławce płaskej</span><br /><br /> 
                            <div id="o16" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/9n4lgCrxr0I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
                <span class="podtytul" onclick="ne('o17')">Wyciskanie sztangielek na ławce skośnej</span><br /><br /> 
                            <div id="o17" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/0gPt--vcoW4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>

                <span class="podtytul" onclick="ne('o18')">Krzyżowanie linek wyciągu górnego</span><br /><br /> 
                            <div id="o18" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/LHO_eNwI9Bc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>


                <div class="dottedline"></div>
            <span class="smalltitle">Brzuch</span> <br /><br />

                <span class="podtytul" onclick="ne('o19')">Allahy</span><br /><br /> 
                            <div id="o19" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/AAQRVXSHlbs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
                <span class="podtytul" onclick="ne('o110')">Brzuszki</span><br /><br /> 
                            <div id="o110" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/ewz8Svo6n4s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>

                <div class="dottedline"></div>
            
            <span class="smalltitle">Barki</span> <br /><br />
            
                 <span class="podtytul" onclick="ne('o111')">Wyciskanie żołnierskie</span><br /><br /> 
                            <div id="o111" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/dKbqyMER1zA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>

                 <span class="podtytul" onclick="ne('o112')">Arnoldki</span><br /><br /> 
                            <div id="o112" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Q1tpgtNxgeQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>

                <span class="podtytul" onclick="ne('o113')">Odwodzenie ramion w bok w opadzie tułowia siedząc</span><br /><br /> 
                            <div id="o113" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/NBLs0ksPczQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
            

                 <div class="dottedline"></div>
            
            <span class="smalltitle">Ramiona</span> <br /><br />
            
            
                <span class="podtytul" onclick="ne('o114')">Uginanie przedramion ze sztangą prostą, podchwytem, stojąc</span><br /><br /> 
                            <div id="o114" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/415ZedAmmGg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
                <span class="podtytul" onclick="ne('o115')">Prostowanie ramion na wyciągu górnym nachwytem</span><br /><br /> 
                            <div id="o115" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/qM10SRGkZPs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
                <span class="podtytul" onclick="ne('o116')">Uginanie przedramion ze sztangielkami, stojąc</span><br /><br /> 
                            <div id="o116" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/HTcXehjywD0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
                <span class="podtytul" onclick="ne('o117')">Wyciskanie francuskie sztangielki oburącz, siedząc</span><br /><br /> 
                            <div id="o117" style="display:none;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/lRJz0tqLlpk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <br /><br /> 
                            </div>
            
                <div class="dottedline"></div>

            
		</div>	

	
	
	

	<div id="footer">
			Forma do Lata - najlepsza pomoc do stworzenia upragninej sylwetki! &copy; Wszelkie prawa zastrzeżone
		</div>
	
	
	</div>




</body>
</html>