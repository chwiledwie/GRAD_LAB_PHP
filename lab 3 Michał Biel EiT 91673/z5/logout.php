<?php
session_start();


require 'header.php'; // Dołącz początkowy kod HTML

include 'confdb.php';
include 'functions.php';
session_destroy();

echo '<p class="success">Zostałeś wylogowany! Możesz przejść na <a href="index.php">stronę główną</a></p>';

require 'footer.php'; // Dołącz końcowy kod HTML
?>


