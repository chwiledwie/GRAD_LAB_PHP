<?php
include 'confdb.php';

if ( !isset( $_GET['step'] ) )
{
$zapytanie = mysql_query("SELECT * FROM watek"); //wybiera tabelę i pobiera z niej wszystkie dane


if ($zapytanie) {  //jeśli zapytanie można wykonać to...
    echo "<table cellpadding=\"8\" border=5>";
    while ($shit = mysql_fetch_array($zapytanie)) { //robi pętlę i przypisuje wszystkie dane do zmiennej
    $AUTOR_ID = $shit['idk'];

    $query = "SELECT login FROM konto WHERE idk='$AUTOR_ID'";
    $wynik = mysql_fetch_row( mysql_query( $query ) );
    
    
echo' <tr><td><a href="index.php?t='.$shit['idw'].'#forum">'.$shit['nazwaw'].'</a></td>
         <td>
       
        <a href="delw2.php?a=del&idw='.$shit[idw].'">usuń</a>
       </td>
        </tr><br/>';

    
    }
    }
    
    echo'<a href="index.php#forum">Wróć</a>';
}




?>