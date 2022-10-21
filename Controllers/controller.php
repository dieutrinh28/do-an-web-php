<?php
    require_once("./Models/ProductModel.php");

    class Controller
    {
        public $model;

        public function __construct()
        {
            $this->model = new ProductModel();
        }

        public function invoke()
        {
            if(!isset($_GET["productid"]))
            {
                $products = $this->model->getProductList();
                include "Views/productlist.php";
            }
            else 
            {
                $product = $this->model->getProduct($_GET["productid"]);
                include "Views/viewproduct.php";
            }
        }
    }
?>