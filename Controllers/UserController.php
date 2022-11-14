<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Models/UserModel.php");
class UserController
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invokeAdmin()
    {
        $users = $this->model->getUserList();
        //header("Location: ./Views/admin/customers.php");
        include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/admin/customerlist.php");
        // if (!isset($_POST['keyword'])) {

        // } else if (isset($_POST['keyword'])) {
        //     $users = $this->model->searchUser($_GET['keyword']);
        //     include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/admin/customerlist.php");
        // }
    }
}
