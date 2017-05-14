<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chwile Dwie</title>
        
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <body>
        
        
      <!— Główny nagłówek strony -->
<header role=”banner”>
<!—Grupa nagłówków, użcie hgroup -->
   <!-- Header -->
    
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading"></div>
                
            </div>
        </div>
    </header>

<!—Rozpoczynamy menu, przy użyciu nav -->
   <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
         <li><a href="..\z6\#announcement">Ogłoszenia</a></li>
         <li><a href="add.php">Konto</a></li>
    <li><a href="..\z6\#contactme">Kontakt</a></li>
            
                        
   </nav>

      
      
      
          
   


    
    

    <section id="announcement">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ogłoszenia</h2>
                    <h3 class="section-subheading text-muted">Wybierz katergorię</h3>
                   
                </div>
            </div>
             </div>
            
                    
                    
                    
        
                    <table id="tabelka2">
            <tr><td><a class="linkK" href="pc.php#announcement"><div>PC</div></a></td></tr>
            <tr><td> <a class="linkK" href="ps3.php#announcement"><div>PS3</div></a></td></tr>
                     <tr><td><a class="linkK" href="ps4.php#announcement"><div>PS4</div></a></td></tr>
                     <tr><td> <a class="linkK" href="x360.php#announcement"><div>Xbox 360</div></a></td></tr>
                     <tr><td><a class="linkK" href="xOne.php#announcement"><div>Xbox One</div></a></td></tr>
  
 </table>
  
        
        <table id="sidebarleft">
            <tr><td>Sortuj wg:</td></tr>
            <tr><td><a href="pcN.php#announcement"><div>Nazwy</div></a></td></tr>
            <tr><td> <a href="pcD.php#announcement"><div>Dostawy</div></a></td></tr>
                     <tr><td><a href="pcCR.php#announcement"><div>Ceny rosnącej</div></a></td></tr>
                     <tr><td> <a href="pcCM.php#announcement"><div>Ceny malejącej</div></a></td></tr>
                     
   <div style="clear:both;"></div>
 </table>
 
  
  
  

            <?php
include "confdb.php";		
$sql = "SELECT * FROM usera ORDER BY price DESC";	
$query = mysql_query($sql) or die(mysql_error());	
               ?>         
        
        <table id="tabelka">  
    <?php
echo "<tr>";

       ?>
<td>Nazwa: </td>

<td>Kategoria: </td>

<td>Cena: </td>
<td>Podatek: </td>
<td>Dostawa: </td>
<td>Opis: </td>
<td>Zdjęcie: </td>
    <?php
echo "</tr>";
    
while($row = mysql_fetch_array($query)) 
{
    $nameA = $row['namead'];
    $CAT = $row['cat'];
    $Aphoto = $row['photo'];
    $cena = $row['price'];
    $podatek = $row['VAT'];
    $dost = $row['delivery'];
    $about = $row['opis'];

    switch($CAT){ 
      case "PC": ?>

             <?php echo "<tr>";?>
<td class="otherC">
        <?php echo $nameA;?>
                    
     </td>
        <td class="otherC">
 <?php echo $CAT;?>
        </td>
         <td class="otherC">
     <?php echo $cena;?>
        </td>
        <td class="otherC">
     <?php echo $podatek;?>
        </td>
        <td class="otherC">
 <?php echo $dost;?>
        </td>
       <td class="otherC">
 <?php echo $about;?>
       </td>
    <td class="otherC">
        
 <img src="data:image/jpeg;base64,<?php echo base64_encode( $Aphoto ); ?>">
        <?php echo"</td>";?>
 
<?php echo "<br>"?>
                    

</td>
              <?php echo "</tr>";?>
        <?php
}

}
?>

</table>

<br>
   
                    
                    
                   

                
                
                
    </section>

    
   
    
   
<!-- Map Section -->
<section id="contactme" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Dojazd</h2>
                    <h3 class="section-subheading text-muted">Tak do nas trafisz...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-member">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2393.316515116507!2d17.594880715466626!3d53.14041387993636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4703a030947992cd%3A0x61b70967322b198d!2saleja+Mickiewicza%2C+Nak%C5%82o+nad+Noteci%C4%85!5e0!3m2!1spl!2spl!4v1476270502728" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2866.8284382240895!2d17.5948807161094!3d53.14041387993626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spl!2spl!4v1476547535940" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <h4 style="margin-bottom: 2em;">Lokalizacja:</h4>
                        <p class="text-muted">Naklo nad Notecia</p>
                        <p class="text-muted">89-100</p>
                        <p class="text-muted">Kujawsko-Pomorskie</p>
                        <p class="text-info">E-mail: chwiledwie@chwiledwie.pl</p>
                        <p class="text-info">Telefon: +48 000 00 00 00</p>
                    
                    </div>
                </div>
               
            </div>
            
        </div>
    </section>


 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Chwile Dwie 2016</span>
                </div>
                <div class="col-md-4">
                    <p>Goście: 
                        <?php include("licznik_wejsc.php"); ?>
                            </p>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>
