<?php
session_start();


require 'header.php';
require 'confdb.php'; // Dołącz plik konfiguracyjny i połączenie z bazą
include 'functions.php';
        include 'title_bar.php';
require_once 'user.class2.php';

/**
 * Tylko dla zalogowanych użytkowników
 */
if (!user::isLogged()) {
    echo '<p class="error">Przykro nam, ale ta strona jest dostępna tylko dla zalogowanych użytkowników.</p>';
}

else {
    
    
    require 'footerE.php';
    ?>
    
    
<?php
    
    
}



?>