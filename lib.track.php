<?php
function track_web_event($host,$trigger_name,$value) {
	$time=date("Y-m-d h:i:s");
	$message="$time,$host,$trigger_name,$value";
	$message=urlencode($message);
	echo $message."\n";
}
track_web_event("test","event_trigger","1");

