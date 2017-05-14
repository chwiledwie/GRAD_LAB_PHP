<?php

include 'confdb.php';


print '<br/>';

if ( isset($_POST['login']) && isset($_POST['haslo']) )
{
    print '<font size="5"> Rejestracja zakonczona sukcesem!</font>';
    print '<a href="index.php#kom">Wróć</a>';
    //obliczanie id
    $id = mysql_num_rows(mysql_query("SELECT * FROM konto"));
    $nazwa = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    $colorbg = sprintf("#%06x",rand(0,16777215)); 
    
    $query = "INSERT INTO konto (idu, login, haslo, colorbg) VALUES ('','$nazwa','$haslo','$colorbg')";
    mysql_query( $query ) or die('Błąd: '.mysql_error());
}
else
{
    print 'nie wprowadzono danych';
}


?>