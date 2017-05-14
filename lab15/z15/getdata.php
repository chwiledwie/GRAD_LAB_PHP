<?php
include 'confdb.php';
 $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());
if(!empty($_POST['IDG'])){
    $idG=$_POST['IDG'];
    $zapytanieD = mysql_query("SELECT * FROM ksiazka WHERE IDG='$idG';"); //wybiera tabelę i pobiera z niej wszystkie dane



    while($shitD = mysql_fetch_array($zapytanieD)){
    
        ?>
<option value="<?php echo $shitD['IDK'];?>"><?php echo $shitD['Tytul'];?></option> 
<?php
    }
    
}

?>
