<?php

function Color_Print($text="",$color="black",$bgcolor="") {
    $color=strtolower($color);
    $bgcolor=strtolower($bgcolor);
    $ansi=array();
    $ansi['white']="\33[1;37m";
    $ansi['darkgray']="\33[1;30m";
    $ansi['blue']="\33[34m";
    $ansi['brightblue']="\33[1;34m";
    $ansi['cyan']="\33[0;36m";
    $ansi['brightcyan']="\33[1;36m";
    $ansi['green']="\33[0;32m";
    $ansi['red']="\33[0;31m";
    $ansi['brightred']="\33[1;31m";
    $ansi['black']="\33[0;30m";
    $ansi['brightgreen']="\33[1;32m";
    $ansi['purple']="\33[0;35m";
    $ansi['brightpurple']="\33[1;35m";
    $ansi['brown']="\33[0;33m";
    $ansi['yellow']="\33[1;33m";
    $ansi['brightgray']="\33[0;37m";
    $ansi['reset']="\33[0;0m";
    $html=array();
    $html['white']="#FFDEAD";
    $html['darkgray']="darkgray";
    $html['blue']="blue";
    $html['brightblue']="azure";
    $html['cyan']="cyan";
    $html['brightcyan']="aliceblue";
    $html['green']="green";
    $html['red']="red";
    $html['brightred']="pink";
    $html['black']="black";
    $html['brightgreen']="springgreen";
    $html['purple']="purple";
    $html['brightpurple']="lavenderblush";
    $html['brown']="brown";
    $html['yellow']="yellow";
    $html['brightgray']="lightgray";
    $html['reset']=" ";
    if(isset($_SERVER["SERVER_NAME"])) {
        echo "<font style='color:".$html[$color]."; ";
        if(!empty($bgcolor))
            echo " background-color:".$html[$bgcolor]."; ";
        echo "'>$text</font>";
    }
    else
        echo $ansi[$color]."$text";
}

