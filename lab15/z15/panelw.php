<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chwile Dwie - Panel wypożyczjącego</title>
        
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
      <?php

    if ( isset($_SESSION['loginw']) ){
        ?>
<!—Rozpoczynamy menu, przy użyciu nav -->
   <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
      
           
           <li><a href="logout.php#kom">Wyloguj</a></li>
           <li><a href="panelw.php#kom">Biblioteka</a></li>
            <li><a href="mojew.php#kom">Moje wypożyczenia</a></li>
           
           
            <li class="dropdown"><a class="tab1 dropbtn"><?php echo $_SESSION['loginw'];?></a>
                <ul>
                    <div class="dropdown-content">
                        <p class="pasek3">Zalogowany</p>
                    </div>
                </ul>
            </li>
          
        
   </nav>
    <?php
    
    }else{
?>
 <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
           
           <li><a href="zalogujw.php#kom">Zaloguj</a></li>
           <li><a href="rejestracjaw.php#kom">Zarejestruj</a></li>
           
          
        
   </nav>

<?php 
    }
?>

<section id="kom" style="min-height: 600px;">

     <?php
if ( isset($_SESSION['loginw']) )
{
 // del z forum - step - metoda GET
    
?>
    
     
    <p class="pasekK">Lista kasiążek w zbiorze:</p>
    
    <table class="tabelkaG">
    <?php

include 'confdb.php';
 $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());  
 
    $zapytanie = mysql_query("SELECT * FROM ksiazka ORDER BY Tytul"); //wybiera tabelę i pobiera z niej wszystkie dane


if ($zapytanie) {  //jeśli zapytanie można wykonać to...
    while ($shit = mysql_fetch_array($zapytanie)) { //robi pętlę i przypisuje wszystkie dane do zmiennej
   
    $IDAA=$shit['IDA'];
    $queryA = "SELECT * FROM autor WHERE IDA='$IDAA';";
    $wynikA = mysql_fetch_row( mysql_query( $queryA ) );
    
echo' <tr><td>Tytył: '.$shit['Tytul'].', Autor: '.$wynikA[1].' '.$wynikA[2].', Rok wydania: '.$shit['RokWydania'].', Stan: '.$shit['Stan'].'</td>
 


</tr><br/>';
    }
}

 ?>   
     </table> 
    
   
   
<?php
}else {
    ?>

        <div class="mmm">
            <img src="img/img1.jpg"/>
        </div>
<div>
   
    <p class="witaj">Zapraszam do korzystania z biblioteki. Aby korzystać należy się zarejestrować, a następnie zalogować.</p>
    <p class="contentW">Naszą pasją są ksiażki...</p>
    
        
</div>
<div>
    <img class="pic" src="img/img2.jpg"/>
</div>
<?php
}
?>
<br>

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
