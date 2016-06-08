<?php
function phy_Get_Array($x) { $r="";
    foreach($x as $k => $v) {
        if(is_array($v)) {
            $r .= " '$k' => ( ".Get_Array($v)." ), ";
        }
        else {
            $r .= "  '$k' => '$v' ,";
        }
    }
    return $r;
}
function phy_Get_Globals_Array() { $x=array();
    foreach($GLOBALS as $k => $v) {
        if( $k != "GLOBALS" and
            $k != 'x1'      and
            $k != 'x2'      and
            $k != 'k'       and
            $k != 'v'  )
            $x[$k]=$v;
    }
    return $x;
}
function phy_Get_Array_Diff($array1,$array2) { $x=array(); foreach($array1 as $k => $v) if(!isset($array2[$k])) $x[$k]=$v; return $x; }
function phy_Get_Globals() { $x="";
    foreach($GLOBALS as $k => $v) {
        if( $k != "_GET"  and
            $k != "_POST" and
            $k != "_COOKIE" and 
            $k != "_FILES" and 
            $k != "_REQUEST" and
            $k != "_SESSION" and
            $k != "DEBUG" and
            $k != "argv"  and
            $k != "argc"  and
            $k != "_SERVER"  and
            $k != "GLOBALS" and
            $k != "k" and
            $k != "v" and
            $k != "x" and
            $k != "infile" and
            $k != "HERE" and
            $k != "HOSTNAME" and
            $k != "MACHINE_NAME" and
            !stristr($k,"CM_") and
            !stristr($k,"BASE_") ) {
            if(is_array($v)) {
                $x.="\$$k = array ( ".Get_Array($v)." ); \n";
            }
            else {
                $x.="\$$k = \"$v\"; \n";
            }
        }
    }
    return $x;
}
