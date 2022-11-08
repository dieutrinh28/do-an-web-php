<?php
//require_once("Controllers/ProductController.php");
//require_once("Controllers/UserController.php");
//require_once("Controllers/LoginController.php");
require_once("Controllers/RegisterController.php");
//require_once ("Controllers/CartController.php");
//$controller = new ProductController();
// require_once ("../do-an-web-php/Views/home.php");
// if(!$_GET['username'])
// {
//     require_once("Controllers/LoginController.php");
//     $controller = new UserController();
//     $controller->invoke();
// }
//require_once ("Controllers/LoginController.php");
$controller = new UserController();
$controller->invoke();
