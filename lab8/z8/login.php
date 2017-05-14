<?php
session_start();

include 'confdb.php';

print '<br/>';

if ( isset($_POST['login']) && isset($_POST['haslo']) )
{
    //print '<font size="5"> Rejestracja zakonczona sukcesem!</font>';
    //wyciaganie informacji o danym uzytkowniku
    $nazwa = $_POST['login'];
    $haslo = $_POST['haslo'];
    $query = "SELECT * FROM konto WHERE login='$nazwa' AND haslo='$haslo'";
    $wynik = mysql_fetch_row( mysql_query( $query ) );
    
    print '<font size="5"> Pomyslnie zalogowano jako '.$wynik[1].'!</font>
    <br/>Przejdź do forum <a href="index.php#forum"> tutaj </a>';
    
    $_SESSION['log'] = $wynik[0];
    
    
    //$query = "INSERT INTO TAB_USER (ID, NAZWA, HASLO) VALUES ('$id','$nazwa','$haslo')";
    //mysql_query( $query ) or die('Błąd: '.mysql_error());
}


else
{
    print 'nie wprowadzono danych! <a href="/index.php> Wróć </a>';
}

?>






