<?php
require_once("../../Models/UserModel.php");
session_start();
class UserController
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invoke()
    {
        if (isset($_POST['submitLogin'])) {

            if ($this->model->login($_POST['username'], $_POST['password']) == true) {

                if ($_POST['username'] == 'admin') {

                    $users =  $this->model->getUserList();
                    header("Location: ../admin/customerlist.php");
                } else {

                    $_SESSION['username'] = $_POST['username'];
                    header("Location: ../users/home.php");
                }
            } else {
                // array_push($errors, "Wrong username or password !");
                header("Location: ../users/signin.php");
            }
        } else {
        }
        // $errors = array();
        // if (!(isset($_POST['username']) && isset($_POST['password']))){ 
        //     include("../do-an-web-php/Views/users/signin.php");
        // } else {
        //     if ($this->model->login($_POST['username'], $_POST['password']) == true) {
        //         if($_POST['username']=='admin')
        //         {

        //             $users=  $this->model->getUserList();
        //             include("../do-an-web-php/Views/admin/customers.php");

        //             //header("Location: ./Views/admin/customers.php");
        //         }else
        //         {

        //             $_SESSION['username'] = $_POST['username'];
        //             include("../do-an-web-php/Views/home.php");
        //         }
        //     } else {
        //         array_push($errors,"Wrong username or password !");
        //         include("../../Views/users/signin.php");
        //     }
        // }

    }
}
