<?php
require_once("../do-an-web-php/Classes/Cart.php");
require_once("../do-an-web-php/Modules/db_module.php");
require_once("../do-an-web-php/Models/validate.php");
    class CartModel 
    {
        public function getCartList()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select * from tbl_cart_item");
            $data = array();
            while ($rows = mysqli_fetch_assoc($result)) {
                $cartItem = new Cart($rows['id'], $rows['product_id'], $rows['name'], $rows['img'], $rows['quantity']);
                array_push($data, $cartItem);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }
    }