<?php
/////////////////////////////////////////////////////////////////////////////////////////////////
// Phylactery PHP Library (c) 2017 Seth Parson

function phy_NET_Ping($host, $port, $timeout) {
  $tB = microtime(true);
@  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout);
  if (!$fP) { return "down"; }
  $tA = microtime(true);
  return round((($tA - $tB) * 1000), 2)." ms";
}

function phy_NET_Valid_IP($ip_addr){
  //first of all the format of the ip address is matched
  if(preg_match("/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/",$ip_addr)) {
    //now all the intger values are separated
    $parts=explode(".",$ip_addr);
    //now we need to check each part can range from 0-255
    foreach($parts as $ip_parts) {
      if(intval($ip_parts)>255 || intval($ip_parts)<0)
      return false; //if number is not within range of 0-255
    }
    return true;
  }
  else
    return false; //if format of ip address doesn't matches
}

