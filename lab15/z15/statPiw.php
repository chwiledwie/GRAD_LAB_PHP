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

<li><a href="stan.php">Stan</a></li>
<li><a class="active" href="stat.php">Statystyka</a></li>
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
 // koszyk
?>
    
     
    <p class="pasek1"> Statystyka:</p>
    
    <table class="tabelkaG">
        <tr><td><a href="statWK.php#kom">Wypożyczone książki</a></td></tr>
        <tr><td><a href="statDK.php#kom">Dostępne książki</a></td></tr>
        <tr><td><a href="statWszK.php#kom">Wszystkie książki</a></td></tr>
        <tr><td><a href="statKiw.php#kom">Książki posortowane wg. ilości wypożyczeń</a></td></tr>
        <tr><td><a href="statCZiw.php#kom">Czytelnicy posortowani wg. ilości wypożyczeń</a></td></tr>
    <tr><td><a href="statPiw.php#kom">Pracownicy posortowani wg. ilości wypożyczeń</a></td></tr>
        <tr><td><a href="statGiw.php#kom">Gatunki posortowane wg. ilości wypożyczonych książek</a></td></tr>
        <tr><td><a href="statWiw.php#kom">Wydawnictwa posortowane wg. ilości wypożyczeń</a></td></tr>
        <tr><td><a href="statAiw.php#kom">Autorzy posortowani wg. ilości wypożyczeń</a></td></tr>
    </table>
    
     
    <p class="pasekK">Pracownicy posortowani wg. ilości wypożyczeń:</p>
    
    <table class="tabelkaG">
    <?php

include 'confdb.php';
 $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());  
 
 

    $zapytanie4 = mysql_query("SELECT *,COUNT(IDP) FROM wypozyczenia GROUP BY IDP ORDER BY COUNT(IDP) DESC;"); //wybiera tabelę i pobiera z niej wszystkie dane


if ($zapytanie4) {  //jeśli zapytanie można wykonać to...
    while ($shit4 = mysql_fetch_array($zapytanie4)) { //robi pętlę i przypisuje wszystkie dane do zmiennej
   
       
    $IDP4=$shit4['IDP'];
    
    $queryK4 = "SELECT * FROM pracownik WHERE IDP='$IDP4';";
    $wynikK4 = mysql_fetch_row( mysql_query( $queryK4 ) );
    
   
    
echo' <tr><td>Wypożyczył: '.$shit4['COUNT(IDP)'].', Nazwisko: '.$wynikK4[3].'</td>
 


</tr><br/>';
    }
}

 ?>   
     </table> 
      
      
    
      
    
   
   
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



