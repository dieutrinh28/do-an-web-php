<?php
require_once("Controllers/ProductController.php");
$controller = new ProductController();
// $controller = new UserController();
$controller->invoke();
