<?php
//require_once("Controllers/ProductController.php");
//require_once("Controllers/UserController.php");
//require_once("Controllers/LoginController.php");
//require_once("Controllers/RegisterController.php");
//require_once ("Controllers/CartController.php");
//require_once("Controllers/OrderController.php");
   // $controller = new OrderController();
require_once("Controllers/Controller.php");
   $controller = new Controller();
    $controller->invoke();
