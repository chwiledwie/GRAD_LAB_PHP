<?php

include 'confdb.php';


isset($_GET['a']) and $a = $_GET['a'];
isset($_GET['idw']) and $id= $_GET['idw'];
 
if($a == 'del' and !empty($id))
{
    /* usuwamy rekord */
    mysql_query("DELETE FROM watek WHERE idw='$id'")
    or die('Błąd zapytania: '.mysql_error());
 
    echo 'Wątek został usunięty.';
    echo'<a href="delw.php">Wróć</a>';
}

?>