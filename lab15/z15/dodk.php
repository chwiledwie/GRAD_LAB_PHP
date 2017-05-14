<?php 
session_start();
include 'confdb.php';  
error_reporting(0);
                   if(isset($_POST['k_dod']) ){
            $IDA=$_POST['IDA'];
            $IDG=$_POST['IDG'];
            $IDWyd=$_POST['IDWyd'];
            $Sygnatura=$_POST['syg'];
            $Tytul=$_POST['tytul'];
            $RW=$_POST['rokwyd'];
            $CZ=$_POST['cenaZ'];
         
            include 'confdb.php';  
              $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error()); 
             $quers = mysql_query("SELECT * FROM ksiazka WHERE Tytul='$Tytul';");
    $wynikD = mysql_fetch_row($quers);
   
    if ($wynikD[0] == 0) {
            
                
               $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error()); 
             
             $querr="insert into ksiazka (IDK,IDA,IDG,IDWyd,Sygnatura,Tytul,RokWydania,CenaZakupu,Stan) values "
                     . "('','$IDA','$IDG','$IDWyd','$Sygnatura','$Tytul','$RW','$CZ','1');";
             
$result22=  mysql_query($querr,$conn)or die ('BŁĄD!'.mysql_error());
             
            
                  }else {
                      $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error()); 

        $querDDD="update ksiazka set ksiazka.Stan=(ksiazka.Stan+1) where Tytul='$Tytul';";
        $result33=  mysql_query($querDDD,$conn)or die ('BŁĄD!'.mysql_error());
    
   }
   mysql_free_result($result22);
mysql_close($conn);
  
 echo '<p>Dodano książkę do zbioru. Wróć <a href="dodajK.php#kom">tutaj</a></p>';
  }
            
else
  {
 
  echo '<p>Nie udało się dodać książki!!! Wróć <a href="dodajK.php#kom">tutaj</a></p>';
 
  }
            ?>
            
     
       
        
