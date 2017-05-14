<?php
session_start();
/**
 * Formularz oraz skrypt logowania
 
 */

require 'header.php';
require 'confdb.php'; // Dołącz plik konfiguracyjny i połączenie z bazą

/**
 * SKRYPT LOGOWANIA
 */
require_once 'user.class2.php'; // Dołączamy rdzeń systemu użytkowników

// Zabezpiecz zmienne odebrane z formularza, przed atakami SQL Injection
$login = htmlspecialchars(mysql_real_escape_string($_POST['login']));
$pass = mysql_real_escape_string($_POST['haslo']);



if ($_POST['send'] == 1) {
    // Sprawdź, czy wszystkie pola zostały uzupełnione
    if (!$login or empty($login)) {
        die ('<p class="error">Wypełnij pole z loginem!</p>');
    }

    if (!$pass or empty($pass)) {
        die ('<p class="error">Wypełnij pole z hasłem!</p>');
    }

    
    
    // Sprawdź, czy użytkownik o podanym loginie i haśle isnieje w bazie danych
    $userExists = mysql_query("SELECT * FROM konto WHERE login = '$login' AND haslo = '$pass' LIMIT 1;");
   $bla = mysql_fetch_array($userExists);

    if ($bla[0] == 0) {
        // Użytkownik nie istnieje w bazie
        echo '<p class="error">Użytkownik o podanym loginie i haśle nie istnieje.</p>';
    }

    else {
        // Użytkownik istnieje
        $user = user::getData($login, $pass); // Pobierz dane użytknika do tablicy i zapisz ją do zmiennej $user

        // Przypisz pobrane dane do sesji
        $_SESSION['login'] = $login;
        $_SESSION['haslo'] = $pass;
        
      

     
        echo '<p class="success">Zostałeś zalogowany. Przejdź do panelu aby dodać ogłoszenie <a href="profil.php">tutaj</a></p>';
        echo '<p>Wyloguj: <a href="logout.php">tutaj</a></p>';
       
       
    }
}else {
 
?>

<?php

}

require 'footer.php';


?>
