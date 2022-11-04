<?php
//require_once("Controllers/ProductController.php");
require_once("Controllers/UserController.php");
//require_once("Controllers/LoginController.php");
//require_once("Controllers/RegisterController.php");
//require_once ("Controllers/CartController.php");
//$controller = new ProductController();
$controller = new UserController();

$controller->invoke();
