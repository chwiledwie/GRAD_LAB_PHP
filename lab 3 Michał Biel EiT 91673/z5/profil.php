<?php 
session_start();
?>
<html>
    <head>
        <title>Profil</title>
    </head>
    
    <body>
        
        <?php include 'confdb.php';
        include 'functions.php';
        include 'title_bar.php';
        error_reporting(0);
        if($_POST['submit'])
        {
            $name=basename($_FILES['file_upload']['name']);
            $t_name=$_FILES['file_upload']['tmp_name'];
             $galeria=$_POST['galeria'];
            $kom=$_POST['komentarz'];
            
// connect and login to FTP server
$ftp_server = "serwer1638898.home.pl";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$ftp_username="chwiledwie@chwiledwie.pl";
$ftp_userpass="Discovery76";
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$dir="public_html/ChwileDwie/z5/img";



if (ftp_put($ftp_conn,$dir."/".$galeria."/".$name, $t_name, FTP_ASCII))
       
  {
    
           
            
            $select;
                $quer="insert into tabela1 (idt,link,galeria,komentarz) values ('','$name','$galeria','$kom')";
                $resultD=  mysql_query($quer,$conn);
    
  echo "Dodano $name.";
  }
else
  {
  echo "Nie udało się dodać $name.";
  }
ftp_close($ftp_conn);
        }
        ?>
     
        <h3>Profil - Panel Administracyjny</h3>
        <form action="profil.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file_upload"/><br/>
           <label for="as">Wybierz galerię</label><br/>
    <select name="galeria" id="inSel"> 
      <option value="standing">standing</option> 
      <option value="sitting">sitting</option> 
      <option value="portraits">portraits</option> 
      <option value="interesting">interesting</option> 
      <option value="perspective">perspective</option> 
     
    </select>
             Komentarz:<input type="text" name="komentarz"/><br/>
            <input type="submit" name="submit" value="dodaj"/>
        </form>
        
        <p>Zalogowany jako: <?php echo $_SESSION['login'];?></p>
    </body>
</html>

