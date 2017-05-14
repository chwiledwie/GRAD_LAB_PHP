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
                <div class="intro-lead-in">Witaj na stronie zespołu Chwile Dwie!</div>
                <div class="intro-heading">Miło nam Ciebie gościć.</div>
                <a href="#services" class="page-scroll btn btn-xl">Zobacz naszą ofertę</a>
            </div>
        </div>
    </header>

<!—Rozpoczynamy menu, przy użyciu nav -->
   <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         <li><a href="#historia">Historia</a></li>
         <li><a href="#services">Oferta</a></li>
         <li><a href="#team">Zespół</a></li>
           <li><a href="#dojazd">Dojazd</a></li>
           <li><a href="#galeria">Galeria</a></li>
               
           <li>
               <a href="login.php">Zaloguj</a>
      </li>
                        
   </nav>

      
      
      
          
      </section>

<!-- Historia Section -->
    <section id="historia"  class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="295" height="68">
<param name="movie" value="flashvortex.swf" />
<param name="quality" value="best" />
<param name="menu" value="true" />
<param name="allowScriptAccess" value="sameDomain" />
<embed src="flashvortex.swf" quality="best" menu="true" width="295" height="68" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="sameDomain" />
</object>

                    <h2 class="section-heading">O nas</h2>
                    <h3 class="section-subheading text-muted">Moja historia...</h3>
                </div>
            </div>
            <div class="row text-center">
                
                
                    
                
                <div class="col-md-12">
                    <h4 class="service-heading">Jak to się zaczeło?</h4>
                    
                    <img src="img/panCompany.JPG" class="img-responsive img-rounded myimg1"/>
                    
                    <p class="text-muted p1 ">Kiedy miałem 9 lat, będąc u kolegi, mialem okazję podejrzeć grę na keyboardzie. 
                        Bardzo mi się spodobała gra właśnie na tym instrumencie.
                    Kolega zagrał mi utwór "Yesterday" Beatlesów. 
                    Wtedy mój tata widząc moje zainteresowanie zapytał, czy też chcę uczyć się grać. 
                    Odpowiedź była oczywista: Tak!
                    
                    </p>
                    
                    <p class="text-muted p1 ">
                        Uczyełm się przez 5 lat pod okiem śp. Henryka Kudlickiego z Bydgoszczy. 
                        Po tym okresie był moment przerwy, niechęci do grania.
                        Grałem sporadycznie. Aż w końcu wróciłem do gry. 
                        Po pewnym czasie kupiłem nowy instrument i zabawa zaczęła się na dobre.
                        Wybór padł na keyboar: Yamaha PSR-S950. 
                    </p>
                    
                   
                     <img src="img/morff.gif" class="img-responsive img-rounded myimg1"/>
                    
                    
                    
                    <p class="text-muted p1 ">
                        W roku 2014, w miesiącu wrześniu odbyły się warsztaty muzyczne pt.: Programowanie instrumentó klawiszowych YAMAHA.
                        Do nadmorskiej miejscowości Sianożęty przybyło kilkanaście osób z kraju i zagranicy,
                        gdzie w hotelu Imperiall przez 2 dni poznawaliśmy tajniki flagowych produktów firmy Yamaha.
                        Oprócz obsługi instrumentów mogliśmy, także poznać od kuchni tworzenie plików STYLE i MIDI firmy Camaro24. 
                    </p>
                    
                   
                </div>
                
               
                
                
            </div>
        </div>
    </section>
    
    
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Oferujemy</h2>
                    <h3 class="section-subheading text-muted">Czym, że jest muzyka...</h3>
                    <img src="img/gifCompany.gif" class="img-rounded myimg2"/>
                </div>
            </div>
            
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-music fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Oprawa muzyczna</h4>
                    <p class="text-muted">Urodziny, imieniny, jubileusze, 18-stki oraz inne imprezy okolicznościowe przy muzyce dawnej i na czasie.</p>
               
  
   <?php
//tutaj podaj haslo,login,nazwe bazy i hosta



$pass='Discovery00';
$login='20033357_0000004';
$host='localhost';
$dbase='20033357_0000004';
 
 
//logowanie do serwera mysql


 $mysqli = new mysqli($host, $login, $pass, $dbase);
 

 
   
 
                
 $resultSet = $mysqli->query("SELECT * FROM oferta");
 
  
  ?>              
  <table id="tabelka">
                        <tr>
                            <td> <?php echo "Nazwa usługi: "; ?></td>
                            
                            <td><?php echo "Koszt usługi [PLN]: "; ?></td>
  <?php
         
 if($resultSet->num_rows != 0){
     while($rows = $resultSet->fetch_assoc()){
         $gr = $rows['Grupa'];
         $us = $rows['Usluga'];
          $price = $rows['Cena'];
          
          
              
               switch($gr){ 
          case "1":
         
         ?>
                    <tr>
                            <td class="otherC">
                            <?php
                                     echo $us;
                            ?>
                                </td>
                                <td class="otherC">
                                <?php
                                echo $price;
                                ?>
                                </td>
                        </tr>
                   
                   <?php
        
  
         
          
          break;
               }
     }
 }
          ?>
  </tr>
   </table>
  
 
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-question-circle fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Kurs obsługi instrumentu</h4>
                    <p class="text-muted">Nauczymy Ciebie korzystać z Twojego instrumentu Yamaha.</p>
                    
                              <?php
               
$pass='Discovery00';
$login='20033357_0000004';
$host='localhost';
$dbase='20033357_0000004';
 
 
//logowanie do serwera mysql


 $mysqli = new mysqli($host, $login, $pass, $dbase);
 

 
   
 
                
 $resultSet = $mysqli->query("SELECT * FROM oferta");
  
  ?>
  <table id="tabelka">
                        <tr>
                            <td> <?php echo "Nazwa usługi: "; ?></td>
                            
                            <td><?php echo "Koszt usługi [PLN]: "; ?></td>
                            
                            <?php
         
 if($resultSet->num_rows != 0){
     while($rows = $resultSet->fetch_assoc()){
         $gr = $rows['Grupa'];
         $us = $rows['Usluga'];
          $price = $rows['Cena'];
          
          
              
               switch($gr){ 
          case "2":
         ?>
                           <tr>
                            <td class="otherC">
                            <?php
                                     echo $us;
                            ?>
                                </td>
                                <td class="otherC">
                                <?php
                                echo $price;
                                ?>
                                </td>
                        </tr>
                            
         <?php
        
  
         
          
          break;
               }
     }
 }
          ?>
              </tr>
   </table>       
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Nauka gry</h4>
                    <p class="text-muted">Gram od... no właśnie od kiedy? Od 9 roku życia, a czas tak zleciał, że tu prawie 30-tka.</p>
                
                         <?php
              
$pass='Discovery00';
$login='20033357_0000004';
$host='localhost';
$dbase='20033357_0000004';
 
 
//logowanie do serwera mysql


 $mysqli = new mysqli($host, $login, $pass, $dbase);
 

 
   
 
                
 $resultSet = $mysqli->query("SELECT * FROM oferta");
  ?>
                    
                    <table id="tabelka">
                        <tr>
                            <td> <?php echo "Nazwa usługi: "; ?></td>

                            <td><?php echo "Koszt usługi [PLN]: "; ?></td>
                            
                            <?php
         
 if($resultSet->num_rows != 0){
     while($rows = $resultSet->fetch_assoc()){
         $gr = $rows['Grupa'];
         $us = $rows['Usluga'];
          $price = $rows['Cena'];
          
          
              
               switch($gr){ 
          case "3":
         ?>
                           <tr>
                            <td class="otherC">
                            <?php
                                     echo $us;
                            ?>
                                </td>
                                <td class="otherC">
                                <?php
                                echo $price;
                                ?>
                                </td>
                        </tr>
                            
         <?php
         
  
         
          
          break;
               }
     }
 }
          ?>
              </tr>
   </table>   
                </div>
            </div>
        </div>
    </section>

    <embed src="mp3/musicbg.mp3" width="0" height="0" border="0" volume="1" loop="infinite"></embed>
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Zespół</h2>
                    <h3 class="section-subheading text-muted">Czym, że jest spotkanie przy muzyce? Chwile dwie to są...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-member">
                        <img src="img/team/me.jpg" class="img-responsive img-circle" alt="">
                        <h4>Michał Biel</h4>
                        <p class="text-muted">klawisz i wokal</p>
                        
                    </div>
                </div>
            </div>
         <div class="row">
                <div class="col-sm-12">
                    <div class="team-member">
                        <img src="img/team/me3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Grzegorz Tracz</h4>
                        <p class="text-muted">gitara i wokal</p>  
                    </div>
                </div> 
            </div>
            </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   
                        <h2 class="section-heading">Odbyliśmy szkolenie</h2>
                        <h3 class="section-subheading text-muted">Oto jeden z naszych certyfikatów...</h3>
                        <img src="img/logos/cert.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                
            </div>
        </div>
    </aside>
    
   
<!-- Map Section -->
    <section id="dojazd" class="bg-light-gray">
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

<section id="galeria">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Galeria zdjęć</h2>
                <h3>Oto zdjęcia z naszych imprez...</h3>
        </div>
    </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                
                <p>Aby dodać zdjecia do galerii, należy się zalogować.</p>
<div id="sidebar">
    <a href="standing.php#galeria" class="linkN"><div class="optionS">Pozycja stojąca</div></a>
  <a href="sitting.php#galeria" class="linkN"><div class="optionS">Pozycja siedząca</div></a>
  <a href="portraits.php#galeria" class="linkN"><div class="optionS">Portrety</div></a>
  <a href="interesting.php#galeria" class="linkN"><div class="optionS">Ciekawe</div></a>
  <a href="perspective.php#galeria" class="linkN"><div class="optionS">Perspektywy</div></a>
  <div style="clear:both;"></div>
  
</div>
                
              <?php
include "confdb.php";		
$sql = "SELECT * FROM tabela1";	
$query = mysql_query($sql) or die(mysql_error());	       
$i=0;

?>                
                <table class="tabelkaG">
<?php
    echo "<tr>";
while($row = mysql_fetch_array($query)) 
{
    $link = $row['link'];
    $kategoria = $row['galeria'];
    $komentarz = $row['komentarz'];
    
    switch($kategoria){ 
      case "interesting": 

             if ($i % 3 == 0 && $i != 0) {

        echo '</tr><tr>';
    
    }?>
<?php echo "<td>";?>  <img src="img/<?php echo $kategoria; ?>/<?php echo $link; ?>"width="150" height="150"> 

<?php echo "<center>". $komentarz. "</center>"; ?>
<?php echo "</td>";

$i++;
    }

         



}

echo "</tr>";
?>
</table>


<br>
</div>
                
                
                
                
                
            </div>
        </div>
    </div>

</section>



<footer class="bg-light-gray">
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
