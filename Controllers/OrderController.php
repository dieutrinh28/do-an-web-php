<?php
require_once("../do-an-web-php/Models/OderModel.php");

class OrderController
{
    public $model;
    public function __construct()
    {
        $this->model = new OrderModel();
    }

    public function invoke()
    {
        if(!isset($_GET['detail'])){
            $orders = $this->model->getOrder();
            //header("Location: ./Views/admin/customers.php");
            include ("../do-an-web-php/Views/admin/orders.php");
        }else if(isset($_GET['detail']))
        {
            //$users = $this->model->searchUser($_GET['keyword']);
            include ("../do-an-web-php/Views/admin/detail-order.php");
        }

        
    }

}