<?php
require_once("./Models/CategoryModel.php");

class CategoryController
{
    public $model;

    public function __construct()
    {
        $this->model = new CategoryModel();
    }

    public function invoke()
    {
        if (!isset($_GET["keyword"])) {
            $categories = $this->model->getCategoryList();
            include "Views/";
        } else {
        }
    }
}
