<?php
define('ROOT', dirname(__FILE__));
include ROOT. '/components/autoload.php';
$router = new Router();
$router->run();
// header("HTTP/1.1 301 Moved Permanently");
// header("Location: http://daribox.com/");
// exit();
?>