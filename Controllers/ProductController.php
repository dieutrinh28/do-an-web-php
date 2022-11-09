<?php
require_once("../do-an-web-php/Models/ProductModel.php");

class ProductController
{
    public $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function invoke()
    {
        if (!isset($_GET["productid"])) {
            $products = $this->model->getProductList();
            include "../do-an-web-php/Views/productlist.php";
        } else {
            $product = $this->model->getProduct($_GET["productid"]);
            include "../do-an-web-php/Views/viewproduct.php";
        }
    }
    public function invokeAdmin()
    {
        if (!isset($_GET["productid"])) {
            $products = $this->model->getProductList();
            include "../do-an-web-php/Views/admin/product.php";
        } else {
            $product = $this->model->getProduct($_GET["productid"]);
            include "../do-an-web-php/Views/admin/edit-product.php";
        }
    }
    public function createProduct()
    {
        if (
            !(isset($_GET['name']) &&
                isset($_GET['description']) &&
                isset($_GET['price']) &&
                isset($_GET['category']) &&
                isset($_GET['image'])
            )
        ) {
            echo "error";
            include '../do-an-web-php/Views/admin/add-product.php';
        } else {
            echo "this is success";
            $this->model->createProduct($_GET['name'], $_GET['description'], $_GET['price'], $_GET['category'], $_GET['image']);
        }
    }
}
