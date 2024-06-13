<?php

$uri = explode("/", $_SERVER['REQUEST_URI']);

switch ($uri[1]) {
    case '':
        include APP_PATH."/view/home.html";
        break;
    case 'contact':
        include APP_PATH."/view/contact.php";
        break;
    case 'aboutus':
        include APP_PATH."/view/aboutus.php";
        break;

}
?>