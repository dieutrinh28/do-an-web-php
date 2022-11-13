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
        if (!(isset($_POST['username']) && isset($_POST['password']))){ 
            include("../do-an-web-php/Views/users/signin.php");
        } else {
            if ($this->model->login($_POST['username'], $_POST['password']) == true) {
                if($_POST['username']=='admin')
                {
                    
                    $users=  $this->model->getUserList();
                    include("../do-an-web-php/Views/admin/customers.php");
                    
                    //header("Location: ./Views/admin/customers.php");
                }else
                {

                    $_SESSION['username'] = $_POST['username'];
                    include("../do-an-web-php/Views/home.php");
                }
            } else {
                array_push($errors,"Wrong username or password !");
                include("../do-an-web-php/Views/users/signin.php");
            }
        }
        
        }
    }

