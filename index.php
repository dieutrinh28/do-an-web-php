<?php
    require_once("../do-an-web-php/Controllers/ProductController.php");
    //require_once("../do-an-web-php/Controllers/UserContronller.php");
    $controller = new ProductController();
    $controller->invokeAdmin();
    
