<?php


class worker {

    public static $userp = array();
    
    /**
     * Zwraca tablicę ze wszystkimi danymi o użytkowniku.
     * Indeksy tablicy odpowiadają nazwom pól w bazie danych (login, pass etc...)
     * @param string $login
     * @param string $pass
     * @return array
     */
    public function getData ($loginp, $passp) {
      
       
        if ($loginp == '') $loginp = $_SESSION['loginp'];
        if ($passp == '') $passp = $_SESSION['haslop'];
        
        
        self::$userp = mysql_fetch_array(mysql_query("SELECT * FROM pracownik WHERE loginp='$loginp' AND haslop='$passp' LIMIT 1;"));
        return self::$userp;
    }

    


    
    /**
     * Zwraca tablicę ze wszystkimi danymi o użytkowniku, tak jak powyższa metoda klasy,
     * ale rozpoznaje użytkownika nie po podaniu loginu i hasła tylko po podaniu ID.
     * Używana np. do wyświetlania strony profilu.
     * @param int $id
     * @return array
     */
    public function getDataById ($id) {
        $userp = mysql_fetch_array(mysql_query("SELECT * FROM pracownik WHERE IDP='$id' LIMIT 1;"));
        return $userp;
    }

    /**
     * Jeśli użytkownik jest zalogowany - zwraca true, w przeciwnym wypadku - false
     * @return bool
     */
    public function isLogged () {
     if (empty($_SESSION['loginp']) || empty($_SESSION['haslop'])) {
      return false;
     }

     else {
      return true;
     }
    }

   

}


