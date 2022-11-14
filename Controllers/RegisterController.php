<?php
require_once '../../Models/UserModel.php';
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
        if(isset($_POST['submitSignup']))
        {
            switch($this->model->register($_POST['username'],$_POST['password'],$_POST['email'],$_POST['phoneNum'],$_POST['address'],$_POST['name'],$_POST['confirmPass']))
                {
                    case 0: 
                        {
                            header("Location: ../users/signin.php?msg=true");
                        }
                    case 1:
                        {
                            echo "1";
                            array_push($errors,"This account has been exist.");
                            header("Location: ../users/signup.php?msg=1");

                        }
                    case 3:
                        {
                            echo "2";
                            array_push($errors,"Your information is not valid.");
                            header("Location: ../users/signup.php?msg=invalid_input_data");

                        }
                    }
        }

        
    }
}
