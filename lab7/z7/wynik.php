     <?php
     include 'confdb.php';
     
     $utf8 = ('SET NAMES utf8');
$wynik = mysql_query($utf8) or die(mysql_error());       

$x = 0;

$question=  mysql_query("SELECT * FROM questions");


$score=0;
echo 'Wyniki Quizu: <br />';

    while ($row = mysql_fetch_assoc($question))
{
    $answered =implode($_POST['cb'.$x]) ;
    
    
    $correct = $row['answer'] ;

    if ($answered == $correct ) {
        $score++;
         $acolor='green';
    }
    else {
        $acolor='red';
    }
    
    
     echo 'Twoja odpowiedź: <font color=' . $acolor . '>' . $answered . '<font color=black> <br />';


    echo 'Prawidłowa odpoweidź to:' . $correct . '<br />' ;
    echo '-------------------------------------- <br />' ;
  
    
$x = $x + 1;    
}

$pr = ($score*100)/4;

echo 'Uzyskałeś łączną liczbę punktów: <font color=blue>' . $score . ' z ' . $x . ' możliwych! <br />';
echo $pr.'% poprawnych odpowiedzi.';

    ?>      