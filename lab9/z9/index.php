<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chwile Dwie - Komunikator</title>
        
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
         
           <li><a href="index.php#kom">Komunikator</a></li>
           <li><a href="login.html#kom">Zaloguj</a></li>
           <li><a href="rejestracja.html#kom">Zarejestruj</a></li>
          
        
   </nav>

<section id="kom" style="min-height: 600px;">
<?php
include 'confdb.php';



$post = $_POST['post'];


if (IsSet($_POST['post'])) {
$utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error()); 



    $id_autora = $_SESSION['log'];

    $query = "SELECT login,colorbg FROM konto WHERE idu='$id_autora'";
    $wynik = mysql_fetch_array( mysql_query( $query ) );
    $autor = $wynik['login'];
    $colorBGK = $wynik['colorbg'];

    $zapytanie = ("INSERT INTO komunikat (idk,komunikat,nick,idu,colorbg) VALUES ('','$post','$autor','$id_autora','$colorBGK');");
    $wynik = mysql_query($zapytanie) or die(mysql_error());
    
    
    
    
}
?>
     <?php


if ( isset($_SESSION['log']) )
{
    include 'confdb.php';

$id = $_SESSION['log'];

$query = "SELECT * FROM konto WHERE idu='$id'";
$wynik = mysql_fetch_row( mysql_query( $query ) );


print '<br/><br/><br/>zalogowany jako:'.$wynik[1];
print '<br/><a href="logout.php">Wyloguj</a>';

?>
<form method="POST">

<br/><br/>
Post:<input type="text" name="post" maxlength="90" size="90"><br>
<input type="submit" value="Send"/>
</form>
    <br/><br/>    
Posty:
<br>

<?php
}else {
    ?>

        <div class="mmm">
            <img src="img/img1.jpg"/>
        </div>
<div>
    
    <p class="witaj">Zapraszam do korzystania z komunikatora. Aby korzystać należy się zarejestrować, a następnie zalogować.</p>
    <p class="contentW">Życzymy miłej konwersacji.</p>
    
        
</div>
<div>
    <img class="pic" src="img/img2.jpg"/>
</div>
<?php
    // Teskt witający
}
?>
<?php 
$utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error()); 



if ( isset($_SESSION['log']) )
{    


$zapytanie = mysql_query("SELECT * FROM komunikat ORDER BY datagodzina DESC;");
   
while ($row = mysql_fetch_array($zapytanie))
{
          
          
    echo '<table border=”1” width="90%">
<tr><td bgcolor="'.$row['colorbg'].'">'.$row['komunikat'].'</td><td width="80">' . $row['nick'] 
      . '</td><td width="60" bgcolor="yellow">'.$row['datagodzina'].'</td></tr></table><br>';

    
    
    
}
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
