<?php
require_once("../do-an-web-php/Classes/Cart.php");
require_once("../do-an-web-php/Modules/db_module.php");
require_once("../do-an-web-php/Models/validate.php");
    class CartModel 
    {

    function addToCart($product)
    {
        if (isset($_SESSION['cart'])) {
            $cart =$_SESSION['cart'];
            if (!array_key_exists($product["id"], $cart)) { //nêu hàng chưa có trong giỏ mới cho thêm
                $cart[$product["id"]] = $product; //key của mảng sẽ được xây theo id của sản phẩm
                $_SESSION['cart'] = $cart;
            } else {
                $cart[$product["id"]] = $product;
                $_SESSION["cart"] = $cart;
            }
        }
    }
    function delFrmCart($key)
    {
        if (isset($_SESSION["cart"])) {
            $cart = $_SESSION['cart'];
        };
        unset($cart[$key]);
        $_SESSION['cart'] = $cart;
    }

    function updateCart($key, $quantity)
    {
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            $cart[$key]['quantity'] = $quantity;
            $_SESSION['cart'] = $cart;
        }
    }
    function checkOut()
    {
        $sum = 0;
        $cart = $_SESSION['cart'];
        foreach ($cart as $v)
            $sum += $v['quantity'] * $v['gia'];
        return number_format($sum);
    }



    function Update($key = false)
    {
        foreach ($_POST['quantity'] as $id_sp => $quantity) {

            if ($quantity == 0) {
                unset($_SESSION["cart"][$id_sp]);
            } else {
                if ($key) {
                    $_SESSION["cart"][$id_sp] += $quantity;
                } else {
                    $_SESSION["cart"][$id_sp] = $quantity;
                }
            }
        }
    }

    function Dispose()
    {
        mysqli_close($this->con);
    }

    //danh sach danh mục san pham
    function list_SP($key)
    {
        $link = null;
        taoKetNoi($link);
        $query = "SELECT * FROM tbl_products where id='$key' ";
        $result= chayTruyVanTraVeDL($link,$query);
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $data = array('pro_id'=>$rows['pro_id'],'pro_name'=> $rows['pro_name'],'price'=> $rows['price'],'cat_id'=>$rows['cat_id'],'pic' => $rows['pic']);
        }
        return $data;
    }

    function list_Cart()
    {
        $query = "SELECT * FROM `tbl_products` WHERE `id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")";
        $link = null;
        taoKetNoi($link);
        $result= chayTruyVanTraVeDL($link,$query);
        
        while ($rows = mysqli_fetch_assoc($result)) {
            $data = array('pro_id'=>$rows['pro_id'],'pro_name'=> $rows['pro_name'],'price'=> $rows['price'],'cat_id'=>$rows['cat_id'],'pic' => $rows['pic']);
        }
        return $data;
    }
}

    