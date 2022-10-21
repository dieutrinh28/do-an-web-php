<?php
    session_start();
    require_once ("Controllers/cart_module.php");

    if(isset($_POST['action'])) {
        switch($_POST['action']) {
            case "Thêm vào giỏ":
                $hang = array("id"=>$_POST['id'], "ten"=>$_POST['ten'], "gia"=>$_POST['gia'], "soluong"=>1);
                themvaogiohang($hang);
                header("Location: ".$_SERVER['HTTP_REFERER']);
                break;
            case "Cập nhật":
                capnhathangtronggio($_POST['id'], $_POST['soluong']);
                header("Location: ".$_SERVER['HTTP_REFERER']);
                break;
            case "Xóa hàng":
                xoahangkhoigio($_POST['id']);
                header("Location: ".$_SERVER['HTTP_REFERER']);
                break;
            default:
                break;
        }
    }
?>