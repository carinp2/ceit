<?php

    $to = "carin@ceit.cc";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "CEIT Development - Website request";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email";
    $fields{"phone"} = "Phone";
    $fields{"message"} = "Message";
    $body = "The message: \r\n";

    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }

    $send = mail($to, $subject, $body, $headers);

?>