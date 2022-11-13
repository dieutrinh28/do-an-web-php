<?php
require_once("../do-an-web-php/Models/UserModel.php");
session_start();
class Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invoke()
    {
        $errors = array();
        include("../do-an-web-php/Views/users/signin.php");
        if (isset($_POST['submitLogin'])) {
            if ($this->model->login($_POST['username'], $_POST['password']) == true) {
                if ($_POST['username'] == 'admin') {

                    $users =  $this->model->getUserList();
                    include("../do-an-web-php/Views/admin/customers.php");

                    //header("Location: ./Views/admin/customers.php");
                } else {

                    $_SESSION['username'] = $_POST['username'];
                    include("../do-an-web-php/Views/home.php");
                }
            } else {
                array_push($errors, "Wrong username or password !");
                include("../do-an-web-php/Views/users/signin.php");
            }
        } 
        else
        {   
            if (isset($_POST['submitLogout '])
               
            ) {
                include '../do-an-web-php/Views/users/signup.php';

            switch($this->model->register($_GET['username'],$_GET['password'],$_GET['email'],$_GET['phoneNum'],$_GET['address'],$_GET['name'],$_GET['confirmPass']))
                {
                    case 0: 
                        {
                            include '../do-an-web-php/Views/users/signin.php';
                        }
                    case 1:
                        {
                            array_push($errors,"This account has been exist.");
                            include '../do-an-web-php/Views/users/signup.php';
                        }
                    case 3:
                        {
                            array_push($errors,"Your information is not valid.");
                            include '../do-an-web-php/Views/users/signup.php';
                        }
                }
            
        }
      
        }
    }
}
