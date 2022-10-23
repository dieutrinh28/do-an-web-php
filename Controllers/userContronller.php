<?php 
    require_once ("../do-an-web-php/Models/UserModel.php");
    class UserController
    {
        public $model;
        public function __construct()
        {
            $this->model = new UserModel();
        }
        
        public function invoke()
        {
            if(!isset($_GET['userid'])){
                $users = $this->model->getUserList();
                include ("../do-an-web-php/Views/userlist.php");
            }
            else
            {
                $users = $this->model->searchUser($_GET['userid']);
                include ("../do-an-web-php/Views/userlist.php");
            }
        }
        
    }
