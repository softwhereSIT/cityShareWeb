<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$controller = "site";
$action = "index";

if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];

    if($controller == "" || $action == "") {
        $controller = "site";
        $action = "index";
    }
}

require_once('view/layout.php');

?>