<?php
session_start();

include 'confdb.php';
include 'user.class.php';
print '<br/>';

if ( isset($_POST['loginw']) && isset($_POST['haslow']) )
{
    //print '<font size="5"> Rejestracja zakonczona sukcesem!</font>';
    //wyciaganie informacji o danym uzytkowniku
    $login = $_POST['loginw'];
    $pass = $_POST['haslow'];
    $querykk = "SELECT * FROM wypozyczajacy WHERE loginw='$login' AND haslow='$pass'";
    $wynikkk = mysql_fetch_row( mysql_query( $querykk ) );
    
    
    
   
    
    
    
    // Sprawdź, czy użytkownik o podanym loginie i haśle isnieje w bazie danych
    $userExists = mysql_query("SELECT * FROM wypozyczajacy WHERE loginw='$login' AND haslow='$pass' LIMIT 1;");
   $bla = mysql_fetch_array($userExists);

    if ($bla[0] == 0) {
        // Użytkownik nie istnieje w bazie
        echo '<p class="error">Użytkownik o podanym loginie i haśle nie istnieje.</p>';
    }

    else {
        // Użytkownik istnieje
        $user = user::getData($login, $haslo); // Pobierz dane użytknika do tablicy i zapisz ją do zmiennej $user

         // Przypisz pobrane dane do sesji
        $_SESSION['loginw'] = $login;
        $_SESSION['haslow'] = $pass;
        $_SESSION['IDWyp']= $wynikkk[0];
      

     
        print '<font size="5"> Pomyslnie zalogowano jako '.$wynikkk[3].' '.$wynikkk[4].'!</font>
    <br/>Przejdź do panelu klienta <a href="panelw.php"> tutaj </a>';
       
       
    }
}


else
{
    print 'nie wprowadzono danych! <a href="zalogujw.php> Wróć </a>';
}

?>



