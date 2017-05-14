<?php
session_start();

include 'confdb.php';
include 'worker.class.php';

print '<br/>';

if ( isset($_POST['loginp']) && isset($_POST['haslop']) )
{
    //print '<font size="5"> Rejestracja zakonczona sukcesem!</font>';
    //wyciaganie informacji o danym uzytkowniku
    $loginp = $_POST['loginp'];
    $passp = $_POST['haslop'];
    $queryp = "SELECT * FROM pracownik WHERE loginp='$loginp' AND haslop='$passp'";
    $wynikp = mysql_fetch_row( mysql_query( $queryp ) );
    
    
    
    
    
    
    
    
   // Sprawdź, czy użytkownik o podanym loginie i haśle isnieje w bazie danych
    $userExistsp = mysql_query("SELECT * FROM pracownik WHERE loginp = '$loginp' AND haslop = '$passp' LIMIT 1;");
   $blap = mysql_fetch_array($userExistsp);

    if ($blap[0] == 0) {
        // Użytkownik nie istnieje w bazie
        echo '<p class="error">Użytkownik o podanym loginie i haśle nie istnieje.</p>';
    }

    else {
        // Użytkownik istnieje
        $userp = worker::getData($loginp, $haslop); // Pobierz dane użytknika do tablicy i zapisz ją do zmiennej $user

         // Przypisz pobrane dane do sesji
        $_SESSION['loginp'] = $loginp;
        $_SESSION['haslop'] = $passp;
        $_SESSION['IDP'] = $wynikp[0];
        
      

     
        print '<font size="5"> Pomyslnie zalogowano jako '.$wynikp[1].'!</font>
    <br/>Przejdź do panelu zarządzania<a href="panelp.php#one"> tutaj </a>';
       
       
    }
}


else
{
    print 'nie wprowadzono danych! <a href="/index.php> Wróć </a>';
}

?>






