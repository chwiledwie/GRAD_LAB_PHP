<?php 
session_start();

?>

        
        <?php include 'confdb.php';
 
        
        include 'user.class2.php';
        error_reporting(0);
        
            
            $conn3=  mysql_connect("localhost","20033357_0000006","Discovery00") or die ('Błąd!'.mysql_error());
             $result33=  mysql_select_db("20033357_0000006",$conn3)
                     or die('Błąd!!'.mysql_error()); 
              
             $ll=$_SESSION['login'];
            $querrr="SELECT idU FROM user WHERE login='$ll';";
            
            $rr=  mysql_query($querrr);
            
            while($row = mysql_fetch_array($rr)) 
{
            $iD=$row['idU'];
            
           

          

 

$userExists = mysql_query("SELECT * FROM userd WHERE userK = '$iD' LIMIT 1");
   $bla = mysql_fetch_array($userExists);

    if ($bla[0] == 0) {
        
        if(isset($_POST["submit"])> 0 ){
                
           $imie=$_POST['surname'];
            $nazwisko=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $adres=$_POST['location'];
            
       $conn3=  mysql_connect("localhost","20033357_0000006","Discovery00") or die ('Błąd!'.mysql_error());
             $result33=  mysql_select_db("20033357_0000006",$conn3)
                     or die('Błąd!!'.mysql_error());
            
              $quers="insert into userd (surname,name,email,phone,location,userK) values ('$imie','$nazwisko','$email','$phone','$adres','$iD');";
               
             
         $result33=  mysql_query($quers,$conn3);
                mysql_free_result($result33);
mysql_close($conn3);
 
    
}
echo '<p>Zapisano dane. Wróć <a href="ep.php">tutaj</a></p>';

}
    


  
    
else {
    if(isset($_POST["submit"])> 0 ){
                
           $imie=$_POST['surname'];
            $nazwisko=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $adres=$_POST['location'];
            
         $conn3=  mysql_connect("localhost","20033357_0000006","Discovery00") or die ('Błąd!'.mysql_error());
             $result33=  mysql_select_db("20033357_0000006",$conn3)
                     or die('Błąd!!'.mysql_error());
            
             $quers="update userd set surname='$imie',name='$nazwisko',email='$email',phone='$phone',location='$adres' where userK ='3';";
       
            
         $result33=  mysql_query($quers,$conn3);
        mysql_free_result($result33);
mysql_close($conn3);
    }
echo '<p>Zaktualizowano dane. Wróć <a href="ep.php">tutaj</a></p>';

  // Następne czynności
}
            
            
             
}    
                
             
        
            ?>
            
     
       
        
        