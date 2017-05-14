<?php

include 'confdb.php';


print '<br/>';

if ( isset($_POST['login']) && isset($_POST['haslo']) )
{
    print '<font size="5"> Rejestracja zakonczona sukcesem!</font>';
    //obliczanie id
    $id = mysql_num_rows(mysql_query("SELECT * FROM konto"));
    $nazwa = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    $query = "INSERT INTO konto (idk, login, haslo) VALUES ('','$nazwa','$haslo')";
    mysql_query( $query ) or die('Błąd: '.mysql_error());
}
else
{
    print 'nie wprowadzono danych';
}


?>