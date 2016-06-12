<?php
/////////////////////////////////////////////////////////////////////////////////////////
// SethCoder's PHP Library
function lib_session_start($session_name="",$session_cache_expire="99999",$session_folder="../session") {
	$SESSION_STATUS=session_status();
	if($SESSION_STATUS==PHP_SESSION_NONE) { // PHP_SESSION_DISABLED
		if(empty($session_name)) $session_name="session".$_SERVER['SERVER_NAME'];
		session_name(str_replace(" ","_",$session_name));
		session_cache_expire($session_cache_expire); // default is 180
		session_save_path($session_folder);
		session_start();
	}
}
function lib_session_destroy() {
	session_destroy();
}