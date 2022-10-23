<?php
require_once("Controllers/ProductController.php");
require_once("../do-an-web-php/Controllers/UserContronller.php");
$controller = new ProductController();
// $controller = new UserController();
$controller->invoke();
