<?php

include 'confdb.php';


$utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());  

print '<br/>';

if ( isset($_POST['loginw']) && isset($_POST['haslow']) && isset($_POST['nazwisko']) && isset($_POST['imie']) && isset($_POST['adres'])
       )
{
    
    //obliczanie id
    
    
    $loginw = $_POST['loginw'];
    $haslow = $_POST['haslow'];
    $nazwiskow = $_POST['nazwisko'];
    $imie = $_POST['imie'];
    $adres = $_POST['adres'];
   
    
    
    
    $queryk = "INSERT INTO wypozyczajacy (IDWyp, loginw, haslow, nazwisko, imie, adres) "
            . "VALUES ('','$loginw','$haslow','$nazwiskow','$imie','$adres');";
    mysql_query( $queryk ) or die('Błąd: '.mysql_error());
    
    print '<font size="5"> Rejestracja zakonczona sukcesem! Teraz możesz się zalogować <a href="zalogujw.php"> tutaj </a></font>';
}
else
{
    print 'nie wprowadzono wszystkich danych. <a href="rejestracjaw.php> Wróć </a>';
}


?>