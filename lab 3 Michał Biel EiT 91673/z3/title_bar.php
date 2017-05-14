<div>
    <?php
    if(loggedin()){
        ?>
    <a href="index.php">Strona Domowa</a>
    <a href="profil.php">Profil</a>
    <a href="logout.php">Wyloguj</a>
    <?php
    }else{
        ?>
    <a href="index.php">Strona Domowa</a>
    <a href="login.php">Zaloguj się</a>
    
    <?php
    }
    ?>
    
    
</div>


