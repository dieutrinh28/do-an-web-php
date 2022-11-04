<?php
require_once("../do-an-web-php/Models/UserModel.php");
class UserController
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invoke()
    {
        $errors = array();
        if (!(isset($_GET['username']) && isset($_GET['password']))){ 
            include("../do-an-web-php/Views/login.php");
        } else {
            if ($this->model->login($_GET['username'], $_GET['password']) == true) {
                include("../do-an-web-php/Views/home.php");
            } else {
                array_push($errors,"wrong username or password");
                include("../do-an-web-php/Views/login.php");
            }
        }
    }
}
