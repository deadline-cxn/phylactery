<?php
function mailgo($email,$message,$subject,$from) {
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $outmessage =  "<html><head><title>$subject</title>\n"."
    <style type\"text/css\">
    body, td, p {font-family: verdana,geneva,sans-serif; font-size: 10px; color: #555555}
    select {font-family:verdana,geneva; font-size:10px;}
    input {font-family:verdana,geneva; font-size:10px}
    h1 {font-family:verdana,geneva; font-size:12px}
    a:link , a:active, a:visited {font-family: verdana,geneva,sans-serif; font-size: 10px;COLOR:#224466;text-decoration:underline;}
    a:hover{font-family: verdana,geneva,sans-serif; font-size: 10px; COLOR:#ff6600;text-decoration:underline;}
    </style></head></head>\n<body>\n".$message;
    $outmessage .= "\n\n<br><br><br>\n";
    $outmessage .= "</body>\n</html>\n";
    return mail( $email, $subject , $outmessage, "From: $from\r\n$headers");
}


