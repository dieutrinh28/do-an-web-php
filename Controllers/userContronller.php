<?php 
    require_once ("../do-an-web-php/Models/userModel.php");
    class Controller
    {
        public $model;
        public function __construct()
        {
            $this->model = new Model();
        }
        
        public function invoke()
        {
            if(!isset($_GET['keyword'])){
                $users = $this->model->getuserlist();
                include ("../do-an-web-php/Views/userlist.php");
            }else
            {
                $users = $this->model->searchUser($_GET['keyword']);
                include ("../do-an-web-php/Views/userlist.php");
            }
        }
        
    }
?>