<?php
/////////////////////////////////////////////////////////////////////////////////////////////////
// Phylactery PHP Library (c) 2017 Seth Parson

function phy_HTML_Comment($comment) {
echo "<!-- ================================================================================================================================
$comment
     ================================================================================================================================ -->
\n";
}
function phy_HTML_Debug($comment) {
    if(isset($_SESSION['dbg'])) {
        if($_SESSION['dbg']==true) {
            if( is_array($comment) or is_object($comment)) $comment=print_r($comment,true); 
            $comment=str_replace("-->"," \n(- - > INJECTED END OF HTML COMMENT )\n ",$comment);
            html_comment("DEBUG:\n$comment");
        }
    }
}
