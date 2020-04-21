<?php
$_SESSION['SessionCeitStyle'] = "css/style1.2.css";
$_SESSION['SessionCeitScript'] = "js/general1.2.js";
$vPageUrl = $vParts->curPageURL();

unset($_SESSION['SessionCeitServerUrl']);
(strpos($vPageUrl, 'http://127.0.0.1/') !== false ? $_SESSION['SessionCeitServerUrl'] = "127.0.0.1/ceit2017/" : $_SESSION['SessionCeitServerUrl'] = 'https://www.ceit.cc/');

?>