<?php
function html_comment($comment) {

echo "



<!-- ================================================================================================================================



$comment



     ================================================================================================================================ -->

\n";

}

function html_debug($comment) {

    if(isset($_SESSION['dbg'])) {

        if($_SESSION['dbg']==true) {

            if( is_array($comment) or is_object($comment)) $comment=print_r($comment,true); 

            $comment=str_replace("-->"," \n(- - > INJECTED END OF HTML COMMENT )\n ",$comment);

            html_comment("DEBUG:\n$comment");

        }

    }

}
