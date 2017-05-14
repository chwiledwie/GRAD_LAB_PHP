<?php

function loggedin(){
    if(isset($_SESSION['log']) && !empty($_SESSION['log']) ){
        return false;
    }else{
        return true;
    }
}

?>
