<!— Główny nagłówek strony -->
<header role=”banner”>
<!—Grupa nagłówków, użcie hgroup -->
   <!-- Header -->
    
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

<form method="post" action="login2.php">
           <div class="form-group">
   <label class="control-label" for="login">
       Login:
      </label>
               <input class="form-control" id="contactname" name="login" type="text"/>
           </div>
           
           <div class="form-group">
  <label class="control-label" for="haslo">
       Hasło:
      </label>
               <input class="form-control" id="contactname" name="haslo" type="password"/>
           </div>
           
           <div class="form-group" >
  <input type="hidden" name="send" value="1" />
  <input id="bs" class="btn-success" type="submit" value="Zaloguj" />
  <a href="register.php" class="btn btn-inverse" role="button">Zarejestruj</a>
           </div>
 </form>

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



