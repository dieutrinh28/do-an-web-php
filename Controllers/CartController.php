<?php
    // $_SESSION['giohang'] = [
    //     1 => ['ten' => 'OPPO', 'soluong' => 3, 'gia' => 45],
    //     2 => ['ten' => 'OPPO', 'soluong' => 3, 'gia' => 45],
    //     3 => ['ten' => 'OPPO', 'soluong' => 3, 'gia' => 45]
    // ];
    // function addToCart($hang) {
    //     if(isset($_SESSION['giohang'])) {
    //         $giohang = $_SESSION['giohang'];
    //         if(!array_key_exists($hang["id"], $giohang))
    //         {
    //             $giohang[$hang["id"]] = $hang;
    //         }
    //         $_SESSION['giohang'] = $giohang;
    //     }
    //     else
    //     {
    //         $giohang[$hang["id"]] = $hang;
    //         $_SESSION['giohang'] = $giohang;
    //     }
    // }
    // function deleteFromCart($key) {
    //     if(isset($_SESSION['giohang'])) {
    //         $giohang = $_SESSION['giohang'];
    //         unset($giohang[$key]);
    //         $_SESSION['giohang'] = $giohang;
    //     }
    // }
    // function updateCart($key, $soluong) {
    //     if(isset($_SESSION['giohang'])) {
    //         $giohang = $_SESSION['giohang'];
    //         $giohang[$key]['soluong'] = $soluong;
    //         $_SESSION['giohang'] = $giohang;
    //     }
    // }
    // function payment() {
    //     $sum = 0;
    //     $giohang = $_SESSION['giohang'];
    //     foreach($giohang as $v)
    //         $sum+=$v['soluong']*$v['gia'];
    //     return number_format($sum);
    // }
    require_once ("../do-an-web-php/Models/CartModel.php");

class CartController
{
        public $model;
    public function __construct()
    {
        $this->model = new CartModel();
    }
    public function invoke()
    {
        if(!isset($_GET['add'])){
             $cart= $this->model->getCartList();
            include ("../do-an-web-php/Views/cart.php");
        }else
        {
           
        }
    }
        
}
    
