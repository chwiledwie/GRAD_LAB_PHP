<?php


class user {

    public static $user = array();
    
    /**
     * Zwraca tablicę ze wszystkimi danymi o użytkowniku.
     * Indeksy tablicy odpowiadają nazwom pól w bazie danych (login, pass etc...)
     * @param string $login
     * @param string $pass
     * @return array
     */
    public function getData ($login, $pass) {
      
        if ($login == '') $login = $_SESSION['loginw'];
        if ($pass == '') $pass = $_SESSION['haslow'];
        
        
        self::$user = mysql_fetch_array(mysql_query("SELECT * FROM wypozyczajacy WHERE loginw='$login' AND haslow='$pass' LIMIT 1;"));
        return self::$user;
    }

    


    
    /**
     * Zwraca tablicę ze wszystkimi danymi o użytkowniku, tak jak powyższa metoda klasy,
     * ale rozpoznaje użytkownika nie po podaniu loginu i hasła tylko po podaniu ID.
     * Używana np. do wyświetlania strony profilu.
     * @param int $id
     * @return array
     */
    public function getDataById ($id) {
        $user = mysql_fetch_array(mysql_query("SELECT * FROM wypozyczajacy WHERE IDWyp='$id' LIMIT 1;"));
        return $user;
    }

    /**
     * Jeśli użytkownik jest zalogowany - zwraca true, w przeciwnym wypadku - false
     * @return bool
     */
    public function isLogged () {
     if (empty($_SESSION['loginw']) || empty($_SESSION['haslow'])) {
      return false;
     }

     else {
      return true;
     }
    }

   

}


