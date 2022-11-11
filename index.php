<?php
session_start();
include_once("./Controllers/ProductController.php");
$controller = new ProductController();
$controller->invokeAdmin();

