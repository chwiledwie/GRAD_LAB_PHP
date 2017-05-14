
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
         
         <li><a href="#announcement">Ogłoszenia</a></li>
         <li><a href="login.php">Konto</a></li>
    <li><a href="#contactme">Kontakt</a></li>
            
                        
   </nav>
</header>

    
        <div class="container">
                   <div class = "panel panel-success">
   <div class = "panel-heading">
        <h3 class="panel-title">Rejestracja</h3>
        </div>
       <div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-4 col-lg-offset-4">
     
       <form method="post" action="">
           <div class="form-group">
               
               <label class="control-label" for="login">Login:</label>
               <input class="form-control" maxlength="32" type="text" name="login" id="login" />
   </div>
           
           
           <div class="form-group">
               <label class="control-label" for="pass">Hasło:</label>
               <input class="form-control" maxlength="32" type="password" name="pass" id="pass" />
           </div>
           
           <div class="form-group">
               <label class="control-label" for="pass_again">Hasło (ponownie):</label>
               <input class="form-control"maxlength="32" type="password" name="pass_v" id="pass_again" />
           </div>
           
           
           
           
          
           
           <div class="form-group" >  
               <input type="hidden" name="send" value="1" />
               <input type="submit" class="btn-success" value="Zarejestruj" />
  </div>
 
           

  </div>
 </div>
</div>
   
            </div>
            
                   </div>
            
           
            
        </div>

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