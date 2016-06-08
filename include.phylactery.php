<?php // Phylactery PHP Library (c) 2016 Seth Parson
include("include.array.php");
include("include.hotimage.php");
include("include.html.php");
include("include.string.php");
include("include.network.php");

function phy_Verify_Php($x) {
    exec("php -l $x",$errors);
    foreach($errors as $error) if(stristr($error,"No syntax errors")) return true;
    return false;
}

function phy_BOOL_Check($x) {
	if(is_bool($x)===true) return $x;
	$x=strtolower($x);
	if( (stristr($x,"true")) ||
		(stristr($x,"yes")) ||
		(stristr($x,"on")) ||
		(stristr($x,"1")) )
			return true;
	return false;
}