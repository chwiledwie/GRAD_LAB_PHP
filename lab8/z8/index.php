<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chwile Dwie - Forum</title>
        
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
         
           <li><a href="index.php#forum">Forum</a></li>
        
   </nav>

      
      
      
          
      



<section id="forum" style="min-height: 600px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Forum</h2>
                <h3>Aby dodawać posty musisz się zalogować. Jeśli nie masz konta zarejestruj się.</h3>
                
        </div>
    </div>
        
        </div>
             <table id="sidebarleft">
            
            <?php
            include 'confdb.php';

if ( !isset( $_GET['step'] ) )
{
    /*
print '<a href="index.php#forum"> Wróć </a>';
     *
      */
     
if ( isset($_SESSION['log']) )
{
  
}
?>
<tr><td>Lista wątków</td></tr>


<?php
$zapytanie = mysql_query("SELECT * FROM watek"); //wybiera tabelę i pobiera z niej wszystkie dane


if ($zapytanie) {  //jeśli zapytanie można wykonać to...
    while ($shit = mysql_fetch_array($zapytanie)) { //robi pętlę i przypisuje wszystkie dane do zmiennej
    $AUTOR_ID = $shit['idk'];

    $query = "SELECT login FROM konto WHERE idk='$AUTOR_ID'";
    $wynik = mysql_fetch_row( mysql_query( $query ) );
    
    
echo' <tr><td><a href="index.php?t='.$shit['idw'].'#forum">'.$shit['nazwaw'].'</a></td></tr>';

    
    }
    }


}
else
{

if ( isset( $_GET['step']) && $_GET['step']=='adnewtopic')
{
print 'Nowy wątek <br/>';

print '<form action="index.php?step=addtopic#forum" method="POST">

Wątek: <input type="text" name="nazwaw" />
<br/>
Treść: <input type="text" name="tresc" />
<br/>

<input type="submit" value="wyslij" /><br/>

</form>';

print '<a href="index.php#forum">Wróć</a>';
}

if ( isset( $_GET['step']) && $_GET['step']=='addtopic')
{
    if (isset($_POST['nazwaw']) && isset( $_POST['tresc'] ) )
    {
        $id = mysql_num_rows(mysql_query("SELECT * FROM watek"));
        
        $nazwa = $_POST['nazwaw'];
        $tresc = $_POST['tresc'];
        $autor_id = $_SESSION['log'];
        
        $query = "INSERT INTO watek (idw, nazwaw, tresc,idk) VALUES ('','$nazwa','$tresc','$autor_id')";
        mysql_query( $query ) or die('Błąd: '.mysql_error());
        
        print '<center><font size="5"> Twoj wątek został poprawnie dodany. </font></center>';
        print '<a href="index.php#forum">Wróć</a>';
        }

}

}


?>
            
         
                     
                     <?php
                    if ( isset($_SESSION['log']) )
{
                        ?>
                         <tr><td>Panel
                     <tr><td><a href="index.php?step=adnewtopic#forum"> Nowy Wątek </a></td></tr>
                     <?php } ?>
                     
                     <?php
             
$id = $_SESSION['log'];

$query = "SELECT * FROM konto WHERE idk='$id'";
$wynik = mysql_fetch_row( mysql_query( $query ) );
                     
                     if ( $wynik[1]=='bielas')
{
                         
                     
?>
                     <tr><td><a href="delw.php"> Usuń Wątek </a></td></tr>
<?php  }?>
         </td></tr>

                      <tr><td>Konto
                         
                         <tr><td> <a href="rejestracja.html#forum"><div>Zarejestruj</div></a></td></tr>
                         
                         <tr><td><a href="login.html#forum"><div>Zaloguj</div></a></td></tr>
                     <tr><td>
                         <?php


if ( isset($_SESSION['log']) )
{
    include 'confdb.php';

$id = $_SESSION['log'];

$query = "SELECT * FROM konto WHERE idk='$id'";
$wynik = mysql_fetch_row( mysql_query( $query ) );


print '<br/><br/><br/>zalogowany jako:'.$wynik[1];
print '<br/><br/><br/><a href="logout.php">Wyloguj</a>';
}
?></td></tr>
                   </td></tr>
                     
                     
   <div style="clear:both;"></div>
 </table>
    
    
    
    <!-- wyswietlanie postów z wątku-->
    <?php
    include 'confdb.php';

if (!isset($_GET['t']))
{
    
}
else
{

if ( isset($_SESSION['log']) )
{
$topic_id = $_GET['t'];
print '<a href="index.php?t='.$topic_id .'&step=answer#forum">odpowiedz w tym temacie</a><br/>';
print '<a href="index.php#forum">Wróć</a>';
}
    $topic_id = $_GET['t'];
    
    //odczyt
    $query = "SELECT * FROM watek WHERE idw='$topic_id'";
    $wynik = mysql_fetch_row( mysql_query( $query ) );
    
    $nazwa_usera = $wynik[3];
    
    $q2 = "SELECT login FROM konto WHERE idk='$nazwa_usera'";
    $result = mysql_fetch_row( mysql_query( $q2 ) );
    print '<table width="40%" align="center" border="1"> <tr> <td> <b> Temat: '.$wynik[1].'</b> </td></tr> <tr> '
    . '<td><b>Treść: '.$wynik[2].' <br/> </td></tr> <tr><td><b> Autor: '.$result[0].'</td> </tr> </table>';

    //odczyt odpowiedzi
    $q1 = MYSQL_QUERY("SELECT * FROM posty WHERE idw='$topic_id' ORDER BY datagodzina DESC");
    
    if ($q1) {  //jeśli zapytanie można wykonać to...
    while ($shit = mysql_fetch_array($q1))
    { //robi pętlę i przypisuje wszystkie dane do zmiennej
    $AUTOR_ID = $shit['idk'];
    
    $query = "SELECT login FROM konto WHERE idk='$AUTOR_ID'";
    $wynik = mysql_fetch_row( mysql_query( $query ) );
    
 
    ?><table width="50%" align="center" border="1"><tr class="tabP" ><td>ID</td>
            <td WIDTH="60%">Treść</td><td>Autor</td><td>Data</td></tr><tr>
    <td><?php echo $shit['idp']?></td><td WIDTH="60%"><?php echo $shit['tresc']?></td>
    <td><?php echo $wynik[0]?></td> <td><?php echo $shit['datagodzina']?></td>
    </tr></table><?php
    }
    }
    
    
    
    $nazwa_u = $w1[3];//ODPOWIADAJACY NAZWA
    
    $q10 = "SELECT login FROM konto WHERE idk='$nazwa_u'";
    $r10 = mysql_fetch_row( mysql_query( $q10 ) );
    
    
    
    if ($_GET['step'] == 'answer')
    {
    $topic_id = $_GET['t'];
    print '
    Formularz odpowiedzi

    <form action="index.php?t='.$topic_id .'&step=send#forum" method="POST">

Twoja odpowiedz: <input type="text" name="odpowiedz" />
<br/>

<input type="submit" value="wyslij" />

</form>';
    }
    
    if ($_GET['step'] == 'send')
    {
    //wysylanie odpowiedzi
    
    //dane
    $id = mysql_num_rows(mysql_query("SELECT * FROM posty"));;
    $tresc = $_POST['odpowiedz'];
    $id_tematu=$_GET['t'];
    $id_autora = $_SESSION['log'];
    
    $query = "SELECT login FROM konto WHERE idk='$id_autora'";
    $wynik = mysql_fetch_array( mysql_query( $query ) );
    $autor = $wynik['login'];
    
    $query = "INSERT INTO posty (idp, tresc, autor, idw, idk) VALUES ('','$tresc','$autor','$id_tematu','$id_autora')";
    mysql_query( $query ) or die('Błąd: '.mysql_error());
    
    PRINT 'ODPOWIEDZ ZOSTALA DODANA';
    }
    
   
    }


?>
    
    
    
    
    
    
    
    

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
