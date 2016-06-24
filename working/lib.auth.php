<?php
$SESSION_STATUS=session_status();
if($SESSION_STATUS==PHP_SESSION_ACTIVE) {
	$AUTHENTICATED=FALSE; if(isset($_SESSION["AUTH"])) $AUTHENTICATED==TRUE;
}

function lib_auth_logged_in($name) {
}

function lib_auth_login_form() {
	echo "<form method=post>Name: <input name=name> Pass: <input type=password name=pass><input type=submit><input type=hidden name=action value=login></form>";
}

function lib_auth_action_login() {
	
}