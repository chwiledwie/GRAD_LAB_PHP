<!— Główny nagłówek strony -->
<header role=”banner”>
<!—Grupa nagłówków, użcie hgroup -->
    <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading"></div>
               
            </div>
        </div>
<!—Rozpoczynamy menu, przy użyciu nav -->
   <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
         <li><a href="..\z6\#announcement">Ogłoszenia</a></li>
         <li><a href="login.php">Konto</a></li>
    <li><a href="..\z6\#contactme">Kontakt</a></li>
    
                        
   </nav>

</header>


<h3>Profil - Edytuj profil</h3>
<?php
$pass='Discovery00';
$login='20033357_0000006';
$host='localhost';
$dbase='20033357_0000006';
 
 
//logowanie do serwera mysql


 $mysqli = new mysqli($host, $login, $pass, $dbase);
 

 
   
 
                
 $resultSet = $mysqli->query("SELECT * FROM userd");
 
  
  
         
 if($resultSet->num_rows != 0){
     while($rows = $resultSet->fetch_assoc()){
         $imied = $rows['surname'];
         $nazwiskod = $rows['name'];
          $emaild = $rows['email'];
          $phoned = $rows['phone'];
          $adresd = $rows['location'];
          ?>


<?php 
     }
 }
     ?>
<form action="editprofile.php" method="POST">
    Imie: <input type=text name="surname" value="<?php echo $imied?>"/><br/> 
    Nazwisko: <input type=text name="name" value="<?php echo $nazwiskod?>"/><br/> 
            
    Email: <input type="text" name="email" value="<?php echo $emaild?>"/><br/>
    Telefon: <input type=text name="phone" value="<?php echo $phoned?>"/><br/>  
    Lokalizacja: <input type=text name="location" value="<?php echo $adresd?>"/><br/> 
    <input type=submit name="submit" value="Zapisz"/><br/>
    
           
           
       </form> 

 <p>Zalogowany jako: <?php echo $_SESSION['login'];?></p>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Chwile Dwie 2016</span>
                </div>
                <div class="col-md-4">
                    <p>Goście: 
                        <?php include("licznik_wejsc.php"); ?>
                            </p>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

