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
    
        $errors = array();
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
            //array_push($errors,"Please fill out your information!");
            include '../do-an-web-php/Views/users/signup.php';
        } else {
            switch($this->model->register($_GET['username'],$_GET['password'],$_GET['email'],$_GET['phoneNum'],$_GET['address'],$_GET['name'],$_GET['confirmPass        ']))
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
