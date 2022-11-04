<?php
require_once '../do-an-web-php/Models/UserModel.php';
class UserController
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invoke()
    {
        if (
            !(
                isset($_GET['username']) &&
                isset($_GET['password']) &&
                isset($_GET['email']) &&
                isset($_GET['phoneNum']) &&
                isset($_GET['name']) &&
                isset($_GET['address'])
            )
        ) {
            include '../do-an-web-php/Views/user/signup.php';
        } else {
            if (
                $this->model->register(
                    $_GET['username'],
                    $_GET['password'],
                    $_GET['email'],
                    $_GET['phoneNum'],
                    $_GET['address'],
                    $_GET['name'],
                    $_GET['confirmPass']
                ) == true
            ) {
                include '../do-an-web-php/Views/login.php';
            } else{
                include '../do-an-web-php/Views/user/signup.php';
            }


        }
    }
}
