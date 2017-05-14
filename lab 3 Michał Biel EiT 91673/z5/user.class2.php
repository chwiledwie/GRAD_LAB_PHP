<?php
class user {

    public static $user = array();
    
    public function getData ($login, $pass) {
      
        if ($login == '') $login = $_SESSION['login'];
        if ($pass == '') $pass = $_SESSION['haslo'];
        
        
        self::$user = mysql_fetch_array(mysql_query("SELECT * FROM konto WHERE login='$login' AND haslo='$pass' LIMIT 1;"));
        return self::$user;
    }

    
    public function getDataById ($id) {
        $user = mysql_fetch_array(mysql_query("SELECT * FROM konto WHERE id='$id' LIMIT 1;"));
        return $user;
    }

    /**
     * Jeśli użytkownik jest zalogowany - zwraca true, w przeciwnym wypadku - false
     * @return bool
     */
    public function isLogged () {
     if (empty($_SESSION['login']) || empty($_SESSION['haslo'])) {
      return false;
     }

     else {
      return true;
     }
    }

}
?>

