<?php
session_start();
if(!isSet($_SESSION['loginp'])){
 $kom = $_SESSION['komunikat'] = "Nie jestes zalogowany!";
  echo $kom;
  include('loginpf.php');
  exit();
}
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chwile Dwie - Panel pracownika</title>
        
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

    if ( isset($_SESSION['loginp']) ){
        ?>

      <nav id="menu" role="navigation">
       <ul class="w3-navbar">
<li><a href="logout.php">Wyloguj</a></li>
<li><a class="active" href="dodajK.php">Dodaj ksiażkę</a></li>
<li><a href="wyp.php">Wypożycz</a></li>
<li><a href="stan.php">Stan</a></li>
<li><a href="stat.php">Statystyka</a></li>
<!--
<li><a href="doddostawce.php">Dodaj dostawcę</a></li>
<li><a href="dodtowar.php">Dodaj towar</a></li>
<li><a href="pdostawe.php">Przyjmij dostawę</a></li>

<li><a href="osprzedazy.php">Obsługa sprzedaży</a></li>
<li><a href="historiad.php">Historia dostaw</a></li>
<li><a href="historias.php">Historia sprzedaży</a></li>
-->

</ul>
</nav>
    <?php
    
    }else{
?>
 <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
           <li><a href="index.php#kom">Strona główna</a></li>
           <li><a href="loginpf.php#kom">Zaloguj</a></li>
          
           
          
        
   </nav>

<?php 
    }
?>

<section id="kom" style="min-height: 600px;">

     <?php
if ( isset($_SESSION['loginp']) )
{
 // koszyk
?>
    
     
    <p class="pasekK"> Formularz dodawania książki do zbioru:</p>
   
    <form class="tabelkaG" action="dodk.php" method="post" enctype="multipart/form-data">
     <label for="sec2">Autor: </label>
<select name="IDA" id="sec2">
     <?php
     include 'confdb.php';
     $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());  
      $querrrA="SELECT IDA,nazwisko,imie FROM autor;";
            
            $rrA=  mysql_query($querrrA);
            
            while($row = mysql_fetch_array($rrA)) 
{
     ?>
      
<option value="<?php echo $row['IDA'];?>"><?php echo $row['nazwisko'].' '.$row['imie'];?></option> 

<?php
}
?>
</select><br/>
<label for="sec2">Gatunek: </label>
<select name="IDG" id="sec2">
     <?php
     include 'confdb.php';
     $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());  
      $querrrA="SELECT IDG,nazwa FROM gatunek;";
            
            $rrA=  mysql_query($querrrA);
            
            while($row = mysql_fetch_array($rrA)) 
{
     ?>
<option value="<?php echo $row['IDG'];?>"><?php echo $row['nazwa'];?></option> 

<?php
}
?>
</select><br/>
<label for="sec2">Wydawnictwo: </label>
<select name="IDWyd" id="sec2">
     <?php
     include 'confdb.php';
     $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());  
      $querrrA="SELECT IDWyd,nazwa FROM wydawnictwo;";
            
            $rrA=  mysql_query($querrrA);
            
            while($row = mysql_fetch_array($rrA)) 
{
     ?>
<option value="<?php echo $row['IDWyd'];?>"><?php echo $row['nazwa'];?></option> 
<?php
}
?>
</select><br/>

     Sygnatura: <input type=text name="syg"/><br/> 
     Tytuł: <input type=text name="tytul"/><br/> 
     Rok Wydania: <input type=text name="rokwyd"/><br/> 
     Cena zakupu [PLN]: <input type=text name="cenaZ"/><br/> 

<br/>           
           <input type=submit name="k_dod" value="Dodaj"/><br/>
             </form> 
    
    
      
    
   
   
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



