<?php 
    require_once ("../do-an-web-php/Models/userModel.php");
    class UserController
    {
        public $model;
        public function __construct()
        {
            $this->model = new UserModel();
        }
        
        public function invoke()
        {
            if(!isset($_GET['keyword'])){
                $users = $this->model->getuserlist();
                include ("../do-an-web-php/Views/admin/customers.php");
            }else if(isset($_GET['keyword']))
            {
                $users = $this->model->searchUser($_GET['keyword']);
                include ("../do-an-web-php/Views/admin/customers.php");
            }
        }
        
    }
?>  