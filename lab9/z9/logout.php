<?php
session_start();



include 'confdb.php';

session_destroy();

echo '<p class="success">Zostałeś wylogowany! Możesz przejść na <a href="index.php#kom">stronę główną</a></p>';


?>


