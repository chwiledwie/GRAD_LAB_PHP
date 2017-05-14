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
 <h3>Profil - Dodaj ogłoszenie</h3>
       <form action="addA.php" method="post" enctype="multipart/form-data">
           Nazwa towaru: <input type=text name="namead"/><br/> 
            
            <label for="sec">Kategoria: </label>
<select name="cat" id="sec"> 
<option value="PC">PC</option> 
<option value="PS3">PS3</option> 
<option value="PS4">PS4</option> 
<option value="Xbox 360">Xbox 360</option> 
<option value="Xbox One">Xbox One</option>      
</select><br/>
            Zdjęcie: <input type="hidden" name="MAX_FILE_SIZE" value="8388608">
                    <input type="file" name="photo_add"><br/>
           Cena: <input type=text name="price"/><br/>  
           Płatnik VAT: <input type=checkbox name="VAT"/><br/> 
           Przesyłka:<br/> <input type=radio name=delivery value="poczta_polska"/> 
           Poczta Polska<br> <input type=radio name=delivery value="pobranie_pocztowe"/> 
           Pobranie pocztowe<br> <input type=radio name=delivery value="dhl"/>
           DHL<br> 
           Opis: <textarea name="opis"></textarea>
           <input type=submit name="file_add" value="Wystaw"/><br/>
           
           
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

