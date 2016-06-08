<?php

/////////////////////////////////////////////////////////////////////////////////////////
function phy_NET_Ping($host, $port, $timeout) {
  $tB = microtime(true);
@  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout);
  if (!$fP) { return "down"; }
  $tA = microtime(true);
  return round((($tA - $tB) * 1000), 2)." ms";
}