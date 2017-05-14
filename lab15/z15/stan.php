<?php
session_start();
if(!isSet($_SESSION['loginp'])){
 $kom = $_SESSION['komunikat'] = "Nie jestes zalogowany!";
  echo $kom;
  include('loginpf.php');
  exit();
}
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chwile Dwie - Panel pracownika</title>
        
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <body>
        
        
      <!— Główny nagłówek strony -->
<header role=”banner”>
<!—Grupa nagłówków, użcie hgroup -->
   <!-- Header -->
    
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading"></div>
           
            </div>
        </div>
    </header>
      <?php

    if ( isset($_SESSION['loginp']) ){
        ?>

      <nav id="menu" role="navigation">
       <ul class="w3-navbar">
<li><a href="logout.php">Wyloguj</a></li>
<li><a href="dodajK.php">Dodaj ksiażkę</a></li>
<!-- tak jak portal ogłoszeń sort i filtr (po sygnaturze) -->

<li><a href="wyp.php">Wypożycz</a></li>
<li><a class="active" href="stan.php">Stan</a></li>
<li><a href="stat.php">Statystyka</a></li>
<!--
<li><a href="doddostawce.php">Dodaj dostawcę</a></li>
<li><a href="dodtowar.php">Dodaj towar</a></li>
<li><a href="pdostawe.php">Przyjmij dostawę</a></li>

<li><a href="osprzedazy.php">Obsługa sprzedaży</a></li>
<li><a href="historiad.php">Historia dostaw</a></li>
<li><a href="historias.php">Historia sprzedaży</a></li>
-->

</ul>
</nav>
    <?php
    
    }else{
?>
 <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
           <li><a href="index.php#kom">Strona główna</a></li>
           <li><a href="loginpf.php#kom">Zaloguj</a></li>
          
           
          
        
   </nav>

<?php 
    }
?>

<section id="kom" style="min-height: 600px;">

 <?php
if ( isset($_SESSION['loginp']) )
{
 // del z forum - step - metoda GET
    
?>
    
     
    <p class="pasekK">Stan książek:</p>
    <form action="stanK.php#kom" method="POST">
                         <label for="f">Wyszukaj książkę: </label>
<br/>

<label for="f">Podaj sygnaturę: </label>
<input type=text name="sl"/><br/>
<input type=submit name="ff" value="Szukaj"/><br/>
                     </form>
  
    
    
    <table class="tabelkaG">
    <?php

include 'confdb.php';
 $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());  
 
$stan=1;
if (isset($_GET['stan']) && ctype_digit($_GET['stan'])) {
    $stan = max(1, intval($_GET['stan']));
}
$tmp = $stan - 1;
$prod_na_str = 5; 

    $zapytanie = mysql_query('SELECT * FROM ksiazka ORDER BY Tytul LIMIT '.($tmp * $prod_na_str) .','. $prod_na_str); //wybiera tabelę i pobiera z niej wszystkie dane


if ($zapytanie) {  //jeśli zapytanie można wykonać to...
    while ($shit = mysql_fetch_array($zapytanie)) { //robi pętlę i przypisuje wszystkie dane do zmiennej
   
    $IDAA=$shit['IDA'];
    $queryA = "SELECT * FROM autor WHERE IDA='$IDAA';";
    $wynikA = mysql_fetch_row( mysql_query( $queryA ) );
    
echo' <tr><td>Tytył: '.$shit['Tytul'].', Autor: '.$wynikA[1].' '.$wynikA[2].', Rok wydania: '.$shit['RokWydania'].', Stan: '.$shit['Stan'].'</td>
 


</tr><br/>';
    }
}

 ?>   
     </table> 
    <?php   
    $wszystkich_prod = mysql_query("SELECT COUNT(1) FROM ksiazka") or die(mysql_error()); 
       

$ile_podstron = ceil($wszystkich_prod / $prod_na_str)+1;

for ($i = 1; $i <= $ile_podstron; $i++) {
    echo '<center><a href="?stan=' . $i . '#kom">' . $i . '</a></center>';
}
?>
   
   
<?php
}else {
    ?>

        <div class="mmm">
            <img src="img/img1.jpg"/>
        </div>
<div>
   
    <p class="witaj">Zapraszam do korzystania z biblioteki. Aby korzystać należy się zarejestrować, a następnie zalogować.</p>
    <p class="contentW">Naszą pasją są ksiażki...</p>
    
        
</div>
<div>
    <img class="pic" src="img/img2.jpg"/>
</div>
<?php
}
?>
<br>


</section>

<footer class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Chwile Dwie 2016</span>
                </div>
                <div class="col-md-4">
                    <p>Goście: 
                        <?php include("licznik_wejsc.php"); ?>
                            </p>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>



