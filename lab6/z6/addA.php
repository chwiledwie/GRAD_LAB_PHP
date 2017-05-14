<?php 
session_start();

?>

        
        <?php include 'confdb.php';
 include 'user.class2.php';
        
        error_reporting(0);
        
            
            
            
            if(isset($_POST['file_add']) && $_FILES['photo_add']['size']> 0){
              
                $namead=$_POST['namead'];
            $category=$_POST['cat'];
            
            
            $fileName = $_FILES['photo_add']['name'];
$tmpName  = $_FILES['photo_add']['tmp_name'];
$fileSize = $_FILES['photo_add']['size'];
$fileType = $_FILES['photo_add']['type'];


$fp      = fopen($tmpName, 'r');
$photo = fread($fp, filesize($tmpName));
$photo = addslashes($photo);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

            $price=$_POST['price'];
            $VAT=$_POST['VAT'] == 'on' ? 'Tak' : 'Nie';
            $delivery=$_POST['delivery'];
            $opis=$_POST['opis'];
                
                
                $conn2=  mysql_connect("localhost","20033357_0000006","Discovery00") or die ('Błąd!'.mysql_error());
             $result22=  mysql_select_db("20033357_0000006",$conn2)
                     or die('Błąd!!'.mysql_error());
           
             $llA=$_SESSION['login'];
            $querrrA="SELECT idU FROM user WHERE login='$llA';";
            
            $rrA=  mysql_query($querrrA);
            
            while($row = mysql_fetch_array($rrA)) 
{
            $iDA=$row['idU'];
             
             $querr="insert into usera (user_id,namead,cat,photo,price,VAT,delivery,opis) values ('$iDA','$namead','$category','$photo','$price','$VAT','$delivery','$opis');";
             
$result22=  mysql_query($querr,$conn2)or die ('BŁĄD!'.mysql_error());
             
             
           
               
                

mysql_free_result($result22);
mysql_close($conn2);
                
  
 echo '<p>Dodano ogłoszenie. Wróć <a href="add.php">tutaj</a></p>';
  }
            }
else
  {
 
  echo '<p>Nie udało się dodać ogłoszenia. Wróć <a href="add.php">tutaj</a></p>';
 
  }
         
            ?>
            
     
       
        
