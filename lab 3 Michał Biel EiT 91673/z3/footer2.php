<!— Główny nagłówek strony -->
<header role=”banner”>
<!—Grupa nagłówków, użcie hgroup -->
   <!-- Header -->
    
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Witaj na stronie zespołu Chwile Dwie!</div>
                <div class="intro-heading">Miło nam Ciebie gościć.</div>
                <a href="#services" class="page-scroll btn btn-xl">Zobacz naszą ofertę</a>
            </div>
        </div>
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



