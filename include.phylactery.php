<?php



function phy_Verify_Php($x) {
    exec("php -l $x",$errors);
    foreach($errors as $error) if(stristr($error,"No syntax errors")) return true;
    return false;
}

