<?php
session_start();
$cookie_name = "user";
$cookie_value = $_SESSION['login'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chwile Dwie - iCloud</title>
        
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

    if ( isset($_COOKIE[$cookie_name]) ){
        ?>
<!—Rozpoczynamy menu, przy użyciu nav -->
   <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
      
           <li><a href="index.php#kom">Strona Główna</a></li>
           <li><a href="logout.php#kom">Wyloguj</a></li>
           <li><a href="dysk.php#kom">Biblioteka</a></li>
           
          
        
   </nav>
    <?php
    
    }else{
?>
 <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
           <li><a href="index.php#kom">Strona Główna</a></li>
           <li><a href="zalogujw.php#kom">Zaloguj</a></li>
           <li><a href="rejestracjaw.php#kom">Zarejestruj</a></li>
           
          
        
   </nav>
<?php 
    }
?>

<section id="kom" style="min-height: 600px;">

     <?php
include 'confdb.php';

if ( isset($_SESSION['log']) )
{
    include 'confdb.php';

$id = $_SESSION['log'];

$query = "SELECT * FROM wypozyczajacy WHERE IDWyp='$id'";
$wynik = mysql_fetch_row( mysql_query( $query ) );


print '<br/><br/><br/>zalogowany jako:'.$wynik[3].' '.$wynik[4];
print '<br/><a href="logout.php">Wyloguj</a>';

?>


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
    // Teskt witający
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
