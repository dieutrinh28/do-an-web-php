<?php
    session_start();
    require_once ("Controllers/CartController.php");

    if(isset($_POST['action'])) {
        switch($_POST['action']) {
            case "Thêm vào giỏ":
                $hang = array("id"=>$_POST['id'], "ten"=>$_POST['ten'], "gia"=>$_POST['gia'], "soluong"=>1);
                addToCart($hang);
                header("Location: ".$_SERVER['HTTP_REFERER']);
                break;
            case "Cập nhật":
                updateCart($_POST['id'], $_POST['soluong']);
                header("Location: ".$_SERVER['HTTP_REFERER']);
                break;
            case "Xóa hàng":
                deleteFromCart($_POST['id']);
                header("Location: ".$_SERVER['HTTP_REFERER']);
                break;
            default:
                break;
        }
    }
?>