<?php

$controller = "cms";
$action = "index";

echo "<script> alert('Email: ".$controller." Senha: ".$action."'); </script>";

if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];

    if($controller == "" || $action == "") {
        $controller = "cms";
        $action = "index";
    }
}

session_start();

require_once ("../model/bd_class.php");
require_once("view/layout.php");