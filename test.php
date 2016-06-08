<?php
include("include.phylactery.php");
if($_GET['i']=="i") { phy_Percentage_Bar($_GET['p']);  exit(); }
$x=0;
if(phy_BOOL_Check($x)) {
    phy_Color_Print("Phylactery Test","black","green");
}
else {
    phy_Color_Print("Phylactery Test","black","red");
}
echo "<hr>";
for($i=1;$i<99;$i+=20) {
    echo "<img src='?i=i&p=$i'></img><BR>";
}
echo "<hr>";
$ping_result=phy_NET_Ping("sethcoder.com",80,5000);
if($ping_result!="down") { 
    phy_Color_Print("sethcoder.com ping = $ping_result", "black", "green");
}