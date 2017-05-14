<?php 
session_start();

include 'confdb.php';
 $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error()); 
        
        error_reporting(0);
        
        if(isset($_POST['k_wyp']) ){
              
               $idk=$_POST['idK'];
               $queryO = "SELECT * FROM ksiazka WHERE IDK='$idk';";
    $wynikO = mysql_fetch_row( mysql_query( $queryO ) );
            
    $nazwiskop=$_POST['nazwiskop'];
           
            $query2 = "SELECT * FROM pracownik WHERE Nazwisko='$nazwiskop';";
    $wynik2 = mysql_fetch_row( mysql_query( $query2 ) );
    
    $nazwiskowyp=$_POST['nazwiskow'];
    $imiew=$_POST['imiew'];
     $query3 = "SELECT * FROM wypozyczajacy WHERE Nazwisko='$nazwiskowyp' AND Imie='$imiew';";
    $wynik3 = mysql_fetch_row( mysql_query( $query3 ) );
    
   $datazw=$_POST['dz'];   
            
       $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error()); 
             
             $querr="insert into wypozyczenia (IDW,IDK,IDG,IDWyd,IDA,IDP,IDWyp,DataZwrotu) "
                     . "values ('','$wynikO[0]','$wynikO[2]','$wynikO[3]','$wynikO[1]','$wynik2[0]','$wynik3[0]','$datazw');";
             
$result22=  mysql_query($querr,$conn)or die ('BŁĄD!'.mysql_error());
             
             

           $querrSS="UPDATE ksiazka SET ksiazka.Stan = (ksiazka.Stan-1) WHERE IDK='$wynikO[0]';";
             
$result22S=  mysql_query($querrSS,$conn)or die ('BŁĄD!'.mysql_error());
               
mysql_free_result($result22);
mysql_close($conn);
                
  
 echo '<p>Wypożyczono książkę ze zbioru. Wróć <a href="wyp.php#kom">tutaj</a></p>';
  }
            
else
  {
 
  echo '<p>Nie udało się wypożyczyć książki!!! Wróć <a href="wyp.php#kom">tutaj</a></p>';
 
  }
         
            ?>
            
     
       
        


