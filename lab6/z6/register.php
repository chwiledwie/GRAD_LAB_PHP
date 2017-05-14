<?php
/**
 * Skrypt i formularz rejestracji
 * @author Sobak
 * @package User System
 */

require 'header.php'; // Dołącz początkowy kod HTML
require 'confdb.php'; // Dołącz plik konfiguracyjny i połączenie z bazą
require_once 'user.class2.php';

/**
 * Sprawdź czy formularz został wysłany
 */
if ($_POST['send'] == 1) {
    // Zabezpiecz dane z formularza przed kodem HTML i ewentualnymi atakami SQL Injection
    $login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
    $pass = mysql_real_escape_string(htmlspecialchars($_POST['pass']));
    $pass_v = mysql_real_escape_string(htmlspecialchars($_POST['pass_v']));
    

    /**
     * Sprawdź czy podany przez użytkownika email lub login już istnieje
     */
    $existsLogin = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM user WHERE login='$login' LIMIT 1"));
    

    $errors = ''; // Zmienna przechowująca listę błędów które wystąpiły


    // Sprawdź, czy nie wystąpiły błędy
    if (!$login || !$pass || !$pass_v) $errors .= '- Musisz wypełnić wszystkie pola<br />';
    if ($existsLogin[0] >= 1) $errors .= '- Ten login jest zajęty<br />';
    
    if ($pass != $pass_v)  $errors .= '- Hasła się nie zgadzają<br />';

    /**
     * Jeśli wystąpiły jakieś błędy, to je pokaż
     */
    if ($errors != '') {
        echo '<p class="error">Rejestracja nie powiodła się, popraw następujące błędy:<br />'.$errors.'</p>';
    }

    /**
     * Jeśli nie ma żadnych błędów - kontynuuj rejestrację
     */
    else {

        // Posól i zasahuj hasło
       // $pass = user::passSalter($pass);

        // Zapisz dane do bazy
        mysql_query("INSERT INTO user (login,password) VALUES('$login','$pass');") or die ('<p class="error">Wystąpił błąd w zapytaniu i nie udało się zarejestrować użytkownika.</p>');

        
        echo '<script>';
echo 'var strona="registerok";';
echo 'self.location.href=strona+".php";';
echo '</script>';
    }
}
?>



<?php
require 'footer3.php'; // Dołącz końcowy kod HTML
?>
