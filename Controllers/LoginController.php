<?php
require_once("../do-an-web-php/Models/UserModel.php");
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
        $errors = array();
        if (!(isset($_GET['username']) && isset($_GET['password']))){ 
            include("../do-an-web-php/Views/users/signin.php");
        } else {
            if ($this->model->login($_GET['username'], $_GET['password']) == true) {
                if($_GET['username']=='admin')
                {

                    include("../do-an-web-php/Views/admin/customers.php");
                }else
                {

                    $_SESSION['username'] = $_GET['username'];
                    include("../do-an-web-php/Views/home.php");
                }
            } else {
                array_push($errors,"Wrong username or password !");
                include("../do-an-web-php/Views/users/signin.php");
            }
        }

        }
    }

