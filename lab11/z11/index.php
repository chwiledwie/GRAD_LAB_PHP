<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chwile Dwie - Geolokalizacja</title>
        
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <body>
        
        
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
    </header>

<!—Rozpoczynamy menu, przy użyciu nav -->
   <nav id="menu" role="navigation">
       <ul class="w3-navbar">
         
           <li><a href="netstat.php#kom">Netstat</a></li>
           <li><a href="phpinfo.php#kom">phpinfo()</a></li>
           <li><a href="top.php#kom">top i obciążenie serwera</a></li>
           <li><a href="zk.php#kom">zawartosć katalogu</a></li>
              <li><a href="dns.php#kom">DNS</a></li>
                 <li><a href="ts.php#kom">czas serwerowy</a></li>
           <li><a href="geoa.php#kom">Geo - zewnętrzne API</a></li>
           <li><a href="geobd.php#kom">Geo - BD</a></li>
          
        
   </nav>

<section id="kom" style="min-height: 600px;">

<div class="mmm">
            <img src="img/img1.jpg"/>
        </div>
<div>
    
    <p class="witaj">Zapraszam do korzystania z usług Geolokalizacji.</p>
    <p class="contentW">Życzymy wesołych świąt.</p>
    
        
</div>
<div>
    <img class="pic" src="img/img2.jpg"/>
</div>
</section>

<footer class="bg-light-gray">
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
